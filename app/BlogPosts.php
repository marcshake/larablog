<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPosts extends Model
{
    public function authorName()
    {
        return $this->hasOne('App\User', 'id', 'author');
    }
    /**
     * Gets a list of blogentries without the content
     *
     * @return void
     */
    public static function overview()
    {
        return self::select('id', 'title', 'visible', 'created_at', 'author')->orderBy('id', 'DESC')->paginate(100);
    }
}
