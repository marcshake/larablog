<?php

namespace App\Http\Controllers;

use App\BlogPosts;
use Illuminate\Http\Request;

class AdminController extends Controller
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
        return view('adminPanel', ['beitraege' => BlogPosts::count()]);
    }
    /**
     * Get a list of blogentries
     *
     * @return void
     */
    public function list()
    {
        $posts = BlogPosts::overview();
        return view('adminListBlogs', ['collection'=>$posts]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminNew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->title==null) {
            return redirect('admin/new')->with('warning', 'Der Titel darf nicht leer sein');
        }
        if ($request->contents==null) {
            return redirect('admin/new')->with('warning', 'Der Inhalt darf nicht leer sein');
        }
        if (isset($request->lb) && $request->lb == 1) {
            $request->contents = nl2br($request->contents);
        }
        $contents = new BlogPosts;
        $contents->title = $request->title;
        $contents->contents = $request->contents;
        $contents->author = \Auth::user()->id;
        $contents->save();
        $id = $contents->id;
        return redirect('admin/edit/'.$id)->with('status', 'Änderungen gespeichert!');
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
        $contents = BlogPosts::findOrFail($id);
        return view('adminEditor', ['contents' => $contents]);
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
        #dd($request);
        $contents = BlogPosts::findOrFail($id);
        $contents->title = $request->title;
        $contents->contents = $request->contents;
        $contents->save();
        return redirect('admin/edit/'.$id)->with('status', 'Änderungen gespeichert!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entry = BlogPosts::findOrFail($id);
        $entry->delete();
        return redirect('admin/blogs')->with('status', 'Eintrag gelöscht');
    }
}
