<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;

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

Route::get('/', [BarangController::class, 'allBarang'])->name('homepage')->middleware('auth');

Route::get('add/barang', [BarangController::class, 'addBarang'])->name('addBarang')->middleware('is_admin');
Route::POST('/store/barang', [BarangController::class, 'storeBarang'])->name('storeBarang')->middleware('is_admin');
Route::get('/barang/{id}', [BarangController::class, 'barang'])->name('barangDetail')->middleware('is_admin');
Route::get('/edit/barang/{id}', [BarangController::class, 'editBarang'])->name('editBarang')->middleware('is_admin');
Route::patch('/update/barang/{id}', [BarangController::class, 'updateBarang'])->name('updateBarang')->middleware('is_admin');
Route::delete('/delete/barang/{id}', [BarangController::class, 'deleteBarang'])->name('deleteBarang')->middleware('is_admin');

Route::get('/add/kategori', [KategoriController::class, 'create'])->name('createKategori')->middleware('is_admin');
Route::POST('/store/kategori', [KategoriController::class, 'store'])->name('storeKategori')->middleware('is_admin');
Route::get('/show/kategori', [KategoriController::class, 'show'])->name('showKategori')->middleware('is_admin');
Route::get('/kategori/{id}', [KategoriController::class, 'detail'])->name('kategoriDetail')->middleware('is_admin');
Route::get('/edit/kategori/{id}', [KategoriController::class, 'edit'])->name('editKategori')->middleware('is_admin');
Route::patch('/update/kategori/{id}', [KategoriController::class, 'update'])->name('updateKategori')->middleware('is_admin');
Route::delete('/delete/kategori/{id}', [KategoriController::class, 'delete'])->name('deleteKategori')->middleware('is_admin');

Route::get('/register', [AuthController::class, 'registerPage'])->name('registerPage')->middleware('guest');
Route::POST('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::POST('/login', [AuthController::class, 'authenticate'])->name('auth')->middleware('guest');
Route::POST('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/list', [CartController::class, 'cartList'])->name('cartList');
Route::POST('/cart', [CartController::class, 'addCart'])->name('cartStore');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cartUpdate');
Route::post('/remove', [CartController::class, 'removeCart'])->name('cartRemove');
