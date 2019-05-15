<?php

namespace App\Http\Controllers;

use App\Media;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;

class ImageController extends Controller
{
    /**
     * Invited people only
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminImageBrowser', ['collection'=>Media::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $validated = $request->validate(['file' => 'image|required']);
            $file = $request->file;
            $originalName = $file->getClientOriginalName();
            $internalFilename = $file->getFileName();
            $iM = new ImageManager;

            $file->storeAs('public/uploads', $originalName);
            $file->storeAs('public/thumbnail', $originalName);
            $path = storage_path('thumbnail/'.$originalName); // HÄ?! Geht voll nicht.
            dd($path);
            $iM->make($path)->fit(400)->save($path);
            $media = new Media;
            $media->filename = $originalName;
            $media->internalFilename = $internalFilename;
            $media->userID = Auth::user()->id;
            $media->thumbnail = $thumbnail;
            $media->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        //
    }
}
