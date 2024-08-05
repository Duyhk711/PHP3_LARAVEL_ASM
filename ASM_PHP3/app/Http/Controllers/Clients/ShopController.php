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
        $listSanPham = SanPham::query()
        ->when($filter, function($query,$filter){
            if ($filter == 'new') {
                return $query->where('is_new', 1); // Lọc sản phẩm mới
            }
            if ($filter == 'hot') {
                return $query->where('is_hot', 1); // Lọc sản phẩm hot
            }
            if ($filter == 'hot_deal') {
                return $query->where('is_hot_deal', 1); // Lọc sản phẩm khuyến mại (hot deal)
            }
            return $query;
        })
        ->orderByDesc('id')
        ->paginate(8);
            // dd($filter);
            // $listSanPham = SanPham::query()->paginate(8);
            $title="Sản Phẩm";
        return view('clients.contents.shops.shop',compact('listSanPham','title'));
    }


    
    public function cart(){
        $title="Mua Hàng";
        return view('clients.contents.shops.cart',compact('title'));
    }

    public function detailProduct(string $id){
        $sanPham = SanPham::with('binhLuans')->findOrFail($id);
        $danhGiaTrungBinh = $sanPham->binhLuans->whereNotNull('danh_gia')->avg('danh_gia');
        $listSanPham = SanPham::query()->get();

        $title="Chi Tiết Sản Phẩm";
        return view('clients.contents.sanpham.productDetail', compact('sanPham', 'listSanPham','title'));
    }
}

