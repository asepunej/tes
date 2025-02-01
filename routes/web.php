<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\TahunController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [AuthController::class, 'login'])->name('login');


// login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('layouts.main');
});

// login.perusahaan
Route::get('/perusahaan', [PerusahaanController::class, 'index'])->middleware('auth');
Route::get('/perusahaan/create', [PerusahaanController::class, 'create'])->middleware('auth');
Route::post('/perusahaan/store', [PerusahaanController::class, 'store'])->middleware('auth');
Route::get('/perusahaan/edit/{id}', [PerusahaanController::class, 'edit'])->middleware('auth');
Route::put('/perusahaan/update{id}', [PerusahaanController::class, 'update'])->middleware('auth');
Route::delete('/perusahaan/delete{id}', [PerusahaanController::class, 'delete'])->middleware('auth');

// login.tahun
Route::get('/tahun', [TahunController::class, 'index'])->name('perusahaan')->middleware('auth');
Route::get('/tahun/create', [TahunController::class, 'create'])->middleware('auth');
Route::post('/tahun/store', [TahunController::class, 'store'])->middleware('auth');
Route::get('/tahun/edit/{id}', [TahunController::class, 'edit'])->middleware('auth');
Route::put('/tahun/update{id}', [TahunController::class, 'update'])->middleware('auth');
Route::delete('/tahun/delete{id}', [TahunController::class, 'delete'])->middleware('auth');


Route::get('/barang', [BarangController::class, 'index'])->middleware('auth');;
Route::get('/barang/create', [BarangController::class, 'create'])->middleware('auth');
Route::post('/barang/store', [BarangController::class, 'store'])->middleware('auth');

Route::get('/kategori', [KategoriController::class, 'index'])->middleware('auth');
Route::get('/kategori/create', [KategoriController::class, 'create'])->middleware('auth');
Route::post('/kategori/store', [KategoriController::class, 'store'])->middleware('auth');

Route::get('/mitra', [MitraController::class, 'index'])->name('perusahaan')->middleware('auth');
Route::get('/mitra/create', [MitraController::class, 'create'])->middleware('auth');
Route::post('/mitra/store', [MitraController::class, 'store'])->middleware('auth');
