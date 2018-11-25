<?php

// FILES
Route::get('get-image/{path}', 'FileController@getImage');

// AUTH
Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');

Route::middleware('jwt.auth')->group(function() {
    // DASHBOARD
    Route::get('dashboard', 'DashboardController@index');

    // PRODUCTS
    Route::resource('products', 'ProductController');
    Route::resource('product/categories', 'CategoryProductController');

    // POST
    Route::resource('posts', 'PostController');
    Route::resource('post/categories', 'CategoryPostController');
});