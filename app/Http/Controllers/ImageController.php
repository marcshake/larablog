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
    public function ajaxImage($id)
    {
        $img = Media::findOrFail($id);
        return response()->json(['id'=>$img->id, 'thumbnail'=>($img->filename)]);
    }
    public function gallery()
    {
        $collection = Media::orderBy('id', 'desc')->paginate(100);
        return view('admin.adminInlineImage', ['collection'=>$collection]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = Media::orderBy('id', 'desc')->paginate(100);
        return view('admin.adminImageBrowser', ['collection'=>$collection]);
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
        $path = public_path('storage/thumbnail/'.$originalName);
        $pathtiny = public_path('storage/thumbnail/tiny_'.$originalName);
        $iM->make($path)->fit(400, 225)->save($path);
        $iM->make($path)->fit(200)->save($pathtiny);
        $media = new Media;
        $media->filename = $originalName;
        $media->internalFilename = $internalFilename;
        $media->userID = Auth::user()->id;
        $media->thumbnail = $originalName;

        $media->save();

        return redirect('admin/filer')->with('status', 'Bild hochgeladen');
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
