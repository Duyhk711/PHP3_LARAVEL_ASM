@extends('layouts.admins')
@section('content')
    @if (session('msg'))
        <div class="alert alert-success">{{ session('msg') }}</div>
    @endif

    <div class="card">
        <div class="card-header">
            <h1><?= $title ?></h1>
        </div>
        <a href="#" class="btn btn-success">Thêm Bài Viết</a>
        <table border="1" class="table table-hover">
            <thead>
                <th>ID</th>
                <th>Tên Danh Mục</th>
                <th>Thao Tác</th>
            </thead>
            <tbody>
                @foreach ($danhmucs as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->ten_danh_muc }}</td>

                        <th>
                            <a href="#" class="btn btn-warning">Sửa</a>
                            <a href="#"class="btn btn-danger" onclick="return confirm('Bạn Có Muốn Xóa Không')">Xóa</a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
