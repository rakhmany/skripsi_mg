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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('login');
});

Route::get('/c_daftar', function () {
    return view('customer/c_daftar');
});

Route::get('/c_profile', function () {
    return view('customer/c_profile');
});

Route::get('/c_order', function () {
    return view('customer/c_order');
});

Route::get('/c_order_v', function () {
    return view('customer/c_order_v');
});

Route::get('/tes-nav', function () {
    return view('tes-nav');
});

