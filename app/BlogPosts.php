<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPosts extends Model
{

    /**
     * Get the Authors name
     *
     * @return void
     */
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
        return self::select('id', 'title', 'visible', 'created_at', 'author')->orderBy('updated_at', 'DESC')->where('trashed', null)->paginate(100);
    }
    public static function blogHome()
    {
        $posts = self::select('mainImage', 'contents', 'id', 'title', 'visible', 'created_at', 'author')->orderBy('updated_at', 'DESC')->where('visible', 1)->where('trashed', null)->paginate(15);
        foreach ($posts as $r => $post) {
            $posts[$r]->shortcontents = self::shorten($post->contents);
        }
        return $posts;
    }

    public static function getByCategory($category)
    {
        $posts = self::select('mainImage', 'contents', 'id', 'title', 'visible', 'updated_at', 'author')
            ->orderBy('created_at', 'DESC')
            ->where('visible', 1)
            ->where('trashed', null)
            ->whereHas('categories', function ($query) use ($category) {
                $query->where('name', $category);
            })
            ->paginate(15);
        foreach ($posts as $r => $post) {
            $posts[$r]->shortcontents = self::shorten($post->contents);
        }
        return $posts;
    }


    public static function getByTag($tag)
    {
        $posts = self::select('mainImage', 'contents', 'id', 'title', 'visible', 'updated_at', 'author')
            ->orderBy('created_at', 'DESC')
            ->where('visible', 1)
            ->where('trashed', null)
            ->whereHas('tags', function ($query) use ($tag) {
                $query->where('tag', $tag);
            })
            ->paginate(15);
        foreach ($posts as $r => $post) {
            $posts[$r]->shortcontents = self::shorten($post->contents);
        }
        return $posts;
    }
    /**
     * Get a List of Posts
     *
     * @param INT number of rows
     * @return void
     */
    public static function getPosts($limit)
    {
        return self::orderBy('updated_at', 'DESC')->where('trashed', null)->where('visible', 1)->limit($limit)->get();
    }

    public function mainImagePath()
    {
        return $this->hasOne('App\Media', 'id', 'mainImage');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tags', 'Tags2_blogs', 'blogId', 'tagId');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category2_blogs', 'blogId', 'catId');
    }

    public static function getSpecific($title, $id)
    {
        return self::where('trashed', null)->where('visible', 1)->where('title', $title)->where('id', $id)->firstOrFail();
    }

    public static function shorten($string)
    {
        $v['contents'] = $string;
        $start = strpos($v['contents'], '<p>');
        $end = strpos($v['contents'], '</p>', $start);
        $paragraph = substr($v['contents'], $start, $end - $start + 4);
//        $tmp[$r]['contents'] = $paragraph;
        return $paragraph;
    }
}
