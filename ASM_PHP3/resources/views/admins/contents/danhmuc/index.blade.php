@extends('layouts.admin')
@section('content')
    

    <div class=" mt-4 container ">
        
        <div class=" mb-lg-0 mb-4 ">
            <div class="card z-index-2 h-100 shadow" >
                <div class="card-header pb-0 pt-3 bg-transparent ">
                    <h4 class="text-capitalize text-center">{{$title}}</h4>
                </div>

                @if (session('delete'))
                    <div class="alert text-danger" style="max-width: 300px;">{{ session('delete') }}</div>
                @endif
                @if (session('msg'))
                    <div class="alert text-success" style="max-width: 300px;">{{ session('msg') }}</div>
                @endif

                @if (session('error'))
                    <div class="alert alert-success">{{ session('error') }}</div>
                @endif
                <div class="d-flex justify-content-end ">
                    <a class="btn btn-success mx-4" href="{{ route('danhmuc.create') }}">Thêm mới danh mục</a>
                </div>
                <div class="card-body p-3 ">
                    <div class="container" >
                        <div class="table-responsive  border-4 ">
                            <table class="table  table-hover p-0  p-3 mb-5 bg-body "  >
                                <thead  style="background-color: rgb(234, 246, 255)">
                                    <tr class="">
                                       
                                        <th class="text-center" >Mã Danh Mục</th>
                                        <th class="text-center" >Tên Danh Mục</th>
                                        
                                        <th class="text-center" >&nbsp;</th>
                                        
                                    </tr>
                                </thead>
                                <tbody class="table-Default">
                                    @forelse ($listDM as $item)
                                        <tr>
                                            
                                            <td class=" text-center  "  >{{ $item->id }}</td>
    
                                            <td class=" text-center" ">{{ $item->ten_danh_muc }}</td>
                                            
                                            
                                           
                                            <td>
                                                <div class="text-center d-flex">
                                                    <a class=" text-center text-warning m-1"
                                                        href="{{route('danhmuc.edit', $item->id)  }} "><i class="fa-solid fa-pen-to-square fa-xl"></i>
                                                    </a>
                                                    <form action="{{ route('danhmuc.destroy', $item->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" onclick="return confirm('Có chắc chắn xóa danh mục không?')" class="btn btn-link text-danger p-0 m-2" style="border: none; background: none; ">
                                                            <i class="fa-solid fa-trash fa-xl"></i>
                                                        </button>
                                                    </form>
                                                    
                                                    
                                                   
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                            {{$listDM->links()}}
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
