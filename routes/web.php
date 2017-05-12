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
// home page route
Route::get('/', 'PagesController@index');

//Test route
Route::get('test','TestController@index');

// Auth route
Auth::routes();

