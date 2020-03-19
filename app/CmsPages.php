<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

/**
 * Class CmsPages
 *
 * @package App
 */
class CmsPages extends Model
{
    /**
     * @var string
     */
    protected $table = 'cms_pages';

    /**
     * @return mixed
     */
    public static function getHomepage()
    {
        return self::where('filename', 'home')->firstOrFail();
    }

    /**
     * @return string
     */
    public static function getSnippets()
    {
        $snip = Cache::remember(
            'snippets',
            60,
            function () {
                return self::where('filename', 'snippets')->first();
            }
        );
        if ($snip == null) {
            $snip = new \StdClass();
            $snip->contents = '';
        }
        return $snip->contents;
    }

    /**
     * @return |null
     */
    public static function getMainMenu()
    {
        $file = Cache::remember(
            'MainMenu',
            60,
            function () {
                return self::where('filename', 'MAINMENU')->first();
            }
        );
        $contents = isset($file->contents) ? $file->contents : null;
        return $contents;
    }
}
