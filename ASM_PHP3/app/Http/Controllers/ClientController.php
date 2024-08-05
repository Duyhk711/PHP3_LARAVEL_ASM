<?php

namespace App\Http\Controllers;
use App\Models\SanPham;
use App\Models\Sliders;
use App\Models\DanhMuc;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
            $dataSanPham=SanPham::where('ten_san_pham','like',"%{$keyword}%")->take(8)->get();
            $newProducts=SanPham::where('is_new',1)->orderBy('is_new','desc')->take(8)->get();
            $hotProducts=SanPham::where('is_hot',1)->orderBy('is_hot','desc')->take(8)->get();
            $manyViews=SanPham::orderBy('luot_xem','desc')->take(8)->get();
            $hotdealProducts=SanPham::where('is_hot_deal',1)->orderBy('is_hot_deal','desc')->take(8)->get();
            $dataSlider=Sliders::where('trang_thai',1)->orderBy('trang_thai','desc')->get();
            $danhmucs = DanhMuc::get();
         return view('clients.home',compact('danhmucs', 'dataSanPham','newProducts','hotProducts','manyViews','hotdealProducts','dataSlider'));
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
