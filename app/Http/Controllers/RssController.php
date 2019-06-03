<?php
namespace App\Http\Controllers;

use App\BlogPosts;
use Illuminate\Support\Facades\Config;

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
    public function index(Request $request)
    {
        $posts = BlogPosts::getPosts(100);
        $title = Config::get('app.name');
        $host = $request->getSchemeAndHttpHost();
        foreach ($posts as $r => $item) {
            $posts[$r]->link = $host.'/'.$item->title.'/'.$item->id;
        }
        $feed = view('rss', ['posts'=>$posts,'title'=>$title]);
        return response($feed)->header('Content-Type', 'application/rss+xml');
    }
}
