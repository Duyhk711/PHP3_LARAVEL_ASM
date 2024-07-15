@extends('layouts.admin')

@section('content')
<div class=" mt-4 container ">
    <div class=" mb-lg-0 mb-4">
        <div class="card z-index-2 h-100 " >
            <div class="card-header pb-0 pt-3 bg-transparent ">
                <h4 class="text-capitalize text-center">{{$title}}</h4>
            </div>
           
            <div class="card-body p-3 ">
                <div class="container" >
                    <div class="table-responsive  border-4 ">

                     
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