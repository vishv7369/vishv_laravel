<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin_controller;
use App\Http\Controllers\contact_controller;
use App\Http\Controllers\category_controller;
use App\Http\Controllers\customer_controller;
use App\Http\Controllers\gallery_controller;
use App\Http\Controllers\productadv_controller;
use App\Http\Controllers\index_controller;
use App\Http\Controllers\dashboard_controller;
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

//Frontend

Route::view('/index','Frontend.index-2');
Route::view('/reviews','Frontend.testimonial');
Route::view('/shop','Frontend.shop-2');
Route::view('/shop-single','Frontend.shop-single');
Route::view('/team','Frontend.team-2');
Route::view('/service','Frontend.service-3');
Route::view('/service-single','Frontend.service-single');
Route::view('/error','Frontend.error');
Route::view('/gallery_site','Frontend.gallery');

Route::get('/contact',[contact_controller::class,'create']); //view
Route::post('/contact',[contact_controller::class,'store']); //insert
Route::get('/contact/{id}',[contact_controller::class,'destroy']); //delete

Route::view('/case','Frontend.case-4');
Route::view('/case-single','Frontend.case-single');
Route::view('/about','Frontend.about');


//Backend

Route::get('/admin', function () {
    return view('Backend.Admin.index');
});

Route::get('/admin-dashboard', function () {
    return view('Backend.Admin.dashboard');
});

Route::get('/admin-profile', function () {
    return view('Backend.Admin.profile');
});

Route::get('/admin-forgetpass', function () {
    return view('Backend.Admin.forgot-password');
});


Route::get('/admin-changepass', function () {
    return view('Backend.Admin.change-password');
});

Route::get('/admin-changepass2', function () {
    return view('Backend.Admin.change-password2');
});

Route::get('/admin-calendar', function () {
    return view('Backend.Admin.calendar');
});

Route::get('/admin-editprofile', function () {
    return view('Backend.Admin.edit-profile');
});

Route::get('/admin-404', function () {
    return view('Backend.Admin.error-404');
});


Route::get('/admin-setting', function () {
    return view('Backend.Admin.settings');
});


Route::get('/admin-gallery', function () {
    return view('Backend.Admin.gallery');
});


Route::get('/admin-login', function () {
    return view('Backend.Admin.login');
});

Route::get('/admin-register', function () {
    return view('Backend.Admin.register');
});

Route::get('/admin-local', function () {
    return view('Backend.Admin.localization');
});

Route::get('/admin-lock', function () {
    return view('Backend.Admin.lock-screen');
});

Route::get('/admin-notification', function () {
    return view('Backend.Admin.notifications-settings');
});

Route::get('/admin-theme', function () {
    return view('Backend.Admin.theme-settings');
});

Route::get('/admin-addcategory', function () {
    return view('Backend.Admin.addcategory');
});

Route::get('/admin-managecategory', function () {
    return view('Backend.Admin.managecategory');
});

Route::get('/admin-addproduct', function () {
    return view('Backend.Admin.addproduct');
});

Route::get('/admin-manageproduct', function () {
    return view('Backend.Admin.manageproduct');
});

Route::get('/admin-managecontact', function () {
    return view('Backend.Admin.managecontact');
});
