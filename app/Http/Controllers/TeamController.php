<?php

namespace App\Http\Controllers;

use App\Team;
use App\User;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:roles.view', ['only' => ['index','store']]);
    //     $this->middleware('permission:roles.create', ['only' => ['create','store']]);
    //     $this->middleware('permission:roles.edit', ['only' => ['edit','update']]);
    //     $this->middleware('permission:roles.delete', ['only' => ['destroy']]);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $teams = Team::all();
        $teams = Team::withCount("users")->with(["leader"])->get();
       
        return view('admin.teams.index', compact("teams"));
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
        $team = new Team;
        Team::create($request->all());
        // $userinfo->name = $request->name;
        // $userinfo->leader_id = $request->leader_id;
        // $userinfo->save();
        return redirect(route('admin.teams.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return back();
    }

    // public function getmember()
    // {
   
    //     $members = Team::with(["users"])->get();
    //     $leader = User::where('id','like' ,"leader_id")->get();
    //     //dd($members);
    //     return view('admin.teams.index', compact("members","leader"));
        
    // }
    
}
