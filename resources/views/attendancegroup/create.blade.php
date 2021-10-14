@extends('layouts.app')

@section('content')

    <form method="POST" action="{{route('attendancegroup.store')}}">

        Name: <input type="text" name="attendancegroup_name">
        Description: <input type="text" name="attendancegroup_description">
        Difficulty: <input type="text" name="attendancegroup_difficulty">
        School ID: <input type="number" name="attendancegroup_school_id">

        @csrf

        <button type="submit"> Create </button>

    </form>

@endsection
