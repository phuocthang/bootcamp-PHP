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
Route::get('/index','blog\BlogController@trangchu')->name('index');
Route::get('/{id}/deteil','blog\BlogController@chitiet')->name('chitiet');
Route::group(['prefix' => 'pageblog'], function () {
    Route::get('/','blog\BlogController@index')->name('blog.admin');
    Route::get('/create','blog\BlogController@create')->name('blog.create');
    Route::post('/create','blog\BlogController@store')->name('blog.store');
    Route::get('/{id}/edit','blog\BlogController@edit')->name('blog.edit');
    Route::post('/{id}/edit','blog\BlogController@update')->name('blog.update');
    Route::get('/{id}/destroy','blog\BlogController@destroy')->name('blog.destroy');
  });