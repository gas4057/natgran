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


//question page
Route::get('/contact','Home\ContactController@index')->name('contact_page');
Route::post('/send.question','Home\ContactController@sendQuestion')->name('question');
Route::get('/products');
Route::get('decor');
Route::get('news');
