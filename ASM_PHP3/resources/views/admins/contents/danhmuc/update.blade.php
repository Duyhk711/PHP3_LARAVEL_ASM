@extends('layouts.admin')
@section('content')
    @if (session('msg'))
        <div class="alert alert-success">{{ session('msg') }}</div>
    @endif

    <div class=" mt-4 container ">
        <div class=" mb-lg-0 mb-4 ">
            <div class="card z-index-2 h-100 shadow" >
                <div class="card-header pb-0 pt-3 bg-transparent ">
                    <h4 class="text-capitalize text-center">{{$title}}</h4>
                </div>
                
                <div class="card-body p-3 ">
                    <div class="container" >
                        <div class="table-responsive  border-4 ">
                            <form action="{{route('danhmuc.update', $showDM->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                                <Label class="form-label">
                                    Danh Mục:
                                </Label>
                                <input type="text" name="ten_danh_muc" id="" class="form-control" value="{{$showDM->ten_danh_muc}}">
                                <button type="submit">Sửa</button>
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
