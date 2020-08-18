<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_infor;

class UserinforController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:roles.view', ['only' => ['index','store']]);
        $this->middleware('permission:roles.create', ['only' => ['create','store']]);
        $this->middleware('permission:roles.edit', ['only' => ['edit','update']]);
        $this->middleware('permission:roles.delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listUser_infor = User_infor::all();  
        $listUser_infor = User_infor::paginate(3);
        return view('admin.user_infor.index', ['listUser_infor' => $listUser_infor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user_infor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userinfor = new User_infor;
        $userinfor->username = $request->username;
        $userinfor->avatar = $request->avatar;
        $userinfor->phone = $request->phone;
        $userinfor->phone_2 = $request->phone_2;
        $userinfor->phone_emergency = $request->phone_emergency;
        $userinfor->dob = $request->dob;
        $userinfor->national_id = $request->national_id;
        $userinfor->national_id_image = $request->national_id_image;
        $userinfor->driving_license = $request->driving_license;
        $userinfor->driving_license_image = $request->driving_license_image;
        $userinfor->address = $request->address;
        $userinfor->relationship = $request->relationship;
        $userinfor->banks = $request->banks;
        $userinfor->role = $request->role;
        $userinfor->bio = $request->bio;
        $userinfor->cmnd = $request->cmnd;
        $userinfor->status = $request->status;
        $userinfor->user_id = $request->user_id;
        $userinfor->team_id = $request->team_id;
        $userinfor->save();
        return redirect(route('userinfors.index'));
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
        $findUser_infor= User_infor::find($id);
        return view('admin.user_infor.edit',['findUser_infor' => $findUser_infor]);
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
        $findUpdate = User_infor::find($id);
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
        $findUpdate->cmnd = $request->cmnd;
        $findUpdate->status = $request->status;
        $findUpdate->user_id = $request->user_id;
        $findUpdate->team_id = $request->team_id;
        $findUpdate->save();
        return redirect(route('user_infor.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findDelete = User_infor::find($id)->delete();
        return redirect(route('userinfors.index'));
    }
}
