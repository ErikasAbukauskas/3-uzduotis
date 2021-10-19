@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Place</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <a class="btn btn-primary" href="{{route('school.create')}}">Create new school</a>
        @foreach ($schools as $school )

            <tr>
                <td>{{ $school->id }}</td>
                <td>{{ $school->name }}</td>
                <td>{!! $school->description !!}</td>
                <td>{{ $school->place }}</td>
                <td>{{ $school->phone }}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action
                        <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                        <a class="btn btn-primary" href="{{route('school.edit', [$school])}}">Edit</a>
                        <a class="btn btn-primary" href="{{route('school.show', [$school])}}">Show</a>
                        <form method="POST" action="{{route('school.destroy', [$school])}}">
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
