@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Group ID</th>
            <th>Image Url</th>
            <th>Action</th>
            <th>Image Url</th>
        </tr>

        <a class="btn btn-primary" href="{{route('student.create')}}">Create new student</a>

        @foreach ($students as $student )



            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->surname }}</td>
                <td>{{ $student->group_id }}</td>
                <td>{{ $student->image_url }}</td>



                <td>

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                          <a class="btn btn-primary" href="{{route('student.edit', [$student])}}">Edit</a>
                          <a class="btn btn-primary" href="{{route('student.show', [$student])}}">Show</a>
                          <form method="POST" action="{{route('student.destroy', [$student])}}">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                      </div>
                </td>

                  <td><img src="{{ $student->image_url }}" alt="{{$student->name}}" width="200"/></td>
            </tr>

        @endforeach


    </table>
</div>
@endsection
