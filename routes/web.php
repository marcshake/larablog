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


Auth::routes(['register'=>false]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('blog', 'BlogController@index');
Route::get('logout', 'Auth\LoginController@logout');
Route::get('admin', 'AdminController@index');
Route::get('admin/blogs', 'AdminController@list');
Route::get('admin/edit/{id}', 'AdminController@edit');
Route::get('admin/new', 'AdminController@create');
Route::get('admin/delete/{id}', 'AdminController@destroy');

Route::post('admin/update/{id}', 'AdminController@update');
Route::post('admin/save', 'AdminController@store');
