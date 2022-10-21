<?php
use App\Http\Controllers\GroupController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\FileController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
//Route::get('groups', [GroupController::class, 'index'])->name('groups.index');
//Route::middleware(['auth'])->group(function (){
//    Route::resource('groups',GroupController::class);
//
//});

Route::middleware('auth')->group(function () {
    Route::resource('groups', GroupController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('students', StudentController::class);
    Route::resource('lectures', LectureController::class);
    Route::resource('files', FileController::class);
});

Route::get('/groups/students/{group_id}',[GroupController::class, 'groupStudents'])
    ->name('students.groups');

Route::get('/groups/lectures/{group_id}',[GroupController::class, 'groupLectures'])
    ->name('lectures.groups');

Route::get('/create',[GroupController::class, 'groupCreate'])
    ->name('create.groups');

//Route::get('/update/{course_id}',[GroupController::class, 'groupUpdate'])
//    ->name('update.groups');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
