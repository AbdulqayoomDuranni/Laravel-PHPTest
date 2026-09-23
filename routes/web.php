<?php

use Illuminate\Support\Facades\Route;



Route::patch('/user', function () {
    return 'This is a patch route.';
});

Route::delete('/user', function () {
    return 'This is a delete route.';
});


Route::get('/auth/login', function () {
    return view('auth.login');
});
