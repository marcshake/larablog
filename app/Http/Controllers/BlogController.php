<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPosts;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPosts::orderBy('id', 'DESC')->paginate(15);
        return view('tlog', ['posts'=>$posts]);
    }
}
