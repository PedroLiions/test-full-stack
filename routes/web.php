<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// FILES
Route::get('get-image/{path}', 'FileController@getImage');

// PRODUCTS
Route::resource('products', 'ProductController');
Route::resource('product/categories', 'CategoryProductController');

// POST
Route::resource('posts', 'PostController');
Route::resource('post/categories', 'CategoryPostController');


