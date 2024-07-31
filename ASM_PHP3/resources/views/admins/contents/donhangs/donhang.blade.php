@extends('layouts.admin')
@section('content')
    <div class=" mt-4 container ">
        <div class=" mb-lg-0 mb-4">
            <div class="card z-index-2 h-100 ">
                <div class="card-header pb-0 pt-3 bg-transparent ">
                    <h4 class="text-capitalize text-center">{{ $title }}</h4>
                </div>
                <div class="card-body container ">
                    <div class="table-responsive container p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sản phẩm
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Giá
                                        sản phẩm</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Giá
                                        khuyến mãi</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder  text-center opacity-7">
                                        Danh mục</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7">
                                        Số lượng</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7">
                                        Trạng thái</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img class="" style="width: 50px"
                                                        src="{{ Storage::url($item->hinh_anh) }}" alt="1"
                                                        srcset="">
                                                </div>
                                                <div class="my-auto ms-2">
                                                    <h6 class="mb-0 text-sm">{{ $item->ten_san_pham }}</h6>
                                                    <p class="mb-0 text-sm">{{ $item->ma_san_pham }} </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">
                                                {{ number_format($item->gia_san_pham, 0, ',', '.') }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">
                                                {{ empty(number_format($item->gia_khuyen_mai, 0, ',', '.')) ? 0 : number_format($item->gia_khuyen_mai, 0, ',', '.') }}
                                            </p>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-xs font-weight-bold">{{ $item->danhMuc->ten_danh_muc }}
                                             </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <span class="me-2 text-xs font-weight-bold">{{ $item->so_luong }}</span>

                                            </div>
                                        </td>
                                        <td class="align-middle  text-center">
                                            {!! $item->is_type == 1
                                                ? '<span class="badge bg-info">Hiển thị</span>'
                                                : '<span class="badge bg-danger">Ẩn</span>' !!}
                                        </td>

                                        <td class="align-middle">
                                            <div class="mt-3">
                                                <a class=" text-center text-warning m-1"
                                                    href="{{ route('admins.sanphams.edit', $item->id) }}">
                                                    <button class="btn btn-link text-warning p-0 "
                                                        style="border: none; background: none; ">
                                                        <i class="fa-solid fa-pen-to-square fa-xl"></i>
                                                    </button>
                                                </a>
                                                <form action="{{ route('admins.sanphams.destroy', $item->id) }}" method="POST"
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
                        {{$data->links('pagination::bootstrap-5')}}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('pages-title')
    {{ $pages_title }}
@endsection
