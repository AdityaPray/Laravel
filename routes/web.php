<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');
Route::get('/daftar-produk', function () {
    return Inertia::render('daftar-produk');
});
Route::get('/detail-produk', function () {
    return Inertia::render('detail-produk');
});
Route::get('/keranjang', function () {
    return Inertia::render('keranjang');
});
Route::get('/checkout', function () {
    return Inertia::render('checkout');
});
Route::get('/pembayaran', function () {
    return Inertia::render('pembayaran');
});
Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
