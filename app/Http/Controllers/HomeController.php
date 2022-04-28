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
        $home = CmsPages::getHomepage();
        $posts = BlogPosts::blogHome();

        return view('theme2021.home', ['home'=>$home,'blogposts'=>$posts]);
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
