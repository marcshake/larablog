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

Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('blog/{title?}/{id?}', 'BlogController@index');
Route::get('tag/{name?}', 'BlogController@tag');
Route::get('category/{name?}', 'BlogController@category');
Route::get('logout', 'Auth\LoginController@logout');
Route::get('sitemap.xml', 'SitemapController@index');
Route::get('music', 'MusicController@index');
Route::get('music/download/{song_id}', 'MusicController@download');
Route::get('rss', 'RssController@index');
Route::get('preview/{title}/{id}', 'PreviewController@index');
Route::get('search', 'BlogController@searchForm');
Route::get('admin', 'AdminController@index');

//Admin-Routes
Route::prefix('admin')->group(function () {
    Route::get('blogs', 'AdminController@list');
    Route::get('edit/{id}', 'AdminController@edit');
    Route::get('new', 'AdminController@create');
    Route::get('delete/{id}', 'AdminController@destroy');
    Route::get('status/{id}', 'AdminController@status');
    Route::get('filer', 'ImageController@index');
    Route::get('cms', 'AdminCMSController@index');
    Route::get('cms/new', 'AdminCMSController@create');
    Route::get('cms/edit/{id}', 'AdminCMSController@edit');
    Route::get('cms/status/{id}', 'AdminCMSController@status');
    Route::get('cms/delete/{id}', 'AdminCMSController@destroy');
    Route::get('user/', 'UserManagerController@index');
    Route::get('user/edit/{id}', 'UserManagerController@edit');
    Route::post('update/{id}', 'AdminController@update');
    Route::post('save', 'AdminController@store');
    Route::post('filer', 'ImageController@store');
    Route::post('cms/edit/{id}', 'AdminCMSController@update');
    Route::post('cms/new', 'AdminCMSController@store');
    Route::post('user/edit/{id}', 'UserManagerController@update');
});
// All other Routes
Route::get('/{slug?}', 'CMSController@index');

Route::post('ajax/image/', 'ImageController@gallery');
Route::post('ajax/loadImage/{id}', 'ImageController@ajaxImage');
Route::post('ajax/deleteImage/{id}', 'ImageController@deleteImage');
#Route::post('comment/save', 'CommentController@save')->name('saveComment');
Route::post('search/', 'BlogController@Search');
