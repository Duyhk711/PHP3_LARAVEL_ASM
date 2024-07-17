<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listDM = DanhMuc::query()->latest('id')->paginate(5);
        // $listPr = SanPham::orderByDesc('id_san_pham')->get();
        $pages_title = "Trang Danh Mục";
        $title = "DANH SÁCH DANH MỤC";
        return view('admins.contents.danhmuc.index',[
            'listDM' => $listDM,
            'title' => $title,
            'pages_title' => $pages_title,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pages_title = "Thêm Danh Mục";
        $title = "THÊM DANH MỤC";
        return view('admins.contents.danhmuc.create',
        [
            'title' => $title,
            'pages_title' => $pages_title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        DanhMuc::query()->create($data);
        return redirect()->route('danhmuc.index')->with('msg','Thêm danh mục thành công');
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
        $showDM = DanhMuc::query()->findOrFail($id);
        // $listPr = SanPham::orderByDesc('id_san_pham')->get();
        $pages_title = "Chỉnh Sửa Danh Mục";
        $title = "CHỈNH SỬA DANH MỤC";
        return view('admins.contents.danhmuc.update',compact('showDM' , 'pages_title', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $danhMuc = DanhMuc::query()->findOrFail($id);

        $data =  $request->except('_token','_method');

        $danhMuc->update($data);

        return redirect()->route('danhmuc.index')->with('msg','Sửa danh mục thành công');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $danhMuc = DanhMuc::find($id);
        if($danhMuc) {

            $danhMuc->san_pham()->delete();
            $danhMuc->delete();

            return back()->with('delete', 'Xóa danh mục thành công!');
        }else {
            return back()->with('error', 'Danh mục không tồn tại!');
        }
        
    }
}
