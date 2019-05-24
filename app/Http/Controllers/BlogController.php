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
            $categories = Category::all();
            return view('blog', ['blogposts'=>$posts,'categories'=>$categories]);
        }
        $post = BlogPosts::getSpecific($title, $id);
        return view('posting', ['posting'=>$post,'blogposts'=>$posts]); //todo: Hook in View
    }

    public function tag($name)
    {
        $categories = Category::all();
        $posts = BlogPosts::getByTag($name);
        return view('blog', ['blogposts'=>$posts,'categories'=>$categories]);
    }

    public function category($category)
    {
        $categories = Category::all();
        $posts = BlogPosts::getByCategory($category);
        return view('blog', ['blogposts'=>$posts,'categories'=>$categories]);
    }
}
