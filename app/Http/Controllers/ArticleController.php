<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tree;

class ArticleController extends Controller
{
    public function index()
    {
        $out = [];
        $x = 0;
        $articles = Tree::where('Beleg', 111111)->get();

        return View('Tree', ['collection' => $articles]);
    }
}
