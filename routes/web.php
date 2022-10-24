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
});

Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index') -> name('dashboard');
});

Route::group(['middleware' => ['auth', 'role:teacher']], function(){
    Route::get('/dashboard/pteacher/create', 'App\Http\Controllers\TeacherProfileController@create') -> name('teacherprofile.create');
});

Route::group(['middleware' => ['auth', 'role:teacher']], function(){
    Route::post('/dashboard/pteacher', 'App\Http\Controllers\TeacherProfileController@store') -> name('teacherprofile.store');
});

Route::group(['middleware' => ['auth', 'role:student']], function(){
    Route::get('/dashboard/pstudent/create', 'App\Http\Controllers\StudentProfileController@create') -> name('studentprofile.create');
});

Route::group(['middleware' => ['auth', 'role:student']], function(){
    Route::post('/dashboard/pstudent', 'App\Http\Controllers\StudentProfileController@store') -> name('studentprofile.store');
});

Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::get('/dashboard/padmin/create', 'App\Http\Controllers\AdminProfileController@create') -> name('adminprofile.create');
});

Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::post('/dashboard/padmin', 'App\Http\Controllers\AdminProfileController@store') -> name('adminprofile.store');
});

Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::get('/dashboard/teacherpersonaldetails', 'App\Http\Controllers\DashboardController@teachers') -> name('dashboard.teacherpersonaldetails');
});

Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::get('/dashboard/teacherworkdetails', 'App\Http\Controllers\DashboardController@teacherswork') -> name('dashboard.teacherworkdetails');
});



Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::get('/dashboard/studentsacademics', 'App\Http\Controllers\DashboardController@students') -> name('dashboard.studentsacademics');
});

Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::get('/dashboard/studentsparent', 'App\Http\Controllers\DashboardController@parent') -> name('dashboard.studentsparent');
});



require __DIR__.'/auth.php';
