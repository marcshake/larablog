<?php
namespace App\Http\Controllers;
use App\BlogPosts;


use Illuminate\Http\Request;
/**
 * Create RSS-Feed
 */
class RssController extends Controller
{
    /**
     * Returns
     *
     * @return void
     */
    public function index()
    {
        $posts = BlogPosts::getPosts(100);
        

    }
}
