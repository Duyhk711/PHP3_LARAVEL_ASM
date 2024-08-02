@extends('layouts.admin')
@section('content')
    <div class=" mt-4 container ">
        <div class=" mb-lg-0 mb-4">
            <div class="card z-index-2 h-100 ">
                <div class="card-header pb-0 pt-3 bg-transparent ">
                    <h4 class="text-capitalize text-center">{{ $title }}</h4>
                </div>
                <div class="d-flex justify-content-end ">
                    <a class="btn btn-success mx-4" href="{{ route('user.create') }}">Thêm mới tài khoản</a>
                </div>
                <div class="card-body p-3 ">
                    <div class="container">
                        <div class="table-responsive  border-4 ">
                            <div class="card">
                                <table class="table table-hover">
                                    <thead>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Tên Tài Khoản</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Password</th>
                                        <th class="text-center">Số Điện Thoại</th>
                                        <th class="text-center">Địa Chỉ</th>
                                        <th class="text-center">Thao Tác</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($listUser as $item)
                                            <tr>
                                                <td class="text-center">{{ $item->id }}</td>
                                                <td class="text-center">{{ $item->name }}</td>
                                                <td class="text-center">{{ $item->email }}</td>
                                                <td class="text-center">{{ $item->password }}</td>
                                                <td class="text-center">{{ $item->so_dien_thoai }}</td>
                                                <td class="text-center">{{ $item->dia_chi }}</td>

                                                <th>
                                                    <a href="#" class="btn btn-warning">Sửa</a>

                                                    <form action="{{ route('user.destroy', $item->id) }}" method="POST"
                                                        class="d-inline" onsubmit="return confirm('Bạn Có Muốn Xóa Không')"
                                                        @csrf @method('DELETE')>
                                                        <button class="btn btn-danger" type="submit">Xóa</button>
                                                    </form>
                                                </th>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('pages-title')
    {{ $title }}
@endsection
