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

// Authentication Routes...
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/clients', 'ClientController'); //->only(['show', 'update']);
//Route::resource('/create-user', 'UserController')->only(['create', 'store']);
Route::get('/create-user', 'UserController@create');
Route::post('/create-user', 'UserController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
