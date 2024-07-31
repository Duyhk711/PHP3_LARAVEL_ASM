@extends('layouts.client')
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
                                     <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i class="fas fa-th-large"></i></a>
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
                                     <option>Default Sorting</option>
                                     <option>Sort by popularity</option>
                                     <option>Sort by new arrivals</option>
                                     <option>Sort by price: low to high</option>
                                     <option>Sort by price: high to low</option>
                                 </select>
                             </div> 
                         </li>
                     </ul>
                 </div>
                 <div class="tab-content">
                     <div class="tab-pane fade active show" id="liton_product_grid">
                         <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                             <div class="row">
                                 <!-- ltn__product-item -->
                                 @foreach ($product as $item)
                                 <div class="col-xl-4 col-sm-6 col-6">

                                     <div class="ltn__product-item ltn__product-item-3 text-center">
                                         <div class="product-img">
                                             <a href="product-details.html"><img src="{{ Storage::url($item->hinh_anh) }}" alt="Ảnh Sản Phẩm" width="200px" height="250px"></a>
                                             <div class="product-badge">
                                                 <ul>
                                                     <li class="sale-badge">New</li>
                                                 </ul>
                                             </div>
                                             <div class="product-hover-action">
                                                 <ul>
                                                     <li>
                                                         <a href="{{route('shop.detailProduct')}}" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                             <i class="far fa-eye"></i>
                                                         </a>
                                                     </li>
                                                     <li>
                                                         <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                             <i class="fas fa-shopping-cart"></i>
                                                         </a>
                                                     </li>
                                                     <li>
                                                         <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                             <i class="far fa-heart"></i></a>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                         <div class="product-info">
                                             <div class="product-ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                     <li><a href="#"><i class="far fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                             <h2 class="product-title"><a href="product-details.html">{{$item->ten_san_pham}}</a></h2>
                                             <div class="product-price">
                                                 <span>{{$item->gia_khuyen_mai}}</span>
                                                 <del>{{$item->gia_san_pham}}</del>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 @endforeach
                                 <!-- ltn__product-item -->
                                
                             </div>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="liton_product_list">
                         <div class="ltn__product-tab-content-inner ltn__product-list-view">
                             <div class="row">
                                 <!-- ltn__product-item -->
                                 <div class="col-lg-12">
                                     <div class="ltn__product-item ltn__product-item-3">
                                         <div class="product-img">
                                             <a href="product-details.html"><img src="img/product/1.png" alt="#"></a>
                                             <div class="product-badge">
                                                 <ul>
                                                     <li class="sale-badge">New</li>
                                                 </ul>
                                             </div>
                                         </div>
                                         <div class="product-info">
                                             <h2 class="product-title"><a href="product-details.html">Vegetables Juices</a></h2>
                                             <div class="product-ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                     <li><a href="#"><i class="far fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                             <div class="product-price">
                                                 <span>$165.00</span>
                                                 <del>$1720.00</del>
                                             </div>
                                             <div class="product-brief">
                                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit nesciunt,  aliquid, deleniti non et ut dolorem!</p>
                                             </div>
                                             <div class="product-hover-action">
                                                 <ul>
                                                     <li>
                                                         <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                             <i class="far fa-eye"></i>
                                                         </a>
                                                     </li>
                                                     <li>
                                                         <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                             <i class="fas fa-shopping-cart"></i>
                                                         </a>
                                                     </li>
                                                     <li>
                                                         <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                             <i class="far fa-heart"></i></a>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- ltn__product-item -->
                                 <div class="col-lg-12">
                                     <div class="ltn__product-item ltn__product-item-3">
                                         <div class="product-img">
                                             <a href="product-details.html"><img src="img/product/2.png" alt="#"></a>
                                         </div>
                                         <div class="product-info">
                                             <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                             <div class="product-ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                     <li><a href="#"><i class="far fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                             <div class="product-price">
                                                 <span>$165.00</span>
                                                 <del>$1720.00</del>
                                             </div>
                                             <div class="product-brief">
                                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit nesciunt,  aliquid, deleniti non et ut dolorem!</p>
                                             </div>
                                             <div class="product-hover-action">
                                                 <ul>
                                                     <li>
                                                         <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                             <i class="far fa-eye"></i>
                                                         </a>
                                                     </li>
                                                     <li>
                                                         <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                             <i class="fas fa-shopping-cart"></i>
                                                         </a>
                                                     </li>
                                                     <li>
                                                         <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                             <i class="far fa-heart"></i></a>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- ltn__product-item -->
                                 <div class="col-lg-12">
                                     <div class="ltn__product-item ltn__product-item-3">
                                         <div class="product-img">
                                             <a href="product-details.html"><img src="img/product/3.png" alt="#"></a>
                                             <div class="product-badge">
                                                 <ul>
                                                     <li class="sale-badge">New</li>
                                                 </ul>
                                             </div>
                                         </div>
                                         <div class="product-info">
                                             <h2 class="product-title"><a href="product-details.html">Vegetables Juices</a></h2>
                                             <div class="product-ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                     <li><a href="#"><i class="far fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                             <div class="product-price">
                                                 <span>$165.00</span>
                                                 <del>$1720.00</del>
                                             </div>
                                             <div class="product-brief">
                                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit nesciunt,  aliquid, deleniti non et ut dolorem!</p>
                                             </div>
                                             <div class="product-hover-action">
                                                 <ul>
                                                     <li>
                                                         <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                             <i class="far fa-eye"></i>
                                                         </a>
                                                     </li>
                                                     <li>
                                                         <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                             <i class="fas fa-shopping-cart"></i>
                                                         </a>
                                                     </li>
                                                     <li>
                                                         <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                             <i class="far fa-heart"></i></a>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- ltn__product-item -->
                                 <div class="col-lg-12">
                                     <div class="ltn__product-item ltn__product-item-3">
                                         <div class="product-img">
                                             <a href="product-details.html"><img src="img/product/4.png" alt="#"></a>
                                         </div>
                                         <div class="product-info">
                                             <h2 class="product-title"><a href="product-details.html">Red Hot Tomato</a></h2>
                                             <div class="product-ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                     <li><a href="#"><i class="far fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                             <div class="product-price">
                                                 <span>$165.00</span>
                                                 <del>$1720.00</del>
                                             </div>
                                             <div class="product-brief">
                                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit nesciunt,  aliquid, deleniti non et ut dolorem!</p>
                                             </div>
                                             <div class="product-hover-action">
                                                 <ul>
                                                     <li>
                                                         <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                             <i class="far fa-eye"></i>
                                                         </a>
                                                     </li>
                                                     <li>
                                                         <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                             <i class="fas fa-shopping-cart"></i>
                                                         </a>
                                                     </li>
                                                     <li>
                                                         <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                             <i class="far fa-heart"></i></a>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- ltn__product-item -->
                                 <div class="col-lg-12">
                                     <div class="ltn__product-item ltn__product-item-3">
                                         <div class="product-img">
                                             <a href="product-details.html"><img src="img/product/5.png" alt="#"></a>
                                             <div class="product-badge">
                                                 <ul>
                                                     <li class="sale-badge">Hot</li>
                                                 </ul>
                                             </div>
                                         </div>
                                         <div class="product-info">
                                             <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                             <div class="product-ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                     <li><a href="#"><i class="far fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                             <div class="product-price">
                                                 <span>$165.00</span>
                                                 <del>$1720.00</del>
                                             </div>
                                             <div class="product-brief">
                                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit nesciunt,  aliquid, deleniti non et ut dolorem!</p>
                                             </div>
                                             <div class="product-hover-action">
                                                 <ul>
                                                     <li>
                                                         <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                             <i class="far fa-eye"></i>
                                                         </a>
                                                     </li>
                                                     <li>
                                                         <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                             <i class="fas fa-shopping-cart"></i>
                                                         </a>
                                                     </li>
                                                     <li>
                                                         <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                             <i class="far fa-heart"></i></a>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- ltn__product-item -->
                                 <div class="col-lg-12">
                                     <div class="ltn__product-item ltn__product-item-3">
                                         <div class="product-img">
                                             <a href="product-details.html"><img src="img/product/6.png" alt="#"></a>
                                             <div class="product-badge">
                                                 <ul>
                                                     <li class="sale-badge">New</li>
                                                 </ul>
                                             </div>
                                         </div>
                                         <div class="product-info">
                                             <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                             <div class="product-ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                     <li><a href="#"><i class="far fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                             <div class="product-price">
                                                 <span>$165.00</span>
                                                 <del>$1720.00</del>
                                             </div>
                                             <div class="product-brief">
                                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit nesciunt,  aliquid, deleniti non et ut dolorem!</p>
                                             </div>
                                             <div class="product-hover-action">
                                                 <ul>
                                                     <li>
                                                         <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                             <i class="far fa-eye"></i>
                                                         </a>
                                                     </li>
                                                     <li>
                                                         <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                             <i class="fas fa-shopping-cart"></i>
                                                         </a>
                                                     </li>
                                                     <li>
                                                         <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                             <i class="far fa-heart"></i></a>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- ltn__product-item -->
                                 <div class="col-lg-12">
                                     <div class="ltn__product-item ltn__product-item-3">
                                         <div class="product-img">
                                             <a href="product-details.html"><img src="img/product/4.png" alt="#"></a>
                                         </div>
                                         <div class="product-info">
                                             <h2 class="product-title"><a href="product-details.html">Red Hot Tomato</a></h2>
                                             <div class="product-ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                     <li><a href="#"><i class="far fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                             <div class="product-price">
                                                 <span>$165.00</span>
                                                 <del>$1720.00</del>
                                             </div>
                                             <div class="product-brief">
                                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit nesciunt,  aliquid, deleniti non et ut dolorem!</p>
                                             </div>
                                             <div class="product-hover-action">
                                                 <ul>
                                                     <li>
                                                         <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                             <i class="far fa-eye"></i>
                                                         </a>
                                                     </li>
                                                     <li>
                                                         <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                             <i class="fas fa-shopping-cart"></i>
                                                         </a>
                                                     </li>
                                                     <li>
                                                         <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                             <i class="far fa-heart"></i></a>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!--  -->
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="ltn__pagination-area text-center">
                     <div class="ltn__pagination">
                         <ul>
                             <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                             <li><a href="#">1</a></li>
                             <li class="active"><a href="#">2</a></li>
                             <li><a href="#">3</a></li>
                             <li><a href="#">...</a></li>
                             <li><a href="#">10</a></li>
                             <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4">
                 <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                     <!-- Category Widget -->
                     <div class="widget ltn__menu-widget">
                         <h4 class="ltn__widget-title ltn__widget-title-border">Product categories</h4>
                         <ul>
                             <li><a href="#">Body <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                             <li><a href="#">Interior <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                             <li><a href="#">Lights <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                             <li><a href="#">Parts <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                             <li><a href="#">Tires <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                             <li><a href="#">Uncategorized <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                             <li><a href="#">Wheel <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                         </ul>
                     </div>
                     <!-- Price Filter Widget -->
                     <div class="widget ltn__price-filter-widget">
                         <h4 class="ltn__widget-title ltn__widget-title-border">Filter by price</h4>
                         <div class="price_filter">
                             <div class="price_slider_amount">
                                 <input type="submit"  value="Your range:"/> 
                                 <input type="text" class="amount" name="price"  placeholder="Add Your Price" /> 
                             </div>
                             <div class="slider-range"></div>
                         </div>
                     </div>
                     <!-- Top Rated Product Widget -->
                     <div class="widget ltn__top-rated-product-widget">
                         <h4 class="ltn__widget-title ltn__widget-title-border">Top Rated Product</h4>
                         <ul>
                             <li>
                                 <div class="top-rated-product-item clearfix">
                                     <div class="top-rated-product-img">
                                         <a href="product-details.html"><img src="img/product/1.png" alt="#"></a>
                                     </div>
                                     <div class="top-rated-product-info">
                                         <div class="product-ratting">
                                             <ul>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                             </ul>
                                         </div>
                                         <h6><a href="product-details.html">Mixel Solid Seat Cover</a></h6>
                                         <div class="product-price">
                                             <span>$49.00</span>
                                             <del>$65.00</del>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                             <li>
                                 <div class="top-rated-product-item clearfix">
                                     <div class="top-rated-product-img">
                                         <a href="product-details.html"><img src="img/product/2.png" alt="#"></a>
                                     </div>
                                     <div class="top-rated-product-info">
                                         <div class="product-ratting">
                                             <ul>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                             </ul>
                                         </div>
                                         <h6><a href="product-details.html">Vegetables Juices</a></h6>
                                         <div class="product-price">
                                             <span>$49.00</span>
                                             <del>$65.00</del>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                             <li>
                                 <div class="top-rated-product-item clearfix">
                                     <div class="top-rated-product-img">
                                         <a href="product-details.html"><img src="img/product/3.png" alt="#"></a>
                                     </div>
                                     <div class="top-rated-product-info">
                                         <div class="product-ratting">
                                             <ul>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                 <li><a href="#"><i class="far fa-star"></i></a></li>
                                             </ul>
                                         </div>
                                         <h6><a href="product-details.html">Coil Spring Conversion</a></h6>
                                         <div class="product-price">
                                             <span>$49.00</span>
                                             <del>$65.00</del>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                         </ul>
                     </div>
                     <!-- Search Widget -->
                     <div class="widget ltn__search-widget">
                         <h4 class="ltn__widget-title ltn__widget-title-border">Search Objects</h4>
                         <form action="#">
                             <input type="text" name="search" placeholder="Search your keyword...">
                             <button type="submit"><i class="fas fa-search"></i></button>
                         </form>
                     </div>
                     <!-- Tagcloud Widget -->
                     <div class="widget ltn__tagcloud-widget">
                         <h4 class="ltn__widget-title ltn__widget-title-border">Popular Tags</h4>
                         <ul>
                             <li><a href="#">Popular</a></li>
                             <li><a href="#">desgin</a></li>
                             <li><a href="#">ux</a></li>
                             <li><a href="#">usability</a></li>
                             <li><a href="#">develop</a></li>
                             <li><a href="#">icon</a></li>
                             <li><a href="#">Car</a></li>
                             <li><a href="#">Service</a></li>
                             <li><a href="#">Repairs</a></li>
                             <li><a href="#">Auto Parts</a></li>
                             <li><a href="#">Oil</a></li>
                             <li><a href="#">Dealer</a></li>
                             <li><a href="#">Oil Change</a></li>
                             <li><a href="#">Body Color</a></li>
                         </ul>
                     </div>
                 </aside>
             </div>
         </div>
     </div>
 </div>
    
@endsection