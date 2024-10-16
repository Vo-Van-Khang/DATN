<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('clients.detail');
});
Route::get('/admin/user/list', function () {
    return view('admins.user.list');
});
Route::get('/admin/user/add', function () {
    return view('admins.user.update');
});
Route::get('/admin/category/list', function () {
    return view('admins.category.list');
});
Route::get('/admin/category/add', function () {
    return view('admins.category.add');
});
Route::get('/admin/slides/list', function () {
    return view('admins.slides.list');
});
Route::get('/admin/slides/add', function () {
    return view('admins.slides.add');
});
