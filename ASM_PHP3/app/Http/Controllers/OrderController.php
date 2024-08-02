<?php

namespace App\Http\Controllers;

use App\Models\DonHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\OrderRequest;
use App\Mail\OrderConfirm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donHangs = Auth::user()->donHangs;
        $trangThaiDonHang = DonHang::TRANG_THAI_DON_HANG;

        $type_cho_xac_nhan = DonHang::CHO_XAC_NHAN;
        
        $type_dang_van_chuyen = DonHang::DANG_VAN_CHUYEN;


        return view('clients.contents.donhangs.index', compact('donHangs', 'trangThaiDonHang', 'type_cho_xac_nhan', 'type_dang_van_chuyen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carts = session()->get('cart', []);
        // dd($cart)
        if(!empty($carts)){
            $total = 0;
            $subTotal = 0;

            foreach ($carts as $item){
                $subTotal += $item['gia'] * $item['so_luong'];
            }
            $shipping = 30000;
            $title = "dsjdhdsif";
            $total = $subTotal + $shipping;
            return view('clients.contents.donhangs.create', compact('carts', 'subTotal', 'total', 'shipping'));
        }
        return redirect()->route('clients.cart.list');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderRequest $request)
    {
        // dd($request->all());
        if($request->isMethod('POST')){

            DB::beginTransaction();

            try {
                $params = $request->except('_token');
                $params['ma_don_hang'] = $this->generateUniqueOrderCode();
                // dd($params);
                $donHang = DonHang::query()->create($params);
                // dd($donHang);
                $donHangId = $donHang->id;
                
                $carts = session()->get('cart', []);

                foreach ($carts as $key => $item) {
                   $thanhTien = $item['gia'] * $item['so_luong'];

                   $donHang->chiTietDonHangs()->create([
                    'don_hang_id' => $donHangId,
                    'san_pham_id' => $key,
                    'don_gia' => $item['gia'],
                    'so_luong' => $item['so_luong'],
                    'thanh_tien' => $thanhTien
                   ]);
                }

                DB::commit();
                // gửi mail khi đặt hàng thành công
                Mail::to($donHang->email_nguoi_nhan)->queue(new OrderConfirm($donHang));
                session()->put('cart', []);

                return redirect()->route('clients.donhangs.index')->with('success', 'Đơn hàng đã tạo thành công!');
                // dd($params);
            } catch (\Exception $e) {
                DB::rollBack();
                // dd($e->getMessage(), $e->getTraceAsString());
                return redirect()->route('clients.cart.list')->with('error', 'Có lỗi khi tạo đơn hàng, vui lòng thử lại sau!');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $donHang = DonHang::query()->findOrFail($id);
        $trangThaiDonHang =  DonHang::TRANG_THAI_DON_HANG;
        $trangThaiThanhToan =  DonHang::TRANG_THAT_THANH_TOAN;

        return view('clients.contents.donhangs.show', compact('donHang', 'trangThaiDonHang', 'trangThaiThanhToan'));

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
        $donHang = DonHang::query()->findOrFail($id);

        DB::beginTransaction();
        try {
            if($request->has('huy_don_hang')){
                $donHang->update(['trang_thai_don_hang' => DonHang::HUY_DON_HANG]);
            }elseif($request->has('da_giao_hang')){
                $donHang->update(['trang_thai_don_hang' => DonHang::DA_GIAO_HANG]);
            }

            DB::commit();

            
        } catch (\Exception $e) {
            DB::rollBack();
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    function generateUniqueOrderCode(){
        do {
            $orderCode = 'ORD-' . Auth::id() . '-' . now()->timestamp;
        } while (DonHang::where('ma_don_hang', $orderCode)->exists());
        return $orderCode;
    }
}