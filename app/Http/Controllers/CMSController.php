<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmsPages;
class CMSController extends Controller
{
    public function index($slug) {
        $page = CmsPages::where('filename', $slug)->firstOrFail();
        return view('page',['page'=>$page]);
    }
}
