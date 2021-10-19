@extends('layouts.app')

@section('content')
<div class="container">
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Difficulty</th>
            <th>School ID</th>
            <th>Action</th>
        </tr>
        <a class="btn btn-primary" href="{{route('attendancegroup.create')}}">Create new attendancegroup</a>
        @foreach ($attendancegroups as $attendancegroup )

            <tr>
                <td>{{ $attendancegroup->id }}</td>
                <td>{{ $attendancegroup->name }}</td>
                <td>{!! $attendancegroup->description !!}</td>
                <td>{{ $attendancegroup->difficulty }}</td>
                <td>{{ $attendancegroup->school_id }}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action
                        <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                        <a class="btn btn-primary" href="{{route('attendancegroup.edit', [$attendancegroup])}}">Edit</a>
                        <a class="btn btn-primary" href="{{route('attendancegroup.show', [$attendancegroup])}}">Show</a>
                        <form method="POST" action="{{route('attendancegroup.destroy', [$attendancegroup])}}">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>

        @endforeach


    </table>
</div>
@endsection
