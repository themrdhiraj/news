<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'UserViewController@index');
Route::get('/category', 'UserViewController@category');
Route::get('/category/{id}', 'UserViewController@categoryById');
Route::get('/category/{id}/sub', 'UserViewController@subCategory');
Route::get('/news/{id}', 'UserViewController@news');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('types', 'NewsTypesController')->except('edit');
Route::resource('posts', 'NewsPostController');
