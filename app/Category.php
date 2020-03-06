<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @package App
 */
class Category extends Model
{
    /**
     * @var string
     */
    protected $table = 'categories';
    /**
     * @var array
     */
    public $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function BlogPosts()
    {
        return $this->belongsToMany('App\BlogPosts', 'Category2_blogs', 'blogId', 'catId');
    }
}
