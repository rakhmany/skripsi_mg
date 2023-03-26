<?php

use App\Http\Controllers\adm_CalonMemberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usr_CustomerProfile_Controller; 
use App\Http\Controllers\usr_CustomerController; 

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
    return view('login');
});

// NEW


Route::controller(usr_CustomerController::class)->group(function () {
    Route::get('customer/profile', 'profile_index');
    Route::get('customer/order', 'order_index');
});

Route::controller(adm_CalonMemberController::class)->group(function () {
    Route::get('admin/cln_member', 'index');
    Route::get('admin/cln_member/view', 'view');
});


// NEW

Route::get('/daftar', function () {
    return view('customer/c_daftar');
});

Route::get('/c_daftar_', function () {
    return view('customer/c_daftar_new');
});
Route::get('c_daftar_n', function () {
    return view('customer/c_daftar_new');
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


// Calon Member
Route::get('/clnmember', function () {
    return view('adm_cs_stock/cln_member');
});
Route::get('/clnmember_v', function () {
    return view('adm_cs_stock/cln_member_detail');
});
// Calon Member

// Manage Product
Route::get('/m_produk', function () {
    return view('adm_cs_stock/m_produk');
});
Route::get('/m_produk_add', function () {
    return view('adm_cs_stock/m_produk_add');
});
Route::get('/m_produk_updt', function () {
    return view('adm_cs_stock/m_produk_updt');
});
// Manage Product

// Stock Product
Route::get('/stk_produk', function () {
    return view('adm_cs_stock/stk_produk');
});
Route::get('/stk_produk_add', function () {
    return view('adm_cs_stock/stk_produk_add');
});
Route::get('/stk_produk_updt', function () {
    return view('adm_cs_stock/stk_produk_updt');
});
// Stock Product

//* ---------- ADMIN REPEAT ORDER ---------- */
// Order Barang
Route::get('/order', function () {
    return view('adm_ro/ord_barang');
});
Route::get('/order_v', function () {
    return view('adm_ro/ord_barang_v');
});
Route::get('/order_updt', function () {
    return view('adm_ro/ord_barang_updt');
});
// Order Barang

// Pengiriman
Route::get('/pengiriman', function () {
    return view('adm_ro/pengiriman');
});
Route::get('/pengiriman_updt', function () {
    return view('adm_ro/pengiriman_updt');
});
Route::get('/pengiriman_v', function () {
    return view('adm_ro/pengiriman_v');
});
// Pengiriman
//* ---------- ADMIN REPEAT ORDER ---------- */

Route::get('/tes-nav', function () {
    return view('tes-nav');
});

// Route::get('/side', function () {
//     return view('sidebar');
// });
