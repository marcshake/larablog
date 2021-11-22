<?php

namespace App\Http\Controllers;

use App\BlogPosts;
use App\Category;
use App\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index($title = false, $id = false)
    {
        $posts = BlogPosts::blogHome();

        if (!$title && !$id) {
            return view('theme2021.blog', ['blogposts' => $posts]);
        }
        $post = BlogPosts::getSpecific($title, $id);
        $comments = Comment::where('blogid', $id)->get();
        $description = $post->description;
        return view('theme2021.posting', ['metadescription'=>$description,'posting' => $post, 'blogposts' => $posts, 'comments' => $comments]);
    }

    public function tag($name)
    {
        $posts = BlogPosts::getByTag($name);
        $topic = $name;
        return view('theme2021.blog', ['topic'=>'Getaggt mit: '.$name,'blogposts' => $posts]);
    }

    public function category($category)
    {
        $posts = BlogPosts::getByCategory($category);
        $topic = $category;
        return view('theme2021.blog', ['topic'=>'Aus der Kategorie '.$category,'blogposts' => $posts]);
    }
    public function searchForm()
    {
        return view('partial.search');
    }
    public function search(Request $request)
    {
        $such = $request->validate(['Suchbegriff' => 'required']);
        $posts = BlogPosts::search($such['Suchbegriff']);
        return view('theme2021.results', ['results' => $posts]);
    }
}
