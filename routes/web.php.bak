<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SupplierController;

Route::get('/', function () {
    return view('welcome');
});

// Barang routes
Route::resource('/barang', BarangController::class);

// Customers routes
Route::resource('/customers', CustomersController::class);

// Keluhan routes
Route::resource('/keluhan', KeluhanController::class);

// Pegawai routes
Route::resource('/pegawai', PegawaiController::class);

// Supplier routes
Route::resource('/supplier', SupplierController::class);
