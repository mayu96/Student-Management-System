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

Route::get('/', 'StudentController@index');
Route::get('/create', 'StudentController@create');
Route::get('/edit/{id}', 'StudentController@edit');
Route::get('/delete/{id}', 'StudentController@delete');
Route::get('/contact', 'StudentController@contact');
Route::post('/store', 'StudentController@store');
Route::post('/save', 'StudentController@save');
Route::post('/update/{id}', 'StudentController@update');

