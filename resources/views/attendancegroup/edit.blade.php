@extends('layouts.app')

@section ('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Attendance Group') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('attendancegroup.update', [$attendancegroup]) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="group_name" class="col-md-4 col-form-label text-md-right">{{ __('Group name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="group_name" value="{{$attendancegroup->name}}" required autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="group_description" class="col-md-4 col-form-label text-md-right">{{ __('Group description') }}</label>

                                <div class="col-md-6">
                                    {{-- <input id="name" type="text" class="form-control" name="group_description" value="{{$attendancegroup->description}}" required> --}}
                                    <textarea class="summernote" name="group_description">
                                        {{$attendancegroup->description}}
                                    </textarea>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="group_difficulty" class="col-md-4 col-form-label text-md-right">{{ __('Group difficulty') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="group_difficulty" value="{{$attendancegroup->difficulty}}" required>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="group_schoolid" class="col-md-4 col-form-label text-md-right">{{ __('Group school ID') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="group_schoolid" value="{{$attendancegroup->school_id}}" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Edit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>

@endsection
