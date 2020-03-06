<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/category', function () {
    return view('children-category');
});
Route::get('/registration', function () {
    return view('Registration-form');
});
Route::get('/sponsor', function () {
    return view('sponsors-form');
});
Route::get('/contact', function () {
    return view('contact');
});
