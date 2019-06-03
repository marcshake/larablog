<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmsPages;

class CMSController extends Controller
{
    public function index($slug)
    {
        if ($slug=='snippets') {
            $slug == 'home';
        }
        $page = CmsPages::where('filename', $slug)->firstOrFail();
        return view('page', ['page'=>$page]);
    }
}
