<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;

class UserManagerController extends Controller
{
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
        $users = User::paginate(20);
        return view('admin.user', ['users' => ($users)]);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.userEdit', ['edit' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        request()->validate([

            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        $outpath = 'userimages';

        if ($request->password != '') {
            $user->password = bcrypt($request->password);
        }
        if ($request->file('avatar')->isValid()) {
            $filename = $user->id . uniqid() . '.jpg';
            $imageManager = new ImageManager;
            if (!Storage::exists($outpath)) {
                Storage::makeDirectory($outpath);
            }
            //$save = Storage::path($outpath);

            $imageManager->make($request->file('avatar'))->fit(100)->save(public_path($outpath).'/' . $filename);
        }

        $user->save();
        return redirect('admin/user/edit/' . $user->id)->with('status', 'Edited User');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
