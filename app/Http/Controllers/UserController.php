<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = User::latest('updated_at')->get();

        return view('admin.users.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, User::rules());
        
        User::create($request->all());

        return back()->withSuccess(trans('app.success_store'));

        // $user = new User;
        // $user->username = $request->username;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->avatar = $request->avatar;
        // $user->phone = $request->phone;
        // $user->phone_2 = $request->phone_2;
        // $user->phone_emergency = $request->phone_emergency;
        // $user->dob = $request->dob;
        // $user->national_id = $request->national_id;
        // $user->national_id_image = $request->national_id_image;
        // $user->driving_license = $request->driving_license;
        // $user->driving_license_image = $request->driving_license_image;
        // $user->address = $request->address;
        // $user->relationship = $request->relationship;
        // $user->banks = $request->banks;
        // $user->role = $request->role;
        // $user->bio = $request->bio;
        // $user->status = $request->status;
        // $user->team_id = $request->team_id;
        // $user->save();
        // return redirect(route('admin.uses.index'));
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
        $item = User::findOrFail($id);

        return view('admin.users.edit', compact('item'));
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
        $this->validate($request, User::rules(true, $id));

        $item = User::findOrFail($id);

        $item->update($request->all());

        return redirect()->route(ADMIN . '.users.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return back()->withSuccess(trans('app.success_destroy')); 
    }

    public function showuserinfo()
    {
        $userinfo = User::find(auth()->id())->userinfo;
        //return view('user_info.index', ['userinfo' => $userinfo]);
         dd( $userinfo);
    }

    public function doUpload(Request $request)
    {
        $file = $request->filesTest;

        $file->move('img', $file->getClientOriginalName());
        
    }
}

