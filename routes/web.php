<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware("auth");

Route::prefix('students')->group(function () {

    Route::get('','StudentController@index')->name('student.index')->middleware("auth");
    Route::get('create','StudentController@create')->name('student.create')->middleware("auth");
    Route::post('store','StudentController@store')->name('student.store')->middleware("auth");
    Route::get('edit/{student}','StudentController@edit')->name('student.edit')->middleware("auth");
    Route::post('update/{student}','StudentController@update')->name('student.update')->middleware("auth");
    Route::post('delete/{student}','StudentController@destroy')->name('student.destroy')->middleware("auth");
    Route::get('show/{student}','StudentController@show')->name('student.show')->middleware("auth");
});

Route::prefix('attendancegroups')->group(function () {

    Route::get('','AttendanceGroupController@index')->name('attendancegroup.index')->middleware("auth");
    Route::get('create','AttendanceGroupController@create')->name('attendancegroup.create')->middleware("auth");
    Route::post('store','AttendanceGroupController@store')->name('attendancegroup.store')->middleware("auth");
    Route::get('edit/{attendancegroup}','AttendanceGroupController@edit')->name('attendancegroup.edit')->middleware("auth");
    Route::post('update/{attendancegroup}','AttendanceGroupController@update')->name('attendancegroup.update')->middleware("auth");
    Route::post('delete/{attendancegroup}','AttendanceGroupController@destroy')->name('attendancegroup.destroy')->middleware("auth");
    Route::get('show/{attendancegroup}','AttendanceGroupController@show')->name('attendancegroup.show')->middleware("auth");

});


Route::prefix('schools')->group(function () {

    Route::get('','SchoolController@index')->name('school.index')->middleware("auth");
    Route::get('create','SchoolController@create')->name('school.create')->middleware("auth");
    Route::post('store','SchoolController@store')->name('school.store')->middleware("auth");
    Route::get('edit/{school}','SchoolController@edit')->name('school.edit')->middleware("auth");
    Route::post('update/{school}','SchoolController@update')->name('school.update')->middleware("auth");
    Route::post('delete/{school}','SchoolController@destroy')->name('school.destroy')->middleware("auth");
    Route::get('show/{school}','SchoolController@show')->name('school.show')->middleware("auth");

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
