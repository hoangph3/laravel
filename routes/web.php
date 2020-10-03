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

Route::get('login', function(){
    return view('login');
});

Route::post('login', 'App\Http\Controllers\AuthController@login')->name('login');

Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::resource('users','App\Http\Controllers\UserController')->middleware('auth');

Route::resource('messages','App\Http\Controllers\MessageController')->middleware('auth');

Route::get('assignments', 'App\Http\Controllers\AssignmentController@index')->name('assignment')->middleware('auth');

Route::post('assignments', 'App\Http\Controllers\AssignmentController@upload')->name('postAssignment')->middleware('auth');

Route::get('/download/{file}', 'App\Http\Controllers\AssignmentController@download')->name('downloadAssignment')->middleware('auth');
