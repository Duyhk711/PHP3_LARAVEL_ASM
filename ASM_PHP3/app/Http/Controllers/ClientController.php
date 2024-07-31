<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $danhmucs = DanhMuc::get();

         return view('clients.home',compact('danhmucs'));
    }
    public function shop(){

        $product = SanPham::get();
        // dd($product);
        return view('clients.contents.shops.shop',compact('product'));
    }
    public function danhmuc(DanhMuc $danhmuc){
        // $san_phams=SanPham::where('danh_muc_id', $id->id)->get();
        $sanPham = $danhmuc->sanPhams()->paginate(12);

        // dd($danhmuc->sanPhams);
        return view('clients.contents.shops.product',compact('danhmuc','sanPham'));
    }
    public function danhMuc(DanhMuc $cat){
        $sanPham = $cat->sanPhams()->paginate(1);
        // dd($cat->sanPhams);
         return view('clients.contents.shops.product', compact('cat', 'sanPham'));
    }
}
