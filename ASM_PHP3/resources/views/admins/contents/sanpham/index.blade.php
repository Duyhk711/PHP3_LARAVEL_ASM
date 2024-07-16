@extends('layouts.admin')
@section('content')
<div class=" mt-4 container ">
    <div class=" mb-lg-0 mb-4 ">
        <div class="card z-index-2 h-100 shadow" >
            <div class="card-header pb-0 pt-3 bg-transparent ">
                <h4 class="text-capitalize text-center">DANH SÁCH SẢN PHẨM</h4>
            </div>
            <div class="d-flex justify-content-end ">
                <a class="btn btn-success mx-4" href="{{ route('sanpham.create') }}">Thêm mới sản phẩm</a>
            </div>
            <div class="card-body p-3 ">
                <div class="container" >
                    <div class="table-responsive  border-4 ">
                        <table class="table  table-hover p-0  p-3 mb-5 bg-body "  >
                            <thead  style="background-color: rgb(234, 246, 255)">
                                <tr >
                                   
                                    <th class="text-center" >MÃ SP</th>
                                    <th class="text-center" >Tên SP</th>
                                    <th class="text-center" >Giá</th>
                                    <th class="text-center" >Hình ảnh</th>
                                    <th class="text-center" >Số lượng</th>
                                    <th class="text-center" >Mô tả</th>
                                    <th class="text-center" >Trạng thái</th>
                                    <th class="text-center" >&nbsp;</th>
                                    
                                </tr>
                            </thead>
                            <tbody class="table-Default">
                                @forelse ($listPr as $item)
                                    <tr>
                                        
                                        <td class=" text-center  "  >{{ $item->ma_san_pham }}</td>

                                        <td class=" text-center" style="max-width: 70px; overflow: hidden; ">{{ $item->ten_san_pham }}</td>
                                        
                                        <td class=" text-center">{{ $item->gia }}</td>

                                        <td class=" text-center"><img
                                              class="" style="width: 100px"  src="{{ Storage::url($item->hinh_anh)  }}"  alt="1" srcset="">
                                        </td>
                                        <td class=" text-center">{{ $item->so_luong }}</td>

                                        <td class=" text-truncate" >
                                            <p class="m-0" style="width: 150px; overflow: hidden; ">{{ $item->mo_ta }}</p>
                                        </td>

                                        <td class=" text-center ">
                                                {!! $item->trang_thai == 1 ? 
                                                '<span class="badge bg-info">Còn hàng</span>' : 
                                                '<span class="badge bg-danger">Hết hàng</span>' !!}
                                        </td>
                                       
                                        <td>
                                            <div class="text-center">
                                                <a class=" text-center text-Primary m-1"
                                                    href=""><i class="fa-solid fa-pen-to-square fa-xl"></i>
                                                </a>
                                                <a class=" text-center  text-danger m-1"
                                                    href=""><i class="fa-solid fa-trash fa-xl"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        {{$listPr->links()}}
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