<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('admins.category');
// });
Route::get('/', function () {
    return view('admins.category.add');
});
