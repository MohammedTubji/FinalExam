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

Route::get('/','ProductController@index');

Route::get('/product','ProductController@index');

Route::get('/create','ProductController@create');

Route::post('/store','ProductController@store');

Route::get('/{product}/edit','ProductController@edit');

Route::post('/update/{product}','ProductController@update');

Route::delete('delete/{product}','ProductController@destroy') ;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
