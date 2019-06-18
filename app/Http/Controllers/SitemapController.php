<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

use App\BlogPosts;

class SitemapController extends Controller
{
    public function __construct() {

    }
    public function index(Request $request) {
        $posts = BlogPosts::select('title')
        ->where('visible', 1)
        ->where('trashed', null)->get();
        $host = $request->getSchemeAndHttpHost();
        foreach ($posts as $r => $item) {
            $posts[$r]->link = $host.'/blog/'.$item->title.'/'.$item->id;
        }
        $title = Config::get('app.name');
        return view('sitemap',['posts'=>$posts]);

    }
}
