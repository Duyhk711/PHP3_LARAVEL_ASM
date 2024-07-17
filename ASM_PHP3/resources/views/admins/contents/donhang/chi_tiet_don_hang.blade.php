@extends('layouts.admin')

@section('content')
<div class=" mt-4 container ">
    <div class=" mb-lg-0 mb-4">
        <div class="card z-index-2 h-100 " >
            <div class="card-header pb-0 pt-3 bg-transparent ">
                <h4 class="text-capitalize text-center">{{$title}}</h4>
            </div>
           
            <div class="card-body p-3 ">
                <div class="container" >
                    <div class="table-responsive  border-4 ">
                    {{-- Code --}}
                    {{-- Chưa xong tạo "Trạng thái đơn hàng, Users rồi mới đến 
                    Đơn hàng sau cùng là chi tiết đơn hàng" --}}
                    <form action="{{ route('sanpham.store')}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        {{-- Mã đơn hàng --}}
                        <div class="mb-3">
                            <label for="" class="form-label">Mã đơn hàng</label>
                            <input name="ma_don_hang" id="ma_don_hang" class="form-select">
                        </div>
                        {{-- Tên người nhận --}}
                        <div class="mb-3">
                            <label for="" class="form-label">Tên người nhận:</label>
                            <input type="text" class="form-control" name="ten_nguoi_nhan"
                                placeholder="Nhập tên sản phẩm">
                        </div>
                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="" class="form-label">Email:</label>
                            <input type="text" class="form-control" name="email_nguoi_nhan"
                                placeholder="Nhập mã sản phẩm">
                        </div>
                        {{-- Số điện thoại --}}
                        <div class="mb-3">
                            <label for="" class="form-label">Số điện thoại:</label>
                            <input type="number" class="form-control" name="gia" min="1"
                                placeholder="Nhập giá sản phẩm">
                        </div>
                        {{-- Địa chỉ --}}
                        <div class="mb-3">
                            <label for="" class="form-label">Địa chỉ:</label>
                            <input type="file" class="form-control" name="hinh_anh"
                                placeholder="Hình ảnh sản phẩm">
                        </div>
                        {{-- Ngày đặt --}}
                        <div class="mb-3">
                            <label for="" class="form-label">Ngày đặt:</label>
                            <input type="number" class="form-control" name="ngay_dat" 
                                placeholder="Nhập số lượng sản phẩm">
                        </div>
                        {{-- Phương thức thanh toán --}}
                        <div class="mb-3">
                            <label for="" class="form-label">Phương thức thanh toán:</label>
                            <select class="form-control" name="trang_thai">
                                <option value="1">Hiển thị</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>
                        {{-- Mô tả sản phẩm --}}
                        <div class="mb-3">
                            <label for="" class="form-label">Mô tả sản phẩm:</label>
                            <textarea class="form-control" name="mo_ta"
                                placeholder="Mô tả sản phẩm"></textarea>
                        </div>

                        {{-- Button --}}
                        <div class="mb-3 d-flex justify-content-center">
                            <button type="reset" class="btn btn-outline-secondary me-3">Nhập lại</button>
                            <button type="submit" class="btn btn-success">Thêm mới</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('pages-title')
    {{$title}}
@endsection