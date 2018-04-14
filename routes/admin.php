<?php 

Route::get('/', 'HomeController@index')->name('dashboard');
// Route::get('/', 'HomeController@index')->name('home.index');
Route::get('categories', 'CategoryController@index')->name('categories.index');

Route::get('categories/create', 'CategoryController@create')->name('categories.create');

Route::post('categories', 'CategoryController@store')->name('categories.store');

Route::get('posts', 'PostsController@index')->name('posts.index');

Route::get('posts/create', 'PostsController@create')->name('posts.create')->middleware('isAdmin');

Route::post('posts', 'PostsController@store')->name('posts.store');

Route::get('posts/{id}/edit', 'PostsController@edit')->name('posts.edit');

Route::post('posts/{id}', 'PostsController@update')->name('posts.update');

Route::get('posts/{id}/delete', 'PostsController@destroy')->name('posts.destroy');

Route::get('posts/{id}/show', 'PostsController@show')->name('posts.show');

