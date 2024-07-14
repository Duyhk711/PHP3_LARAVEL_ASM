@extends('layouts.admin')
@section('content')
    <div class=" mt-4 container ">
        <div class=" mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h6 class="text-capitalize text-center">THÊM MỚI SẢN PHẨM</h6>

                </div>
                <div class="card-body p-3 rounded">
                    <div class="white_card_body QA_section">
                        <div class="QA_table ">
                            <form action="{{ route('sanpham.store')}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                {{-- Tên danh mục --}}
                                <div class="mb-3">
                                    <label for="" class="form-label">Tên danh mục:</label>
                                    <select name="id_danh_muc" id="id_danh_muc" class="form-select">
                                        @foreach ($listDm as $item)
                                            <option value="{{ $item->id_danh_muc }}">{{ $item->ten_danh_muc}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- Tên sản phẩm --}}
                                <div class="mb-3">
                                    <label for="" class="form-label">Tên sản phẩm:</label>
                                    <input type="text" class="form-control" name="ten_san_pham"
                                        placeholder="Nhập tên sản phẩm">
                                </div>
                                {{-- Giá sản phẩm --}}
                                <div class="mb-3">
                                    <label for="" class="form-label">Giá sản phẩm:</label>
                                    <input type="number" class="form-control" name="gia" min="1"
                                        placeholder="Nhập giá sản phẩm">
                                </div>
                                {{-- Hình ảnh sản phẩm --}}
                                <div class="mb-3">
                                    <label for="" class="form-label">Hình ảnh sản phẩm:</label>
                                    <input type="file" class="form-control" name="hinh_anh"
                                        placeholder="Hình ảnh sản phẩm">
                                </div>
                                {{-- Số lượng sản phẩm --}}
                                <div class="mb-3">
                                    <label for="" class="form-label">Số lượng sản phẩm:</label>
                                    <input type="number" class="form-control" name="so_luong" min="1"
                                        placeholder="Nhập số lượng sản phẩm">
                                </div>
                                {{-- Trạng thái sản phẩm --}}
                                <div class="mb-3">
                                    <label for="" class="form-label">Trạng thái sản phẩm:</label>
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
