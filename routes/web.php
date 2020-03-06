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

Route::get('/', function () { return view('home');});
Route::get('/about', function () { return view('about');});
Route::get('/category', function () { return view('children-category');});
Route::get('/registration', function () { return view('Registration-form');});
Route::get('/sponsor', function () { return view('sponsors-form');});
Route::get('/contact', function () { return view('contact');});
Route::get('/login', function () { return view('dashboardpages.login');});
Route::get('/dash-home','MessageController@displayDashboard');
Route::post('/save-messages','MessageController@createMessages');
Route::get('/unread-messages','MessageController@displayUnreadMessages')->name('Unread Messages');
Route::get('/mark-as-read','MessageController@markMessages');
Route::get('/update-stutus-delete','MessageController@deleteMessages');
Route::get('/read-messages','MessageController@displayReadMessages')->name('Read Messages');;
Route::get('/all-messages','MessageController@displayAllMessages')->name('All Messages');;
Route::get('/change-passwords',"MessageController@displayChangePasswordForm")->name('Change Password');
Route::get('/save-change-password','MessageController@store_users_password');
