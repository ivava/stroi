<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/all', 'UserListController@allUsers');

Route::get('/users/{id}', 'UserController@show');

Route::get('/regions', 'RegionsController@index');

Route::get('/regions/{id}', 'RegionsController@show');

Route::get('/regions/create', 'RegionsController@create');

Route::post('/regions', 'RegionsController@store');




