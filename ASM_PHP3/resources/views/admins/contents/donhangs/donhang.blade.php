@extends('layouts.admin')
@section('content')
    <div class=" mt-4 container ">
        <div class=" mb-lg-0 mb-4">
            <div class="card z-index-2 h-100 ">
                <div class="card-header pb-0 pt-3 bg-transparent ">
                    <h4 class="text-capitalize text-center">{{ $title }}</h4>
                </div>
                {{-- <div class="d-flex justify-content-end ">
                <a class="btn btn-success mx-4" href="{{ route('sanpham.create') }}">Thêm mới sản phẩm</a>
                </div> --}}
                <div class="card-body p-3 ">
                    <div class="container">
                        <div class="table-responsive  border-4 ">
                            <table class="table  table-hover p-0  table-bordered shadow p-3 mb-5 bg-body rounded">
                                <thead class="table-danger">
                                    <tr>
                                        <th class="text-center">Mã đơn</th>
                                        <th class="text-center">Người Nhận</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Số điện thoại</th>
                                        <th class="text-center">Địa chỉ</th>
                                        <th class="text-center">Ngày đặt</th>
                                        <th class="text-center">PTTT</th>
                                        <th class="text-center">Tổng </th>

                                    </tr>
                                </thead>
                                <tbody class="table-Default">
                                    @forelse ($data as $item)
                                        <tr>
                                            <td class=" text-center  ">{{ $item->ma_don_hang }}</td>

                                            <td class=" text-center">{{ $item->ten_nguoi_nhan }}</td>
                                            
                                            <td class=" text-center" style="width: 100px; overflow: hidden;">
                                                {{ $item->email_nguoi_nhan }}
                                            </td>

                                            <td class=" text-center" style="width: 100px; overflow: hidden;">
                                                {{ $item->so_dien_thoai }}
                                            </td>
                                            <td class=" text-center" style="width: 100px; overflow: hidden;">
                                                {{ $item->dia_chi }}
                                            </td>
                                            <td class=" text-center">{{ $item->ngay_dat }}</td>


                                            <td class=" text-center">{{ $item->phuong_thuc_thanh_toan }}</td>

                                            <td class=" text-center">{{ $item->tong_tien }}</td>

                                            <td>
                                                <div class="text-center">
                                                    <a class=" text-center text-Primary m-1" href=""> Xem Chi Tiết
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('pages-title')
    {{ $pages_title }}
@endsection
