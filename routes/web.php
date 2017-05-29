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


Route::get('/','PostController@index')->name('index');
Route::get('/index','PostController@index')->name('index');
Route::get('/list','PostController@list')->name('list');
Route::get('/upload','PostController@create')->name('create');
Route::post('/upload','PostController@upload');
Route::get('/edit/{id}','PostController@edit')->name('edit');
Route::post('/edit/{id}','PostController@update');
Route::get('/delete/{id}','PostController@destroy')->name('destroy');
