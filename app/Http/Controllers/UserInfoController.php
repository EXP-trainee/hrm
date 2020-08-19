<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_info;

class UserinfoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listUser_info = User_info::all();  
       // $listUser_info = User_info::paginate(10);
        return view('admin.user_info.index', ['listUser_info' => $listUser_info]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user_info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userinfo = new User_info;
        $userinfo->username = $request->username;
        $userinfo->avatar = $request->avatar;
        $userinfo->phone = $request->phone;
        $userinfo->phone_2 = $request->phone_2;
        $userinfo->phone_emergency = $request->phone_emergency;
        $userinfo->dob = $request->dob;
        $userinfo->national_id = $request->national_id;
        $userinfo->national_id_image = $request->national_id_image;
        $userinfo->driving_license = $request->driving_license;
        $userinfo->driving_license_image = $request->driving_license_image;
        $userinfo->address = $request->address;
        $userinfo->relationship = $request->relationship;
        $userinfo->banks = $request->banks;
        $userinfo->role = $request->role;
        $userinfo->bio = $request->bio;
        $userinfo->status = $request->status;
        $userinfo->user_id = $request->user_id;
        $userinfo->team_id = $request->team_id;
        $userinfo->save();
        return redirect(route('user-infos.index'));
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
        $findUser_info= User_info::find($id);
        return view('admin.user_info.edit',['findUser_info' => $findUser_info]);
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
        $findUpdate = User_info::find($id);
        $findUpdate->username = $request->username;
        $findUpdate->username = $request->username;
        $findUpdate->avatar = $request->avatar;
        $findUpdate->phone = $request->phone;
        $findUpdate->phone_2 = $request->phone_2;
        $findUpdate->phone_emergency = $request->phone_emergency;
        $findUpdate->dob = $request->dob;
        $findUpdate->national_id = $request->national_id;
        $findUpdate->national_id_image = $request->national_id_image;
        $findUpdate->driving_license = $request->driving_license;
        $findUpdate->driving_license_image = $request->driving_license_image;
        $findUpdate->address = $request->address;
        $findUpdate->relationship = $request->relationship;
        $findUpdate->banks = $request->banks;
        $findUpdate->role = $request->role;
        $findUpdate->bio = $request->bio;
        $findUpdate->status = $request->status;
        $findUpdate->user_id = $request->user_id;
        $findUpdate->team_id = $request->team_id;
        $findUpdate->save();
        return redirect(route('user-infos.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findDelete = User_info::find($id)->delete();
        return redirect(route('user-infos.index'));
    }
}
