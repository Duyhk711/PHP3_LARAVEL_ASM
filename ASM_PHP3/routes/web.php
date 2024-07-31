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


use App\Http\Controllers\Clients\ShopController;

use App\Http\Controllers\ClientController;



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


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/dashboard', function () {
//     return view('admins.index');
// });


Route::get('/dashboard', [HomeController::class, 'index']);

Route::middleware(['auth', 'auth.admin'])->resource('/sanpham',SanPhamController::class);
Route::middleware(['auth', 'auth.admin'])->resource('/danhmuc',DanhMucController::class);
Route::middleware(['auth', 'auth.admin'])->resource('/donhang',DonHangController::class);
Route::middleware(['auth', 'auth.admin'])->resource('/user',UserController::class);
Route::middleware(['auth', 'auth.admin'])->resource('/trangthai',TrangThaiDHController::class);



Route::get('/login', [AuthController::class, 'showFormLogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showFormRegister']);
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Auth::routes();


Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/dashboard', [HomeController::class, 'index'])->name('index')->middleware(['auth','auth.admin']);
Route::get('/client/home', [ClientController::class, 'index'])->name('trang_chu');

Route::get('/client/shop',[ClientController::class, 'shop'])->name('shop');
Route::get('/client/danhmuc/{danhmuc}',[ClientController::class, 'danhmuc'])->name('shop.danhmuc');

Route::get('/client/shop/cart',[ShopController::class, 'cart'])->name('shop.cart');
Route::get('/client/shop/detailProduct',[ShopController::class, 'detailProduct'])->name('shop.detailProduct');

Route::get('/client/trangchu', [ClientController::class, 'index'])->name('trang_chu');


