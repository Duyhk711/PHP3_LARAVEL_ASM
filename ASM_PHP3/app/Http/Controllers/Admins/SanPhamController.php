<?php

namespace App\Http\Controllers\Admins;
use App\Http\Controllers\Controller;
use App\Http\Requests\SanPhamRequest;
use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     const PATH_UPLOAD = 'san_phams';

    public function index()
    {
        $listPr = SanPham::query()->latest('id')->paginate(5);
        // $listPr = SanPham::orderByDesc('id_san_pham')->get();
        $listDm = DanhMuc::query()->get();
        $pages_title = "Trang sản phẩm";
        return view('admins.contents.sanphams.index',compact('listPr',  'pages_title', 'listDm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listDm = DanhMuc::query()->get();
        // $listDm = DB::table('danh_mucs')->get();
        $pages_title = "Thêm sản phẩm";
        return view('admins.contents.sanphams.create',[
            'listDm' => $listDm,
            'pages_title' => $pages_title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SanPhamRequest $request)
    {

        if($request->isMethod('POST')){        
            // dd($request);
            $params = $request->post();    
            $params = $request->except('_token');
            // chuyển đổi giá trị checkbox thành boolean
            $params['is_new']  = $request->has('is_new') ? 1 : 0;
            $params['is_hot'] =  $request->has('is_hot') ? 1 : 0;
            $params['is_hot_deal'] = $request->has('is_hot_deal') ? 1 : 0;
            $params['is_show_home'] = $request->has('is_show_home') ? 1 : 0;
            // dd($params);
            // xử lí hình ảnh đại diện
            if($request->hasFile('hinh_anh')){
                $params['hinh_anh'] = Storage::put(self::PATH_UPLOAD, $request->file('hinh_anh'));
            } 
            $params['danh_muc_id'] = $request->input('danh_muc_id');
            
            // thêm sản phẩm
            $sanPham = SanPham::query()->create($params);
            
            // lấy id sản phẩm vừa thêm để thêm được album
            $sanPhamID = $sanPham->id;
            
            if($request->hasFile('list_hinh_anh')){
                foreach ($request->file('list_hinh_anh') as $image){
                    if($image){
                        $path = $image->store('uploads/hinhanhsanpham/id_' . $sanPhamID, 'public');
                        $sanPham->hinhAnhSanPhams()->create([
                            'san_pham_id' => $sanPhamID,
                            'hinh_anh' => $path,
                        ]);
                    }
                }
            }
            return redirect()->route('sanpham.index')->with('msg', 'Thêm sản phẩm thành công!');

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        
        $pages_title = "Thông tin sản phẩm";
        $title = "THÔNG TIN SẢN PHẨM";
        

        $sanPham = SanPham::findOrFail($id);
        $listDm = DB::table('danh_mucs')->get();
       
        // dd($data);
        
        // return redirect()->route('sanpham.index');

       return view('admins.contents.sanpham.show',compact('sanPham', 'listDm', 'pages_title','title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
        
        $sanPham = SanPham::findOrFail($id);
        $listDm = DB::table('danh_mucs')->get();
        $pages_title = "Trang sản phẩm";
        // dd($data);
        
        // return redirect()->route('sanpham.index');

        return view('admins.contents.sanphams.update',compact('sanPham', 'listDm', 'pages_title'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SanPhamRequest $request, string $id)
    {
        // dd($request);
        if($request->isMethod('PUT')){

            $params = $request->except('_token', '_method');
            $sanPham = SanPham::findOrFail($id);
            // xử lý ảnh
            if($request->hasFile('hinh_anh')){
                // Nếu có đẩy hình ảnh thì xóa hình cũ và thêm hình mới
                if($sanPham->hinh_anh){
                    // nếu sản phẩm có ảnh cũ thì mới xóa
                    
                    Storage::disk('public')->delete($sanPham->hinh_anh);
                }

                $params['hinh_anh'] = Storage::put(self::PATH_UPLOAD, $request->file('hinh_anh'));
            } else{
                // nếu không có hình ảnh thì lấy lại hình ảnh cũ
                $params['hinh_anh']= $sanPham->hinh_anh;
            }
                //  cập nhật dữ liệu
                // eloquent
                $sanPham->update($params);
                return redirect()->route('sanphams.index')->with('msg', 'Chỉnh sửa sản phẩm thành công!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sanPham = SanPham::findOrFail($id);

        $sanPham->delete();
        return redirect()->route('sanphams.index')->with('delete', 'Xóa sản phẩm thành công!');
    }
}
