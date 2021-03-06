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

Route::get('/', 'PageController@index')->name('/');
Route::get('services', 'PageController@services')->name('services');
Route::get('about_us', 'PageController@aboutUs')->name('about_us');
Route::get('contact', 'PageController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
