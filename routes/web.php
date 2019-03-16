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




Route::resource('kategori','KategoriController')->except(['destroy']);

Route::get('query', 'KategoriController@search');

Route::get('/hapus/destroy/{id}', 'KategoriController@destroy');
Route::post('/inputdata/store','KategoriController@store');
Route::get('/editdata/edit/{id}','KategoriController@edit');
Route::post('/datakategori/update','KategoriController@update');