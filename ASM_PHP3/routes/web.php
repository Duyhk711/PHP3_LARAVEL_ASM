<?php

use App\Http\Controllers\Admins\DonHangController;
use App\Http\Controllers\Admins\SanPhamController;
use App\Http\Controllers\Admins\TrangThaiDHController;
use App\Http\Controllers\Admins\UserController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/dashboard', function () {
//     return view('admins.index');
// });

Route::get('/dashboard', [HomeController::class, 'index']);
Route::resource('/sanpham',SanPhamController::class);
Route::resource('/donhang',DonHangController::class);
Route::resource('/user',UserController::class);
Route::resource('/trangthai',TrangThaiDHController::class);


