@extends('layouts.admin')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-9 shadow-sm p-3 mb-5 bg-body rounded">
                <h3>Thông tin chi tiết đơn hàng số: {{ $donHang->id }}</h3>
                <div class="d-flex">
                    <b> # {{ $donHang->ma_don_hang }}___</b>
                    <p> </p>
                    <p>{{ $donHang->created_at }}</p>
                </div>
        
                <div class="table-responsive">
                   <div class="row">
                        <div class="col-lg-5">
                            <div>
                                <p> <b>Người đặt:  </b> {{ $donHang->user->name}} | {{ $donHang->user->role}}</p>
                                <p> <b>Số điện thoại  </b> {{ $donHang->user->phone}}</p>
                                <p> <b>Email:  </b> {{ $donHang->user->email}}</p>
                                <p> <b>Địa chỉ:  </b> {{ $donHang->user->address}}</p>
                            </div> 
                           
                        </div>     
                        
                        <div class="col-lg-7">
                            <div>
                                <b>Đơn hàng</b> &nbsp; <p class="badge bg-warning ">
                                    {{ $trangThaiThanhToan[$donHang->trang_thai_thanh_toan] }}</p>
                            </div>
                            <div>
                                <b>Trạng thái: </b>
                                <p class="badge bg-warning">{{ $trangThaiDonHang[$donHang->trang_thai_don_hang] }}</p>
                            </div>  
                        </div>   
                   </div>
                    <table class="table table-hover table-primary">
                        <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donHang->chiTietDonHangs as $item)
                                <?php
                                $sanPham = $item->sanPham;
                                ?>

                                <tr>
                                    <td>
                                        <img class="img-fluid" src="{{ Storage::url($sanPham->hinh_anh) }}" alt=""
                                            width="75px">
                                    </td>
                                    <td>{{ $sanPham->ma_san_pham }}</td>
                                    <td>{{ $sanPham->ten_san_pham }}</td>
                                    <td>{{ number_format($item->don_gia, 0, ',', '.') }}đ</td>
                                    <td>{{ number_format($item->so_luong, 0, ',', '.') }}đ</td>
                                    <td>{{ number_format($item->thanh_tien, 0, ',', '.') }}đ</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="4">
                                    <textarea class="form-control" placeholder="Ghi chú đơn hàng">
                                    {{ $donHang->ghi_chu == null ? 'Ghi chú đơn hàng' : $donHang->ghi_chu }}
                                </textarea>
                                </td>
                                <td>
                                    <b>Tổng tiền: </b>
                                </td>
                                <td>
                                    {{ number_format($donHang->tong_tien, 0, ',', '.') }} đ
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-3 shadow-sm p-3 mb-5 bg-body rounded">
                <div>
                    <div>
                        <h4>Người nhận</h4>
                        <p>{{ $donHang->ten_nguoi_nhan }}</p>
                        <h4>Liên hệ</h4>
                        <p>Email: {{ $donHang->email_nguoi_nhan }}</p>
                        <p>Số điện thoại: {{ $donHang->so_dien_thoai_nguoi_nhan }}</p>
                        <h4>Địa chỉ giao hàng</h4>
                        <p>{{ $donHang->ten_nguoi_nhan }}</p>
                        <p>{{ $donHang->so_dien_thoai_nguoi_nhan }}</p>
                        <p>{{ $donHang->dia_chi_nguoi_nhan }}</p>


                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('pages-title')
    {{ $title }}
@endsection
