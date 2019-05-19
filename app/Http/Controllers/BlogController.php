<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPosts;

class BlogController extends Controller
{
    public function index($title=false, $id = false)
    {
        if(!$title && !$id) {
        $posts = BlogPosts::orderBy('id', 'DESC')->where('visible', 1)->where('trashed', null)->paginate(15);
        return view('blog', ['blogposts'=>$posts]);
        }
        $post = BlogPosts::getSpecific($title,$id);
        return view('posting', ['posting'=>$post]);
        
    }
}
