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

        $listSanPham = SanPham::get();
        $title="Sản Phẩm";
        // dd($product);
        return view('clients.contents.shops.shop',compact('listSanPham','title'));
    }
   
    public function danhMuc(Request $request , DanhMuc $cat){
        $search = $request->input('search');
        $sanPham = $cat->sanPhams()->when($search,function($query,$search){
            return $query->where('ma_san_pham','like',"%{$search}%")
            ->orWhere('ten_san_pham','like',"%{$search}%");
        })
        ->orderByDesc('id')
        ->paginate(9);
        
        $title=$cat->ten_danh_muc;
        // dd($cat->sanPhams);
         return view('clients.contents.shops.product', compact('cat', 'sanPham','title'));
    }

    public function Baiviet(){

        $listBaiViet = SanPham::get();
        $title="Sản Phẩm";
        // dd($product);
        return view('clients.contents.shops.shop',compact('listSanPham','title'));
    }
   
}
