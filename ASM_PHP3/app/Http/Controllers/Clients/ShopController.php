<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(){
        return view('clients.contents.shops.shop');
    }
    public function doAnNhanh(){
        return view('clients.contents.shops.doAnNhanh');
    }
    public function banhKem(){
        return view('clients.contents.shops.banhKem');

    }
    public function doChien(){
        return view('clients.contents.shops.doChien');
    }
    public function doUong(){
        return view('clients.contents.shops.doUong');
    }
    
    public function detailProduct(string $id){
        $sanPham = SanPham::query()->findOrFail($id);
        $listSanPham = SanPham::query()->get();
        return view('clients.contents.sanpham.productDetail', compact('sanPham', 'listSanPham'));
    }
}
