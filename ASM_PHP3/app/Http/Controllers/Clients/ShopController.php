<?php

namespace App\Http\Controllers\Clients;
use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;


class ShopController extends Controller
{
    public function shop(Request $request){
        
        $filter = $request->input('filter');
        $listSanPham = SanPham::query()->when($filter, function($query){
            return $query
            ->where('is_new', 1)
            ->orWhere('is_hot', 1)
            ->orWhere('is_hot_deal', 1);
        })->paginate(8);
            // dd($filter);
            // $listSanPham = SanPham::query()->paginate(8);
            $title="Sản Phẩm";
        return view('clients.contents.shops.shop',compact('listSanPham','title'));
    }


    public function detailProduct(string $id){
        $sanPham = SanPham::with('binhLuans')->findOrFail($id);
        $danhGiaTrungBinh = $sanPham->binhLuans->whereNotNull('danh_gia')->avg('danh_gia');
        $listSanPham = SanPham::query()->get();
        return view('clients.contents.sanpham.productDetail', compact('sanPham', 'listSanPham', 'danhGiaTrungBinh'));
    }
}

