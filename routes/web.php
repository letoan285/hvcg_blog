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

Route::get('/', function () {
	$n = "Ms Hue";
    return view('welcome', compact('n'));
});

// Route::get('/demo/{thu}', function(){
// 	$thu
// 	return view('demo');
// });
Route::view('/welcome', 'welcome');