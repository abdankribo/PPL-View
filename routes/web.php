<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/promosi', function () {
    return view('promosi');
});
Route::get('/staff-manajemen', function () {
    return view('staff_manajemen');
});
Route::get('/klaim-manajemen', function () {
    return view('klaim_manajemen');
});
Route::get('/persetujuan', function () {
    return view('persetujuan');
});
Route::get('/keuangan', function () {
    return view('keuangan');
});
Route::get('/BPP', function () {
    return view('BPP');
});
Route::get('/SummaryBPP', function () {
    return view('SummaryBPP');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/laporan', function () {
    return view('laporan');
});
Route::get('/tunggal', function () {
    return view('tunggal');
});
Route::get('/edit/staff-manajemen', function () {
    return view('edit_staff_manajemen');
});
Route::get('/tambah/staff-manajemen', function () {
    return view('tambah_staff_manajemen');
});
Route::get('/vendor-manajemen', function () {
    return view('vendor_manajemen');
});
Route::get('/edit/vendor-manajemen', function () {
    return view('edit_vendor_manajemen');
});
Route::get('/tambah/vendor-manajemen', function () {
    return view('tambah_vendor_manajemen');
});
Route::get('/gudang-manajemen', function () {
    return view('gudang_manajemen');
});
Route::get('/edit/gudang-manajemen', function () {
    return view('edit_gudang_manajemen');
});
Route::get('/tambah/gudang-manajemen', function () {
    return view('tambah_gudang_manajemen');
});
Route::get('/edit/virtual-gudang-manajemen', function () {
    return view('edit_virtual_gudang_manajemen');
});
Route::get('/tambah/virtual-gudang-manajemen', function () {
    return view('tambah_virtual_gudang_manajemen');
});
Route::get('/edit/item-transfer-manajemen', function () {
    return view('edit_item_transfer_manajemen');
});
Route::get('/tambah/item-transfer-manajemen', function () {
    return view('tambah_item_transfer_manajemen');
});
Route::get('/outlet-manajemen', function () {
    return view('outlet_manajemen');
});
Route::get('/edit/outlet-manajemen', function () {
    return view('edit_outlet_manajemen');
});
Route::get('/tambah/outlet-manajemen', function () {
    return view('tambah_outlet_manajemen');
});
