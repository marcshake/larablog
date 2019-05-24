<?php
namespace App\Http\ViewComposers;

use App\Category;
use App\BlogPosts;
use App\Tags;

class CategoriesComposer
{
    public function compose($view)
    {
        $view->with('categories', Category::all());
        $view->with('allposts', BlogPosts::blogHome());
        $view->with('alltags', Tags::take(30)->get());
    }
}
