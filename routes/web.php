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


Route::get('/', 'ProductController@getIndex');
Route::get('/show/{id}', 'ProductController@getShow');
Route::post('/show/add/{id}', 'ProductController@getAdd');
Route::post('/show/down/{id}', 'ProductController@getDown');
Route::get('/addfruit', 'ProductController@getAddFruit');
Route::post('/addfruit/new', 'ProductController@postAddFruit');
Route::post('/show/delete/{id}', 'ProductController@postDelete');
Route::get('/show/editFruit/{id}', 'ProductController@getEdit');
Route::post('/show/editFruit/{id}', 'ProductController@postEditFruit');
Route::post('/{id}','ProductController@postDelete');