@extends('layouts.app')

@section('content')

    <form method="POST" action="{{route('student.store')}}">

        Name: <input type="text" name="student_name">
        Surname: <input type="text" name="student_surname">
        Group ID: <input type="number" name="student_group_id">
        Image Url: <input type="url" name="student_image_url">

        @csrf

        <button type="submit"> Create </button>

    </form>

    <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-md-6">
                <input type="file" name="image" class="form-control">
            </div>

            <div class="col-md-6">
                <button type="submit" class="btn btn-success">Upload</button>
            </div>

        </div>
    </form>

@endsection
