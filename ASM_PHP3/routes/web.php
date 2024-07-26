<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admins\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admins\DanhMucController;
use App\Http\Controllers\Admins\DonHangController;
use App\Http\Controllers\Admins\SanPhamController;
use App\Http\Controllers\Admins\TrangThaiDHController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Clients\ShopController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/dashboard', function () {
//     return view('admins.index');
// });


Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::resource('/sanpham',SanPhamController::class);
Route::resource('/danhmuc',DanhMucController::class);
Route::resource('/donhang',DonHangController::class);
Route::resource('/user',UserController::class);
Route::resource('/trangthai',TrangThaiDHController::class);



Route::get('/login', [AuthController::class, 'showFormLogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showFormRegister']);
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Auth::routes();

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/dashboard', [HomeController::class, 'index'])->name('index')->middleware(['auth','auth.admin']);
Route::get('/client/home', [ClientController::class, 'index'])->name('trang_chu');

Route::get('/client/shop',[ShopController::class, 'shop'])->name('shop');
Route::get('/client/shop/doAnNhanh',[ShopController::class, 'doAnNhanh'])->name('shop.doAnNhanh');
Route::get('/client/shop/banhKem',[ShopController::class, 'banhKem'])->name('shop.banhKem');
Route::get('/client/shop/doUong',[ShopController::class, 'doUong'])->name('shop.doUong');
Route::get('/client/shop/doChien',[ShopController::class, 'doChien'])->name('shop.doChien');
Route::get('/client/shop/cart',[ShopController::class, 'cart'])->name('shop.cart');
Route::get('/client/shop/detailProduct',[ShopController::class, 'detailProduct'])->name('shop.detailProduct');
