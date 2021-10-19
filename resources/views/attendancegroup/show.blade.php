@extends('layouts.app')

@section('content')

    <h1>Information about attendance group</h1>
    <p>ID:</p>
    <p>{{$attendancegroup->id}}</p>
    <p>Name:</p>
    <p>{{$attendancegroup->name}}</p>
    <p>Description:</p>
    <p>{{$attendancegroup->description}}</p>
    <p>Difficulty:</p>
    <p>{{$attendancegroup->difficulty}}</p>
    <p>School ID:</p>
    <p>{{$attendancegroup->school_id}}</p>


@endsection
