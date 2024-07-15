@extends('layouts.admins')
@section('content')
<a href="#" class="btn btn-info">Quay Lại</a>
{{-- Thông Báo Thành công --}}
@if(session('msg'))
    <div class="alert alert-success">{{session('msg')}}</div>
@endif
<form action="">
     @csrf
     {{-- Tên danh mục --}}
     <div class="col-8">
          <label for="" >Tên Danh Mục</label>
          <input class="form-control" type="text" name="title" id="" placeholder="Tên danh mục" value="{{old('title')}}">
             {{-- <p class=" text-danger"> 
                 @error('title')  {{$message}}   @enderror
             </p> --}}
          
          </div>
          <button type="submit" class="btn btn-success">Thêm Danh Mục</button>
</form>
@endsection