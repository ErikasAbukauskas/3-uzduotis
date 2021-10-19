@extends('layouts.app')

@section ('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create student') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('student.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="student_name" class="col-md-4 col-form-label text-md-right">{{ __('Student name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="student_name" required autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="student_surname" class="col-md-4 col-form-label text-md-right">{{ __('Student surname') }}</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control" name="student_surname" required>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="student_groupid" class="col-md-4 col-form-label text-md-right">{{ __('Group ID') }}</label>

                                <div class="col-md-6">
                                    <input id="groupid" type="text" class="form-control" name="student_groupid" required>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="student_imageurl" class="col-md-4 col-form-label text-md-right">{{ __('Student image') }}</label>

                                <div class="col-md-6">
                                    <input id="imageurl" type="file" class="form-control" name="student_imageurl">

                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

