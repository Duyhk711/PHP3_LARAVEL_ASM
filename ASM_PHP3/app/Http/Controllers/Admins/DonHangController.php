<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\DonHang;
use Illuminate\Http\Request;

class DonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages_title = "Đơn hàng";
        $title = "Danh Sách Đơn Hàng";
        $data = DonHang::query()->latest('id')->paginate(5);
        return view('admins.contents.donhangs.donhang', [
            'pages_title' => $pages_title,
            'data' => $data,
            'title' => $title
        ]);
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Chi Tiết Đơn Hàng";
        $data = DonHang::query()->latest('id')->paginate(5);
        return view('admins.contents.donhang.chi_tiet_don_hang', [
            'title' => $title,
            'data' => $data
        ]);
        
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
