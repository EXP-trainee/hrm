<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
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
		$listRole =  Role::all();
		$permissions = Permission::all();
		return view('admin.roles.index', ['listRole' => $listRole,'permissions'=>$permissions]);
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
		$role = new Role;
		$role->name = $request->name;
		$role->guard_name = $request->guard_name;
		$role->save();
		
		$role->syncPermissions($request->permissions);
		
		return redirect(route('admin.roles.index'));
		
		//		$this->validate($request, Role::rules());
		//		$role = Role::create($request->all());
		//		return back()->withSuccess(trans('app.success_store'));
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(Request $request)
	{

	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$item = Role::find($id);
		$item->load('permissions');
		$permissions =  Permission::all();
		return view('admin.roles.edit', compact('item','permissions'));
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
		$findUpdate = Role::find($id);
		$findUpdate->name = $request->name;
		$findUpdate->guard_name = $request->guard_name;
		$findUpdate->save();
		$findUpdate->syncPermissions($request->permissions);
		return redirect()->route(ADMIN . '.roles.index')->withSuccess(trans('app.success_update'));
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		Role::destroy($id);
		return back()->withSuccess(trans('app.success_destroy'));
	}
}
