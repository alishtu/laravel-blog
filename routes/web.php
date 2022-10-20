<?php

use App\Http\Controllers\BlogController;
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

Route::get('/', [BlogConroller::class, 'index']);
Route::get('/', 'App\Http\Controllers\BlogController@index');
Route::get('{blog}/edit', 'App\Http\Controllers\BlogController@edit')->name('edit');
Route::post('{blog}/edit/save', 'App\Http\Controllers\BlogController@editSave')->name('edit.save');
Route::get('/delete', 'App\Http\Controllers\BlogController@delete')->name('delete');

Route::get('/create', 'App\Http\Controllers\BlogController@create')->name('create');
Route::post('/store', 'App\Http\Controllers\BlogController@store')->name('store');
Route::get('{blog}', 'App\Http\Controllers\BlogController@blog')->name('blog');
