<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPosts;
use App\Category;

class BlogController extends Controller
{
    public function index($title=false, $id = false)
    {
        $posts = BlogPosts::blogHome();
        if (!$title && !$id) {
            return view('blog', ['blogposts'=>$posts]);
        }
        $post = BlogPosts::getSpecific($title, $id);
        return view('posting', ['posting'=>$post,'blogposts'=>$posts]); //todo: Hook in View
    }

    public function tag($name)
    {
        $posts = BlogPosts::getByTag($name);
        return view('blog', ['blogposts'=>$posts]);
    }

    public function category($category)
    {
        $posts = BlogPosts::getByCategory($category);
        return view('blog', ['blogposts'=>$posts]);
    }
}
