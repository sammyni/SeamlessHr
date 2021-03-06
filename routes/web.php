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



Auth::routes(['register' => false]);

Route::get('/', 'PublicController@index')->name('welcome');
Route::get('/app', 'AppController@index')->name('dashboard')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/user', 'AppController@user')->name('user');
});
