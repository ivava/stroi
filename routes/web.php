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



Route::get('/regions', 'RegionsController@index');

Route::get('/regions/create', 'RegionsController@create');


Route::get('/allcreate', function () {
    return view('allcreate');
});


Route::post('/regions', 'RegionsController@store');

Route::get('/cities', 'CitiesController@index');



Route::get('/cities/create', 'CitiesController@create');

Route::post('/cities', 'CitiesController@store');

Route::get('/users/{id}', 'UserController@show');

Route::get('/cities/{id}', 'CitiesController@show');

Route::get('/regions/{id}', 'RegionsController@show');




