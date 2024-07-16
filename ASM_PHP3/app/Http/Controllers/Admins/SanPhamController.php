<?php

namespace App\Http\Controllers\Admins;
use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     const PATH_UPLOAD = 'san_pham';

    public function index()
    {
        $listPr = SanPham::query()->latest('id')->paginate(5);
        // $listPr = SanPham::orderByDesc('id_san_pham')->get();
        $pages_title = "Trang sản phẩm";
        return view('admins.contents.sanpham.index',[
            'listPr' => $listPr,
            'pages_title' => $pages_title,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $listDm = DanhMuc::orderBy('id_danh_muc')->get();
        $listDm = DB::table('danh_mucs')->get();
        $pages_title = "Thêm sản phẩm";
        return view('admins.contents.sanpham.create',[
            'listDm' => $listDm,
            'pages_title' => $pages_title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Xử lí ảnh
    //     if ($request->hasFile('hinh_anh')) {
    //         $fileName = $request->file('hinh_anh')->store('uploads/sanpham', 'public');
    //     }else{
    //         $fileName = null;
    //     }
    //    $data = [
    //     'ten_san_pham'=>$request->ten_san_pham,
    //     'gia'=>$request->gia,
    //     'hinh_anh'=>$fileName,
    //     'mo_ta'=>$request->mo_ta,
    //     'so_luong'=>$request->so_luong,
    //     'trang_thai'=>$request->trang_thai,
    //     'id_danh_muc'=>$request->id_danh_muc,
    //    ];

        $data = $request->except('hinh_anh');
        if($request->hasFile('hinh_anh')){
            $data['hinh_anh'] = Storage::put(self::PATH_UPLOAD, $request->file('hinh_anh'));
        }
        // dd($data);
        SanPham::query()->create($data);
        return redirect()->route('sanpham.index');

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
