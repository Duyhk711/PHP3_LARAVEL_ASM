@extends('layouts.clientShop')
{{-- @section('bannerheader')
    <div class="row">
        <div class="col-lg-12">
            <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                <div class="section-title-area ltn__section-title-2">
                    <h6 class="section-subtitle ltn__secondary-color">// Trang Chủ</h6>
                    <h1 class="section-title white-color">{{$cat->ten_danh_muc}}</h1>
                </div>
                <div class="ltn__breadcrumb-list">
                    <ul>
                        <li><a href="{{route('trang_chu')}}">Home</a></li>
                        <li>{{$cat->ten_danh_muc}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
@section('content')
    <div class="ltn__product-area ltn__product-gutter mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ltn__shop-options">
                        <ul>
                            <li>
                                <div class="ltn__grid-list-tab-menu ">
                                    <div class="nav">
                                        <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i
                                                class="fas fa-th-large"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>

                                <div class="showing-product-number text-right text-end">
                                    <span>Showing 1–12 of 18 results</span>
                                </div>
                            </li>
                            <li>
                                <div class="short-by text-center">
                                    <select class="nice-select">
                                        <option value="">--Lọc Sản Phẩm--</option>
                                        <option value="1">Sản Phẩm Mới</option>
                                        <option value="2">Sản Phẩm Bán Chạy </option>
                                        <option value="3">Sản Phẩm Yêu Thích</option>
                                        <option value="4">Sản Phẩm Khuyến mại</option>
                                      
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="showing-product-number text-right text-end">
                                    <span>Showing 9 of 20 results</span>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
                                    <!-- ltn__product-item -->
                                    @foreach ($sanPham as $item)
                                        <div class="col-xl-4 col-sm-6 col-6">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="{{ route('clients.detailProduct', $item->id) }}"><img
                                                            src="{{ Storage::url($item->hinh_anh) }}" height="200px"
                                                            alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">{{ $item->is_new == 1 ? 'New' : '' }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="{{ route('clients.detailProduct', $item->id) }}">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <form action="{{ route('clients.cart.add') }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="qtybutton" value="1">
                                                                    <input type="hidden" name="product_id"
                                                                        value="{{ $item->id }}">
                                                                    <button type="submit"
                                                                        style="background: none; border: none">

                                                                        <i class="fas fa-shopping-cart"></i>

                                                                    </button>
                                                                </form>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                                    data-bs-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">

                                                    </div>
                                                    <h2 class="product-title"><a
                                                            href="{{ route('clients.detailProduct', $item->id) }}">{{ $item->ten_san_pham }}</a>
                                                    </h2>
                                                    <div class="product-price">
                                                        <span>{{ number_format($item->gia_khuyen_mai, 0, ',', '.') }}đ</span>
                                                        <del>{{ number_format($item->gia_san_pham, 0, ',', '.') }}đ</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_product_list">
                            <div class="ltn__product-tab-content-inner ltn__product-list-view">
                                <div class="row">
                                    <!-- ltn__product-item -->
                                    @foreach ($sanPham as $item)
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3">
                                                <div class="product-img">
                                                    <a href="{{ route('clients.detailProduct', $item->id) }}"><img
                                                            src="{{ Storage::url($item->hinh_anh) }}" alt="#"
                                                            style="height: 200px; width: 250px"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">{{ $item->is_new == 1 ? 'New' : '' }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h2 class="product-title"><a
                                                            href="{{ route('clients.detailProduct', $item->id) }}">{{ $item->ten_san_pham }}</a>
                                                    </h2>

                                                    <div class="product-price">
                                                        <span>{{ number_format($item->gia_khuyen_mai, 0, ',', '.') }}đ</span>
                                                        <del>{{ number_format($item->gia_san_pham, 0, ',', '.') }}đ</del>
                                                    </div>
                                                    <div class="product-brief">
                                                        <p>{{ $item->mo_ta_ngan }}</p>

                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="{{ route('clients.detailProduct', $item->id) }}">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <form action="{{ route('clients.cart.add') }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="qtybutton" value="1">
                                                                    <input type="hidden" name="product_id"
                                                                        value="{{ $item->id }}">
                                                                    <button type="submit"
                                                                        style="background: none; border: none">

                                                                        <i class="fas fa-shopping-cart"></i>

                                                                    </button>
                                                                </form>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                                    data-bs-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ltn__pagination-area text-center">
                        <div class="">
                            {{ $sanPham->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                        <!-- Category Widget -->
                        <div class="widget ltn__menu-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Product categories</h4>
                            <ul>
                                @foreach ($danhmucs as $item)
                                <li><a href="{{route('clients.product',$item->id)}}">{{$item->ten_danh_muc}}
                                    <span>{{$item->sanPhams->count()}}</span></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Price Filter Widget -->
                        <div class="widget ltn__price-filter-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Filter by price</h4>
                            <div class="price_filter">
                                <div class="price_slider_amount">
                                    <input type="submit" value="Your range:" />
                                    <input type="text" class="amount" name="price" placeholder="Add Your Price" />
                                </div>
                                <div class="slider-range"></div>
                            </div>
                        </div>
                        <!-- Top Rated Product Widget -->
                       
                        <!-- Search Widget -->
                        <div class="widget ltn__search-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Search Objects</h4>
                            <form action="{{route('clients.product',$item->id)}}" method="GET">
                                <input type="text" name="search" placeholder="Search your keyword..." value="{{request('search')}}">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                       
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
