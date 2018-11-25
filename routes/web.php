<?php

//Route::options('{any?}', ['middleware' => 'cors', function (){
//    return response('',200);
//}])->where('any', '.*');

Route::get('/', function() {
    View::addExtension('html', 'php');
    return View::make('index');
});

// FILES
Route::get('get-image/{path}', 'FileController@getImage');

// AUTH
Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');

Route::middleware(['cors', 'jwt.auth'])->group(function() {
    // DASHBOARD
    Route::get('dashboard', 'DashboardController@index');

    // PRODUCTS
    Route::resource('products', 'ProductController');
    Route::resource('product/categories', 'CategoryProductController');

    // POST
    Route::resource('posts', 'PostController');
    Route::resource('post/categories', 'CategoryPostController');
});