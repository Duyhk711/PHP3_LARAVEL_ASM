<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
         return view('clients.home');
    }
    public function danhMuc(DanhMuc $cat){
        $sanPham = $cat->sanPhams()->paginate(9);
        $title = $cat->ten_danh_muc;
         return view('clients.contents.shops.product', compact('cat', 'sanPham', 'title'));
    }
}
