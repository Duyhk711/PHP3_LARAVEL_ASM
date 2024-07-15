@extends('layouts.admins')
@section('content')
<a href="#" class="btn btn-success">Thêm Tài Khoản</a>
@if(session('msg'))
    <div class="alert alert-success">{{session('msg')}}</div>
@endif

<div class="card">
     <div class="card-header">
          <h1><?= $title ?></h1>
      </div>
<table border="1" class="table table-hover">
    <thead>
        <th>ID</th>
        <th>Tên Tài Khoản</th>
        <th>Email</th>
        <th>Password</th>
        <th>Số Điện Thoại</th>
        <th>Địa Chỉ</th>
        <th>Thao Tác</th>
    </thead>
    <tbody>
         @foreach($danhmucs as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{$item->ten_danh_muc}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->password}}</td>
                <td>{{$item->so_dien_thoai}}</td>
                <td>{{ $item->dia_chi }}</td>
                
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