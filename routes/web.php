<?php

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


Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middlweare' => 'auth'], function () {
    Route::get('/', 'DashboardController@index')->name("admin.index");
    //
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
