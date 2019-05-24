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
}
