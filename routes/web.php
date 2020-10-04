<?php

use App\Http\Controllers\AuthController;
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
//Route Login - LogOut
Route::get('login', function(){
    return view('login');
});

Route::post('login', 'App\Http\Controllers\AuthController@login')->name('login');

Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

//Route with Model User && Message
Route::resource('users','App\Http\Controllers\UserController')->middleware('auth');

Route::resource('messages','App\Http\Controllers\MessageController')->middleware('auth');

Route::get('messages/to/{username}','App\Http\Controllers\MessageController@send')->name('message')->middleware('auth');

//Route with Assignment
Route::get('assignments', 'App\Http\Controllers\AssignmentController@index')->name('assignment')->middleware('auth');

Route::post('assignments', 'App\Http\Controllers\AssignmentController@upload')->name('postAssignment')->middleware('auth');

Route::get('/download/assignment/{file}', 'App\Http\Controllers\AssignmentController@download')->name('downloadAssignment')->middleware('auth');

Route::get('assignments/{foldername}', function($foldername){ return view('assignments.solution', ['foldername'=>$foldername]); })->name('solution')->middleware('auth');

Route::post('assignments/{folder}', 'App\Http\Controllers\AssignmentController@postSolution')->name('postSolution')->middleware('auth');

Route::get('assignments/submission/{foldername}', 'App\Http\Controllers\AssignmentController@showSubmit')->name('submission')->middleware('auth');

Route::get('/download/{folder}/solution/{file}', 'App\Http\Controllers\AssignmentController@clone')->name('downloadSolution')->middleware('auth');

//Route with Challenge
Route::get('challenges', 'App\Http\Controllers\ChallengeController@index')->name('challenge')->middleware('auth');

Route::post('challenges', 'App\Http\Controllers\ChallengeController@upload')->name('postChallenge')->middleware('auth');

Route::get('challenges/{folder}', 'App\Http\Controllers\ChallengeController@show')->name('solveInterface')->middleware('auth');

Route::post('challenges/solution/{folder}', 'App\Http\Controllers\ChallengeController@solution')->name('solveChallenge')->middleware('auth');

