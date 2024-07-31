<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(){

        $product=SanPham::get();
        // dd($product);
        return view('clients.contents.shops.shop',compact('product'));
    }
    public function danhmuc( string $id){
        $danhmucs=DanhMuc::findOrFail($id);

        return view('clients.contents.shops.doAnNhanh',compact('danhmucs'));
    }
    public function banhKem(){
        $danhmucs=DanhMuc::get();

        return view('clients.contents.shops.banhKem');

    }
    public function doChien(){
        $danhmucs=DanhMuc::get();

        return view('clients.contents.shops.doChien');
    }
    public function doUong(){
        $danhmucs=DanhMuc::get();

        return view('clients.contents.shops.doUong');
    }
    public function cart(){

        return view('clients.contents.shops.cart');
    }
    public function detailProduct(){

        return view('clients.contents.sanpham.productDetail');
    }
}
