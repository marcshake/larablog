<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPosts;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = BlogPosts::orderBy('id', 'DESC')->limit(5)->get();
        $morePosts  = BlogPosts::orderBy('id', 'DESC')->limit(25)->get();
        foreach ($posts as $r=> $entry) {
            $posts[$r]->contents = $this->shorten($entry->contents);
        }
        foreach ($morePosts as $r=> $entry) {
            $morePosts[$r]->contents = $this->shorten($entry->contents);
        }
        return view('tlog', ['posts'=>$posts, 'morePosts'=>$morePosts]);
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
