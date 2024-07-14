@extends('layouts.admin')
@section('content')
    <div class=" mt-4 container ">
        <div class=" mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h6 class="text-capitalize text-center">DANH SÁCH SẢN PHẨM</h6>
                </div>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-success m-4" href="{{ route('sanpham.create') }}">Thêm mới sản phẩm</a>
                </div>
                <div class="card-body p-3 rounded">
                    <div class="white_card_body QA_section">
                        <div class="QA_table ">
                            <table class="table  p-0">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col">ID</th>
                                        <th class="text-center" scope="col">TÊN SP</th>
                                        <th class="text-center" scope="col">GIÁ</th>
                                        <th class="text-center" scope="col">HÌNH ẢNH</th>
                                        <th class="text-center" scope="col">SỐ LƯỢNG</th>
                                        <th class="text-center" scope="col">MÔ TẢ</th>
                                        <th class="text-center" scope="col">TRẠNG THÁI</th>
                                        <th class="text-center" scope="col">THAO TÁC</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($listPr as $item)
                                        <tr>
                                            <td class="f_s_14 f_w_400 color_text_2 text-center">{{ $item->id_san_pham }}
                                            </td>
                                            <td class="f_s_14 f_w_400 color_text_2 text-center">{{ $item->ten_san_pham }}
                                            </td>
                                            <td class="f_s_14 f_w_400 color_text_2 text-center">{{ $item->gia }}</td>
                                            <td class="f_s_14 f_w_400 color_text_2 text-center"><img
                                                    src="{{ $item->hinh_anh }}" alt="1" srcset=""></td>
                                            <td class="f_s_14 f_w_400 color_text_2 text-center">{{ $item->so_luong }}</td>
                                            <td class="f_s_14 f_w_400 color_text_2">
                                                <p style="width: 200px;">{{ $item->mo_ta }}</p>
                                            </td>
                                            <td class="f_s_14 f_w_400 color_text_2 text-center">
                                                {{ $item->trang_thai == 1 ? 'Còn hàng' : 'Hết hàng' }}</td>
                                            <td>
                                                <a class="f_s_14 f_w_400 color_text_2 text-center btn btn-warning"
                                                    href="">Sửa</a>
                                                <a class="f_s_14 f_w_400 color_text_2 text-center btn btn-danger "
                                                    href="">Xóa</a>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
