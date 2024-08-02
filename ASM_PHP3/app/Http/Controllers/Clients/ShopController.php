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

    public function doAnNhanh(){
        return view('clients.contents.shops.doAnNhanh');
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
    public function detailProduct(string $id){

       $sanPham = SanPham::query()->findOrFail($id);
        $listSanPham = SanPham::query()->get();
        return view('clients.contents.sanpham.productDetail', compact('sanPham', 'listSanPham'));
    }
}

