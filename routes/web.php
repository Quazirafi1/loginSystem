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

Route::get('/login', 'SignInController@index');
Route::post('/login/authenticate', 'SignInController@authenticate');
Route::get('/login/success', 'SignInController@success');
Route::get('login/logout', 'SignInController@logout');
