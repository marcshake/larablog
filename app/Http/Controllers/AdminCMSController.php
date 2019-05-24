<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmsPages;

class AdminCMSController extends Controller
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
        $collection = CmsPages::all();
        return view('admin.cms', ['collection'=>$collection]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cmsNew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'filename' => 'required',
            'contents' => 'required'
        ]);
            $cms = new CmsPages;
            $cms->title = $request->title;
            $cms->filename = $request->filename;
            $cms->contents = $request->contents;
            $cms->save();
            $id = $cms->id;
            return redirect('admin/cms/edit/'.$id)->with('status', 'Seite gespeichert');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = CmsPages::findOrFail($id);
        return view('admin.cmsEdit', ['page'=>$page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'title' => 'required',
            'filename' => 'required',
            'contents' => 'required'
        ]);

        $page = CmsPages::findOrFail($id);
        $page->title = $request->title;
        $page->contents = $request->contents;
        $page->filename = $request->filename;
        $page->save();
        return redirect('admin/cms')->with('status', 'Seite gespeichert');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
