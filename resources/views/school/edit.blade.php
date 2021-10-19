@extends('layouts.app')

@section ('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit school') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('school.update', [$school]) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="school_name" class="col-md-4 col-form-label text-md-right">{{ __('School name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="school_name" value="{{$school->name}}" required autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="school_description" class="col-md-4 col-form-label text-md-right">{{ __('School description') }}</label>

                                <div class="col-md-6">
                                    {{-- <input id="name" type="text" class="form-control" name="group_description" value="{{$attendancegroup->description}}" required> --}}
                                    <textarea class="summernote" name="school_description">
                                        {{$school->description}}
                                    </textarea>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="school_place" class="col-md-4 col-form-label text-md-right">{{ __('School place') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="school_place" value="{{$school->place}}" required>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="school_phone" class="col-md-4 col-form-label text-md-right">{{ __('School phone') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="school_phone" value="{{$school->phone}}" required>
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
