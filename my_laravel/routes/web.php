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

Route::get('/index','UserController@index');
Route::get('/add','UserController@add');
Route::post('/addSave','UserController@addSave');
Route::get('/edit/{id}','UserController@edit');
Route::post('/editSave','UserController@editSave');
Route::get('/delete/{id}','UserController@delete');

Route::match(['get','post'],'/login','Login\LoginController@login');

