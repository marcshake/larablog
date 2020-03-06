<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class CmsPages extends Model
{
    protected $table = 'cms_pages';
    public static function getHomepage()
    {
        return self::where('filename', 'home')->firstOrFail();
    }

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

    public static function getMainMenu()
    {
        $file = Cache::remember(
            'MainMenu',
            10,
            function () {
                return self::where('filename', 'MAINMENU')->first();
            }
        );
        $contents = isset($file->contents) ? $file->contents : null;
        return $contents;
    }
}
