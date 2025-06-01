<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\TahunController;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;





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
// login
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



// Route::get('/inputrolepermission', function () {
//     $role = Role::findorfail(3);
//     $permission = Permission::findorfail(3);
//     $role->givePermissionTo($permission);
// });



// Route::get('/inputmodelhasrole', function () {
//     $user = User::findorfail(3);
//     $role = Role::findorfail(3);
//     $user->assignRole($role);
// });




$user = User::findorfail(1);
Auth::login($user);
// Auth::logout();
// @dd($user);


Route::get('/create-paket', function () {
    @dd('ini halaman create paket donk');
})->middleware('can:create paket');

Route::get('/edit-paket', function () {
    dd('ini halaman Edit paket');
})->middleware('can:edit paket');

Route::get('/delete-paket', function () {
    dd('ini halaman Delete paket');
})->middleware('can:delete paket');


Route::middleware(['auth'])->group(function () {
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', function () {
            return view('layouts.main');
        });
        Route::get('/paket', [PaketController::class, 'index'])->name('paket.index');
        Route::get('/paket/create', [PaketController::class, 'create'])->name('paket.create');
        Route::post('/paket/store', [PaketController::class, 'store'])->name('paket.store');
        Route::get('/paket/edit/{id}', [PaketController::class, 'edit'])->name('paket.edit');
        Route::put('/paket/update/{id}', [PaketController::class, 'update'])->name('paket.update');
        Route::delete('/paket/delete{id}', [paketController::class, 'destroy'])->name('paket.destroy');

        Route::get('/perusahaan', [PerusahaanController::class, 'index'])->name('perusahaan.index');
        Route::get('/perusahaan/create', [PerusahaanController::class, 'create'])->name('perusahaan.create');
        Route::post('/perusahaan/store', [PerusahaanController::class, 'store'])->name('perusahaan.store');
        Route::get('/perusahaan/edit/{id}', [PerusahaanController::class, 'edit'])->name('perusahaan.edit');
        Route::put('/perusahaan/update{id}', [PerusahaanController::class, 'update'])->name('perusahaan.update');
        Route::delete('/perusahaan/delete{id}', [PerusahaanController::class, 'destroy'])->name('perusahaan.destroy');

        Route::get('/tahun', [TahunController::class, 'index'])->name('tahun.list');
        Route::get('/tahun/create', [TahunController::class, 'create']);
        Route::post('/tahun/store', [TahunController::class, 'store'])->name('tahun.store');
        Route::get('/tahun/edit/{id?}', [TahunController::class, 'edit'])->name('tahun.edit');
        Route::put('/tahun/update/{id}', [TahunController::class, 'update'])->name('tahun.update');
        Route::delete('/tahun/delete/{id}', [TahunController::class, 'destroy']);

        Route::get('/barang', [BarangController::class, 'index']);;
        Route::get('/barang/create', [BarangController::class, 'create']);
        Route::post('/barang/store', [BarangController::class, 'store']);

        Route::get('/kategori', [KategoriController::class, 'index']);
        Route::get('/kategori/create', [KategoriController::class, 'create']);
        Route::post('/kategori/store', [KategoriController::class, 'store']);
    });

    Route::middleware(['opeartor'])->group(function () {
        Route::get('/dashboard', function () {
            return view('layouts.main');
        });
        Route::get('/paket', [PaketController::class, 'index'])->name('paket.index');
        Route::get('/paket/create', [PaketController::class, 'create'])->name('paket.create');
        Route::post('/paket/store', [PaketController::class, 'store'])->name('paket.store');
        Route::get('/paket/edit/{id}', [PaketController::class, 'edit'])->name('paket.edit');
        Route::put('/paket/update/{id}', [PaketController::class, 'update'])->name('paket.update');
        Route::delete('/paket/delete{id}', [paketController::class, 'destroy'])->name('paket.destroy');

        Route::get('/barang', [BarangController::class, 'index']);;
        Route::get('/barang/create', [BarangController::class, 'create']);
        Route::post('/barang/store', [BarangController::class, 'store']);

        Route::get('/kategori', [KategoriController::class, 'index']);
        Route::get('/kategori/create', [KategoriController::class, 'create']);
        Route::post('/kategori/store', [KategoriController::class, 'store']);
    });


    Route::middleware(['mitra'])->group(function () {
        Route::get('/dashboard', function () {
            return view('layouts.main');
        });
        Route::get('/paket', [PaketController::class, 'index'])->name('paket.index');
        Route::get('/paket/create', [PaketController::class, 'create'])->name('paket.create');
        Route::post('/paket/store', [PaketController::class, 'store'])->name('paket.store');
        Route::get('/paket/edit/{id}', [PaketController::class, 'edit'])->name('paket.edit');
        Route::put('/paket/update/{id}', [PaketController::class, 'update'])->name('paket.update');
        Route::delete('/paket/delete{id}', [paketController::class, 'destroy'])->name('paket.destroy');
    });
});
