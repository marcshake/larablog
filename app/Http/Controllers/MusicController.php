<?php

namespace App\Http\Controllers;

use App\Music;

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
        return view('music', ['songs'=>$songs]);
    }

    public function download($id)
    {
        //
    }
}
