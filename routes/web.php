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

Route::group(['middleware' => 'auth'], function () {
    Route::get('users', 'UserController@index')->name('users');
    Route::get('users/create', 'UserController@create')->name('users.create');
    Route::post('users/store', 'UserController@store')->name('users.store');
    Route::get('users/edit/{id}', 'UserController@edit')->name('users.edit');
    Route::post('users/update/{id}', 'UserController@update')->name('users.update');
    Route::delete('users/delete/{id}', 'UserController@destroy')->name('users.delete');

    Route::get('schedule', 'ApiController@index');
    Route::post('schedule/time', 'ApiController@makeSchedule')->name('schedule');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

