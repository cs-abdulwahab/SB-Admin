<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view("pages.login");
});

Route::get('/grid', function () {
    return view("pages.grid");
});

Route::get('/blank', function () {
    return view("pages.blank");
});

Route::get('/index', function () {
    return view("pages.index");
});

Route::get('/flot', function () {
    return view("pages.flot");
});

Route::get('/form', function () {
    return view("pages.forms");
});