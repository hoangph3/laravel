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

Route::get('/', function(){
    return view('login');
});

Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::post('login', 'App\Http\Controllers\AuthController@login')->name('login');

Route::resource('users','App\Http\Controllers\UserController');


