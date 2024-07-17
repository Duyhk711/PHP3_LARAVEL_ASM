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
                <th>Tên Sản Phẩm</th>
                <th>Mã Hoa Đon</th>
                <th>Số Lượng</th>
                <th>GIá</th>
                <th>Tộng giá trị Hóa Đơn</th>
                <th>Ngày Đặt</th>
                <th>Thao Tác</th>
            </thead>
            <tbody>
                @foreach ($chi_tiet_don_hangs as $item)
               <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                    @foreach ($san_phams as $dm)
                              @if ($dm->id == $item->san_pham_id)
                                    {{ $dm->ten_san_pham }}
                              @break
                         @endif
                         @endforeach
                    </td>
                    <td>
                    @foreach ($don_hangs as $dm)
                         @if ($dm->id == $item->don_hang_id)
                                   {{ $dm->ma_don_hang }}
                         @break
                         @endif
                    @endforeach
                    </td>
                    <td>{{ $item->so_luong }}</td>
                    <td>{{ $item->gia }}</td>
                    <td>{{ $item->thanh_tien }}</td>
                    <td>{{ $item->creat_at }}</td>
                    <td>
                         <a href="#"class="btn btn-danger" onclick="return confirm('Bạn Có Muốn Xóa Không')">Xóa</a>
                    </td>
               </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
