<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPosts;
use App\Category;

class BlogController extends Controller
{
    public function index($title=false, $id = false)
    {
        if (!$title && !$id) {
            $posts = BlogPosts::blogHome();
            $categories = Category::all();
            return view('blog', ['blogposts'=>$posts,'categories'=>$categories]);
        }
        $post = BlogPosts::getSpecific($title, $id);
        return view('posting', ['posting'=>$post]);
    }

    public function tag($name)
    {
        $categories = Category::all();
        $posts = BlogPosts::getByTag($name);
        return view('blog', ['blogposts'=>$posts,'categories'=>$categories]);
    }
}
