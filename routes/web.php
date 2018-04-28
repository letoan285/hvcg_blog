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

// Route::get('/', function () {
//     return view('welcome');
// 	// return 'hello';
// });

Route::get('/', 'ClientController@index')->name('web.index');
Route::get('/{id}', 'ClientController@show')->name('web.show');

// Route::get('/categories', 'ClientController@getCateList')->name('cate.list');

Route::get('admin-login', 'ClientController@login');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
