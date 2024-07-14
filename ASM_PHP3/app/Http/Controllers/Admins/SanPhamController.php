<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $listPr = SanPham::orderBy('id_san_pham')->get();

        return view('admins.contents.sanpham.index',[
            'listPr' => $listPr
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $listDm = DanhMuc::orderBy('id_danh_muc')->get();
        $listDm = DB::table('danh_muc')->get();
        return view('admins.contents.sanpham.create',[
            'listDm' => $listDm
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Xử lí ảnh
        if ($request->hasFile('hinh_anh')) {
            $fileName = $request->file('hinh_anh')->store('uploads/sanpham', 'public');
        }else{
            $fileName = null;
        }
       $data = [
        'ten_san_pham'=>$request->ten_san_pham,
        'gia'=>$request->gia,
        'hinh_anh'=>$fileName,
        'mo_ta'=>$request->mo_ta,
        'so_luong'=>$request->so_luong,
        'trang_thai'=>$request->trang_thai,
        'id_danh_muc'=>$request->id_danh_muc,
       ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
