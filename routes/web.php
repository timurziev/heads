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

    Route::get('schedule', function () {
        return view('schedule');
    });
    Route::post('schedule/time', 'ScheduleController@makeSchedule')->name('schedule');

    Route::get('cities', 'CityController@index');
    Route::get('cities/create', 'CityController@create')->name('cities.create');
    Route::post('cities/store', 'CityController@store')->name('cities.store');
    Route::delete('cities/delete/{id}', 'CityController@destroy')->name('cities.delete');
});

Auth::routes();
