<?php

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



Auth::routes();


Route::get('/', 'App\Http\Controllers\ChatsController@index');
Route::get('/chat', 'App\Http\Controllers\ChatsController@index');
Route::get('/messages', 'App\Http\Controllers\ChatsController@fetchMessages');
Route::post('/messages', 'App\Http\Controllers\ChatsController@sendMessage');
