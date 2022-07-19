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

// Route::get('kouka3','');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('kouka3', 'bookController@index');
Route::post('kouka3/find', 'bookController@find');
Route::get('kouka3/show', 'bookController@show');
Route::get('kouka3/add', 'bookController@add');
Route::post('kouka3/create', 'bookController@create');
Route::get('kouka3/edit', 'bookController@edit');
Route::post('kouka3/update', 'bookController@update');
Route::get('kouka3/del', 'bookController@del');
Route::post('kouka3/remove', 'bookController@remove');