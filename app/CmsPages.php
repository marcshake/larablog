<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsPages extends Model
{
    protected $table = 'cms_pages';
    public static function getHomepage()
    {
        return self::where('filename', 'home')->firstOrFail();
    }

    public static function getSnippets()
    {
        $snip = self::where('filename', 'snippets')->first();
        if ($snip == null) {
            $snip = new \StdClass();
            $snip->contents = '';
        }
        return $snip->contents;
    }
}
