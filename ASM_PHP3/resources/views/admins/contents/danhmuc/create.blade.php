@extends('layouts.admin')
@section('content')
    <div class=" mt-4 container ">
        <div class=" mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h6 class="text-capitalize text-center">{{$title}}</h6>

                </div>
                <div class="card-body p-3 rounded">
                    <div class="white_card_body QA_section">
                        <div class="QA_table ">
                            <form action="{{ route('danhmuc.store')}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                {{-- Tên danh mục --}}
                                <div class="mb-3">
                                    <label for="" class="form-label">Tên danh mục:</label>
                                    <input type="text" class="form-control" name="ten_danh_muc"
                                        placeholder="Nhập tên danh mục">
                                </div>
                                </div>
                                {{-- Tên sản phẩm --}}
                                
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
