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
                                    <select name="danh_muc_id" id="id_danh_muc" class="form-select">
                                        @foreach ($listDm as $item)
                                            <option value="{{ $item->id }}">{{ $item->ten_danh_muc}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- Tên sản phẩm --}}
                                <div class="mb-3">
                                    <label for="" class="form-label">Tên sản phẩm:</label>
                                    <input type="text" class="form-control @error('ten_san_pham') is-invalid @enderror" name="ten_san_pham"
                                        placeholder="Nhập tên sản phẩm" value="{{ old('ten_san_pham') }}">

                                        @error('ten_san_pham')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Mã sản phẩm:</label>
                                    <input type="text" class="form-control @error('ma_san_pham') is-invalid @enderror" name="ma_san_pham"
                                        placeholder="Nhập mã sản phẩm" value="{{ old('ma_san_pham') }}">

                                        @error('ma_san_pham')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                </div>
                                {{-- Giá sản phẩm --}}
                                <div class="mb-3">
                                    <label for="" class="form-label">Giá sản phẩm:</label>
                                    <input type="number" class="form-control @error('gia') is-invalid @enderror" name="gia" min="1"
                                        placeholder="Nhập giá sản phẩm" value="{{ old('gia') }}">

                                        @error('gia')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
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
                                    <input type="number" class="form-control @error('so_luong') is-invalid @enderror" name="so_luong" min="1"
                                        placeholder="Nhập số lượng sản phẩm" value="{{ old('so_luong') }}">

                                        @error('so_luong')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                </div>
                                {{-- Trạng thái sản phẩm --}}
                                <div class="mb-3">
                                    <label for="" class="form-label">Trạng thái sản phẩm:</label>
                                    <select class="form-control " name="trang_thai">
                                        {{-- <option value="" >Chọn Trạng Thái</option> --}}
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Ẩn</option>
                                    </select>
                                    
                                </div>
                                {{-- Mô tả sản phẩm --}}
                                <div class="mb-3">
                                    <label for="" class="form-label">Mô tả sản phẩm:</label>
                                    <textarea class="form-control "  name="mo_ta"
                                        placeholder="Mô tả sản phẩm">
                                        {{ old('mo_ta') }}
                                    </textarea>
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
    {{$pages_title}}
@endsection
