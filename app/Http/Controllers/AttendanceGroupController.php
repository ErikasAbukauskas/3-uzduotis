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
        $attendancegroups = AttendanceGroup::all(); // (AttendanceGroup - cia yra klase todel rasome pirma didzioji ir Group didzioji, klases rasomos is didziosios raides)
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


        //DB stulpelio pavadinimas(name) = input laukelio vardas(client_name)
        $attendancegroup->name = $request->group_name;
        $attendancegroup->description = $request->group_description;
        $attendancegroup->difficulty = $request->group_difficulty;
        $attendancegroup->school_id = $request->group_schoolid;

        $attendancegroup->save(); // insert komada i duomenu baze

        return redirect()->route("attendancegroup.index"); // redirect tas pats kas header:location
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function show(AttendanceGroup $attendancegroup)
    {
        return view("attendancegroup.show", ["attendancegroup"=>$attendancegroup]);
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
        $attendancegroup->name = $request->group_name;
        $attendancegroup->description = $request->group_description;
        $attendancegroup->difficulty = $request->group_difficulty;
        $attendancegroup->school_id = $request->group_schoolid;

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
