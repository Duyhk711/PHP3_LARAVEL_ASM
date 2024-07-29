@extends('layouts.admin')
@section('content')
    <div class=" mt-4 container ">
        <div class=" mb-lg-0 mb-4 ">
            <div class="card z-index-2 h-100 shadow">
                <div class="card-header pb-0 pt-3 bg-transparent ">
                    <h4 class="text-capitalize text-center">DANH SÁCH SẢN PHẨM</h4>
                </div>



                @if (session('msg'))
                    <div class="alert text-success m-2">{{ session('msg') }}</div>
                @endif
                @if (session('delete'))
                    <div class="alert text-danger m-2">{{ session('delete') }}</div>
                @endif
                <div class="d-flex">

                </div>
                <div class="d-flex justify-content-end ">

                    <a class="btn btn-success mx-4" href="{{ route('sanpham.create') }}">Thêm mới sản phẩm</a>

                </div>




                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Danh mục</th>
                                    <th>Giá sản phẩm</th>
                                    <th>Giá khuyến mại</th>
                                    <th>Số lượng</th>
                                    <th>Trạng thái</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($listPr as $item)
                                    <tr>

                                        <td class="text-center">{{ $item->ma_san_pham }}</td>

                                        <td class="text-center"><img class="" style="width: 100px"
                                                src="{{Storage::url($item->hinh_anh)}}" alt="1" srcset="">
                                        </td>

                                        <td class="text-center" style="max-width: 70px; overflow: hidden; ">
                                            {{ $item->ten_san_pham }}</td>

                                        <td class="text-center">{{ $item->danhMuc->ten_danh_muc }}</td>

                                        <td class="text-center">{{ $item->gia_san_pham }}</td>
                                        <td class="text-center"> {{ empty($item->gia_khuyen_mai) ? 0 : $item->gia_khuyen_mai }}</td>
                                        <td class="text-center">{{ $item->so_luong }}</td>
                                        <td class="text-center">
                                            {!! $item->is_type == 1
                                                ? '<span class="badge bg-info">Hiển thị</span>'
                                                : '<span class="badge bg-danger">Ẩn</span>' !!}
                                        </td>

                                        <td class="text-center">
                                            <div>
                                                <a class=" text-center text-warning m-1"
                                                href="{{ route('sanpham.show', $item->id) }}">
                                                <button class="btn btn-link text-warning p-0 "
                                                    style="border: none; background: none; ">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </a>

                                                <a class=" text-center text-warning m-1"
                                                    href="{{ route('sanpham.edit', $item->id) }}">
                                                    <button class="btn btn-link text-warning p-0 "
                                                        style="border: none; background: none; ">
                                                        <i class="fa-solid fa-pen-to-square fa-xl"></i>
                                                    </button>
                                                </a>
                                                <form action="{{ route('sanpham.destroy', $item->id) }}" method="POST"
                                                    class="d-inline mt-1">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        onclick="return confirm('Có chắc chắn xóa sản phẩm không?')"
                                                        class="btn btn-link text-danger p-0 "
                                                        style="border: none; background: none; ">
                                                        <i class="fa-solid fa-trash fa-xl "></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        {{ $listPr->links() }}
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection

@section('pages-title')
    {{ $pages_title }}
@endsection
