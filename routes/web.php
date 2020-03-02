<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/users', 'UsersController');
Route::resource('/roles', 'RolesController');
Route::resource('/permissions', 'PermissionsController');
