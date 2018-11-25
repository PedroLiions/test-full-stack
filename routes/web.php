<?php
Route::any('{all}', function() {
    View::addExtension('html', 'php');
    return View::make('index');
});