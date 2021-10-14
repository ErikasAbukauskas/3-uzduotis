<?php

namespace App\Http\Controllers;

use App\AttendanceGroup;
use Illuminate\Http\Request;

class AttendanceGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendancegroups = AttendanceGroup::all();
        return view("attendancegroup.index", ["attendancegroups"=>$attendancegroups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("attendancegroup.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attendancegroup = new AttendanceGroup;

        $attendancegroup->name= $request->attendancegroup_name;
        $attendancegroup->description= $request->attendancegroup_description;
        $attendancegroup->difficulty= $request->attendancegroup_difficulty;
        $attendancegroup->school_id= $request->attendancegroup_school_id;

        $attendancegroup->save();

        return redirect()->route("attendancegroup.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function show(AttendanceGroup $attendancegroup)
    {
        return view('attendancegroup.show', ['attendancegroup'=>$attendancegroup]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(AttendanceGroup $attendancegroup)
    {
        return view("attendancegroup.edit", ["attendancegroup"=>$attendancegroup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AttendanceGroup $attendancegroup)
    {
        $attendancegroup->name= $request->attendancegroup_name;
        $attendancegroup->description= $request->attendancegroup_description;
        $attendancegroup->difficulty= $request->attendancegroup_difficulty;
        $attendancegroup->school_id= $request->attendancegroup_school_id;

        $attendancegroup->save();

        return redirect()->route("attendancegroup.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttendanceGroup $attendancegroup)
    {
        $attendancegroup->delete();
        return redirect()->route("attendancegroup.index");
    }
}
