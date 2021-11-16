<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Cache;
use League\CommonMark\CommonMarkConverter;
use League\HTMLToMarkdown\HtmlConverter;

/**
 * Class BlogPosts
 *
 * @package App
 */
class BlogPosts extends Model
{
    /**
     * @var string
     */
    protected $table = 'blog_posts';

    /**
     * Get the Authors name
     *
     * @return HasOne
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
    public static function overview($wip)
    {
        $posts = self::select('id', 'title', 'visible', 'created_at', 'author')->orderBy('id', 'DESC')
            ->with('mainImagePath')->with('tags')->with('authorname')->with('categories')
            ->where('trashed', null)->paginate(100);
        if ($wip) {
            $posts = self::select('id', 'title', 'visible', 'created_at', 'author')->orderBy('id', 'DESC')
                ->with('mainImagePath')->with('tags')->with('authorname')->with('categories')
                ->where('trashed', null)->where('visible', 0)->paginate(100);
        }
        foreach ($posts as $r => $post) {
            $posts[$r]->url = self::makeUrl($post->title);
        }
        return $posts;
    }

    /**
     * @return mixed
     */
    public static function blogHome()
    {
        $posts = self::orderBy('id', 'DESC')->where('visible', 1)->where('trashed', null)->with('authorname')->with('mainImagePath')->paginate(15);
        foreach ($posts as $r => $post) {
            if($post->contentsmd == null) {
                self::convertmd($post);
            }
            $posts[$r]->shortcontents = self::shorten($post->contentsmd);
            $posts[$r]->url = self::makeUrl($post->title);
        }
        return $posts;
    }

    /**
     * @param  $string
     * @return string
     */
    private static function makeUrl($string)
    {
        return urlencode($string);
    }

    /**
     * @param  $category
     * @return mixed
     */
    public static function getByCategory($category)
    {
        $posts = self::orderBy('id', 'DESC')
            ->where('visible', 1)
            ->where('trashed', null)
            ->whereHas(
                'categories',
                function ($query) use ($category) {
                    $query->where('name', $category);
                }
            )->with('authorname')->with('mainImagePath')
            ->paginate(15);
        foreach ($posts as $r => $post) {
            if($post->contentsmd==null) {
                self::convertmd($post);
            }
            $posts[$r]->shortcontents = self::shorten($post->contentsmd);
            $posts[$r]->url = self::makeUrl($post->title);
        }
        return $posts;
    }

    /**
     * @param  $tag
     * @return mixed
     */
    public static function getByTag($tag)
    {
        $posts = self::orderBy('id', 'DESC')
            ->where('visible', 1)
            ->where('trashed', null)
            ->whereHas(
                'tags',
                function ($query) use ($tag) {
                    $query->where('tag', $tag);
                }
            )->with('authorname')->with('mainImagePath')
            ->paginate(15);
        foreach ($posts as $r => $post) {
            if($post->contentsmd==null) {
                self::convertmd($post);
            }

            $posts[$r]->shortcontents = self::shorten($post->contents);
            $posts[$r]->url = self::makeUrl($post->title);
        }
        return $posts;
    }

    /**
     * @return HasOne
     */
    public function mainImagePath()
    {
        return $this->hasOne('App\Media', 'id', 'mainImage');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tags', 'tags2_blogs', 'blogId', 'tagId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Comment', 'blogid', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category2_blogs', 'blogId', 'catId');
    }

    /**
     * @param  $title
     * @param  $id
     * @return mixed
     */
    public static function getPreview($title, $id)
    {
        $title = urldecode($title);
        $posts = self::where('title', $title)->where('id', $id)->first();
        $posts->url = self::makeUrl($posts->url);
        return $posts;
    }

    /**
     * @param  $title
     * @param  $id
     * @return mixed
     */
    public static function getSpecific($title, $id)
    {
        $title = urldecode($title);

        $hash = md5($title . $id);


        $posts =self::where('trashed', null)->where('visible', 1)->where('title', $title)->where('id', $id)->with('mainImagePath')->with('tags')->with('comments')->firstOrFail();
            
        
        if($posts->contentsmd == null) {
            $posts = self::convertmd($posts);
        }
        $html = new CommonMarkConverter();
        // Only Markdown now.
        $posts->output = $html->convertToHtml($posts->contentsmd);        
        $posts->url = self::makeUrl($posts->title);

        return $posts;
    }

    public static function convertmd($posts)
    {
        $tmp = new HtmlConverter(['header_style'=>'atx']);
        $markdown = $tmp->convert($posts->contents);
        $posts->contentsmd = $markdown;
        $posts->save();
        return $posts;
    }

    /**
     * @param  $string
     * @return false|string
     */
    public static function shorten($string)
    {
        
        $line = strtok($string, "\n");
        $line = str_replace(['_','*'],['',''],$line);  
        return $line;
    }

    /**
     * @param  $string
     * @return mixed
     */
    public static function search($string)
    {
        return self::where('contentsmd', 'like', '%' . $string . '%')->where('visible', 1)->where('trashed', null)->get();
    }
}
