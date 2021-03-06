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

Auth::routes();

Route::get('/tasks', 'TaskController@index')->name('home');
Route::post('/task/add', 'TaskController@create');
Route::get('/task/edit/{id}', 'TaskController@edit');
Route::post('task/edit/{id}', 'TaskController@update');
Route::get('/task/delete/{id}', 'TaskController@delete');
Route::get('/task/complete/{id}', 'TaskController@completed');
