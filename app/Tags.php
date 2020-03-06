<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tags
 *
 * @package App
 */
class Tags extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['tag'];
    /**
     * @var string
     */
    protected $table = 'tags';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function BlogPosts()
    {
        return $this->belongsToMany('App\BlogPosts', 'tags2_blogs', 'tagId', 'blogId');
    }
}
