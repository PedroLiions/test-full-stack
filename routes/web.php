<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'ProductController');
Route::resource('product/categories', 'CategoryProductController');
