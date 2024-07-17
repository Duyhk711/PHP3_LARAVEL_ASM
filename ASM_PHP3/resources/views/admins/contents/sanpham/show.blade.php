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
                            <div class="container">
                                <div class="d-flex">

                                    <img src="{{Storage::url($sanPham->hinh_anh)}}" width="300px" alt="" srcset="">
                                    <b> Tên sản phẩm:  </b> 
                                    <p>  {{ $sanPham->ten_san_pham}}</p>
                                </div>
                            </div>
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
