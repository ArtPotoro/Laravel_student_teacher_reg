<?php
use App\Http\Controllers\GroupController;
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
});

Route::get('/groups/students/{group_id}',[GroupController::class, 'groupStudents'])
    ->name('students.groups');

Route::get('/groups/lectures/{group_id}',[GroupController::class, 'groupLectures'])
    ->name('lectures.groups');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
