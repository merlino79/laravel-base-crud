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
//pagine statiche
route::get('/', 'PageController@index')->name('home');

Route::get('/contact', 'PageController@contact')->name('contact');

//pagine dinamiche
Route::resource('comics', 'ComicController');

