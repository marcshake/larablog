<?php

namespace App\Http\Controllers;

use App\Music;
use App\tff_albums;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Music::all();
        $albmus = tff_albums::all();
        return view('music', ['songs'=>$songs,'albums'=>$albmus]);
    }

    public function download($id)
    {
        $filename = Music::findOrFail($id);
        return response()->download(storage_path('app/public/music/'.$filename->filename));
    }
}
