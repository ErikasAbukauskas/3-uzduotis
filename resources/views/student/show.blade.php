@extends('layouts.app')

@section('content')

    <h1>Information about student</h1>
    <p>{{$student->id}}</p>
    <p>{{$student->name}}</p>
    <p>{{$student->surname}}</p>
    <p>{{$student->group_id}}</p>
    <p>{{$student->image_url}}</p>

    <img src="{{$student->image_url}}" alt='{{$student->name}}' width="200"/>

@endsection
