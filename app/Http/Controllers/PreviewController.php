<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPosts;

/**
 * Show Preview of Posting or CMS
 */
class PreviewController extends Controller
{
    /**
     * Invited people only
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($title, $id)
    {
        $post = BlogPosts::getPreview($title, $id);
        $posts = BlogPosts::blogHome();
        return view('theme2021.posting', ['posting'=>$post,'blogposts'=>$posts]); //todo: Hook in View
    }
}
