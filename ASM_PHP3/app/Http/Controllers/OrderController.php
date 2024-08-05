<?php

namespace App\Http\Controllers;

use App\Models\DonHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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

            $total = $subTotal + $shipping;
            $title="Mua Hàng";
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
                // dd(DonHang::query()->get());
                $donHang = DonHang::query()->create($params);
               
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

                session()->put('cart', []);

                return redirect()->route('clients.donhangs.index')->with('success', 'Đơn hàng đã tạo thành công!');
                // dd($params);
            } catch (\Exception $e) {
                DB::rollBack();

                return redirect()->route('clients.cart.list')->with('error', 'Có lỗi khi tạo đơn hàng, vui lòng thử lại sau!');
            }
        }
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

    function generateUniqueOrderCode(){
        do {
            $orderCode = 'ORD-' . Auth::id() . '-' . now()->timestamp;
        } while (DonHang::where('ma_don_hang', $orderCode)->exists());
        return $orderCode;
    }
}
