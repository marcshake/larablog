<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPosts;
use App\CmsPages;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = BlogPosts::getPosts(3);
        $morePosts  = BlogPosts::getPosts(25);
        foreach ($posts as $r=> $entry) {
            $posts[$r]->contents = $this->shorten($entry->contents);
        }
        foreach ($morePosts as $r=> $entry) {
            $morePosts[$r]->contents = $this->shorten($entry->contents);
        }
        $home = CmsPages::getHomepage();

        return view('tlog', ['posts'=>$posts, 'morePosts'=>$morePosts, 'home'=>$home]);
    }

    private function shorten($string)
    {
        $v['contents'] = $string;
        $start = strpos($v['contents'], '<p>');
        $end = strpos($v['contents'], '</p>', $start);
        $paragraph = substr($v['contents'], $start, $end - $start + 4);
//        $tmp[$r]['contents'] = $paragraph;
        return $paragraph;
    }
}
