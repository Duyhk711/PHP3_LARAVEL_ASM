<?php

namespace App\Http\Controllers\Clients;

use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function shop(){
        $dataSanPham=SanPham::take(9)->get();
        return view('clients.contents.shops.shop',compact('dataSanPham'));
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
    public function cart(){
        return view('clients.contents.shops.cart');
    }
    public function detailProduct(){
        return view('clients.contents.sanpham.productDetail');
    }
}
