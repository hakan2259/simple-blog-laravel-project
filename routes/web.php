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

Route::get('/', 'Front\HomeController@index')->name('pagehome');
Route::get('/kategori/{slug}','Front\HomeController@category')->name('category');
Route::get('/{category}/{slug}','Front\HomeController@blog')->name('post');
Route::get('/hakkimizda','Front\HomeController@about')->name('about');
Route::get('/iletisim','Front\HomeController@contact')->name('contact');
Route::get('/arsiv','Front\HomeController@archive')->name('archive');
Route::get('/haftanin_karikaturleri','Front\HomeController@carton')->name('cartoon');

Route::post('/iletisim','Front\HomeController@contactpost')->name('contact.post');
