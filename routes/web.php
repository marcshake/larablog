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
Route::get('blog/{title?}/{id?}', 'BlogController@index');
Route::get('tag/{name?}', 'BlogController@tag');
Route::get('category/{name?}', 'BlogController@category');
Route::get('logout', 'Auth\LoginController@logout');
Route::get('admin', 'AdminController@index');
Route::get('admin/blogs', 'AdminController@list');
Route::get('admin/edit/{id}', 'AdminController@edit');
Route::get('admin/new', 'AdminController@create');
Route::get('admin/delete/{id}', 'AdminController@destroy');
Route::get('admin/status/{id}', 'AdminController@status');

Route::get('admin/filer', 'ImageController@index');
Route::get('admin/cms', 'AdminCMSController@index');
Route::get('admin/cms/edit/{id}', 'AdminCMSController@edit');


Route::post('admin/update/{id}', 'AdminController@update');
Route::post('admin/save', 'AdminController@store');
Route::post('admin/filer', 'ImageController@store');
Route::post('ajax/image/', 'ImageController@gallery');
Route::post('ajax/loadImage/{id}', 'ImageController@ajaxImage');
Route::post('admin/cms/edit/{id}', 'AdminCMSController@update');
