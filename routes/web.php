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

Route::get('/', 'Auth\LoginController@showLoginForm');


Auth::routes();

Route::get('/home', 'UserController@profile');

Route::get('/profile', 'UserController@profile');

Route::get('/page', 'pageController@index');




Route::get('/regions/create', 'PagesController@createLocalObject');






Route::post('/regions', 'PagesController@localObjectStore');

Route::get('/regions', 'PagesController@showAllLocale');

Route::get('/regions/delete/{id}', 'PagesController@deleteLocale');


Route::get('/users/{id}', 'UserController@show');


Route::get('/regions/{id}', 'PagesController@showLocale');




