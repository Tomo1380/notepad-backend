<?php

use Illuminate\Support\Facades\Route;

Route::get('/web', function () {
    return view('welcome');
});
