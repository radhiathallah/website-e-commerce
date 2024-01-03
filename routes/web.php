<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PromoController;


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
// Home
Route::get('/', [HomeController::class,'index'])->name('home');


// PROMO
Route::get('/promo', [PromoController::class,'index'])->name('promo');
Route::get('/tambah_promo', [PromoController::class,'create'])->name('tambah_promo');
Route::get('/produk_promo/{id}', [PromoController::class,'produk'])->name('produk_promo');
Route::post('/add_promo', [PromoController::class,'store'])->name('add_promo');


Route::get('/coba', function () {
    return view('coba');
});

// Login
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/proses_login', [AuthController::class,'proses_login'])->name('proses.login');

// Daftar
Route::get('/daftar', [AuthController::class,'daftar'])->name('daftar');
Route::post('/proses_daftar', [AuthController::class,'proses_daftar'])->name('proses.daftar');



// Detail Produk
Route::get('/detail/{id}', [ProdukController::class,'detail'])->name('detail');


// Logout
Route::group(['middleware' => 'login'], function () {
Route::get('/logout', [AuthController::class,'logout'])->name('logout');

});
// MIDDLWARE ADMIN (Route Akses Admin)
Route::group(['middleware' => 'admin'], function () {

// Index Admin
Route::get('/admin', [HomeController::class,'admin_index'])->name('admin.index');

// Kategori
Route::get('/kategori', [KategoriController::class,'index'])->name('kategori');
Route::get('/kategori/tambah_kategori', [KategoriController::class,'tambah'])->name('tambah_kategori');
Route::post('/kategori/add_kategori', [KategoriController::class,'add'])->name('add_kategori');
Route::get('/kategori/ubah_kategori/{id}', [KategoriController::class,'ubah'])->name('ubah_kategori');
Route::put('/kategori/edit/{id}', [KategoriController::class,'edit'])->name('edit_kategori');
Route::get('/kategori/hapus/{id}', [KategoriController::class,'destroy'])->name('hapus_kategori');

// Produk
Route::get('/produk', [ProdukController::class,'index'])->name('produk');
Route::get('/produk/tambah_produk', [ProdukController::class,'tambah'])->name('tambah_produk');
Route::post('/produk/add_produk', [ProdukController::class,'add'])->name('add_produk');
Route::get('/produk/ubah_produk/{id}', [ProdukController::class,'ubah'])->name('ubah_produk');
Route::put('/produk/edit/{id}', [ProdukController::class,'edit'])->name('edit_produk');
Route::get('/produk/hapus/{id}', [ProdukController::class,'destroy'])->name('hapus_produk');

// Merek
Route::get('/merek', [MerekController::class,'index'])->name('merek');
Route::get('/merek/tambah_merek', [MerekController::class,'tambah'])->name('tambah_merek');
Route::post('/merek/add_merek', [MerekController::class,'add'])->name('add_merek');
Route::get('/merek/ubah_merek/{id}', [MerekController::class,'ubah'])->name('ubah_merek');
Route::put('/merek/edit/{id}', [MerekController::class,'edit'])->name('edit_merek');
});

Route::group(['middleware' => 'customer'], function () {

// WISHLIST

Route::get('/cart/{id}', [WishlistController::class,'wishlist'])->name('wishlist');
// Check-out
Route::get('/checkout', [CheckoutController::class,'index'])->name('checkout');

// Cart
Route::get('/hapus-cart/{id}', [CheckoutController::class,'hapus_cart'])->name('hapus.cart');

});
Route::get('/home/kategori/{id}', [HomeController::class,'kategori'])->name('home.kategori');

Route::get('/order/{id}', [OrderController::class,'nota'])->name('nota');