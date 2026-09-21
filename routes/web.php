<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return 'This is a get route.';
});

Route::post('/login', function () {
    return 'This is a post route.';
});

Route::put('/user', function () {
    return 'This is a put route.';
});

Route::patch('/user', function () {
    return 'This is a patch route.';
});

Route::delete('/user', function () {
    return 'This is a delete route.';
});

