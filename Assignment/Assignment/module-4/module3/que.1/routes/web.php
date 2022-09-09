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









Route::get('/homepage', function () {
    return view('web.homepage');
});
Route::get('/about us', function () {
    return view('web.aboutus');
});
Route::get('/contact us', function () {
    return view('web.contactus');
});
Route::get('/gallery', function () {
    return view('web.gallery1');
});
Route::get('/registration', function () {
    return view('web.registration');
});
Route::get('/login', function () {
    return view('web.login');
});















