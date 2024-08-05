@extends('layouts.client')

@section('content')
<div class="row">
   <div class="col-lg-12">
       <div class="section-title-area ltn__section-title-2 text-center">
           <h1 class="section-title">Our Products</h1>
       </div>
       <div class="ltn__tab-menu ltn__tab-menu-2 ltn__tab-menu-top-right-- text-uppercase text-center">
           <div class="nav">
               <a class="active show" data-bs-toggle="tab" href="#liton_tab_3_1">Food & Drinks</a>
               <a data-bs-toggle="tab" href="#liton_tab_3_2" class="">Vegetables</a>
               <a data-bs-toggle="tab" href="#liton_tab_3_3" class="">Dried Foods</a>
               <a data-bs-toggle="tab" href="#liton_tab_3_4" class="">Bread & Cake</a>
               <a data-bs-toggle="tab" href="#liton_tab_3_5" class="">Fish & Meat</a>
           </div>
       </div>
       <div class="tab-content">
           <div class="tab-pane fade active show" id="liton_tab_3_1">
               <div class="ltn__product-tab-content-inner">
                   <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/11.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/7.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                   <div class="product-price">
                                       <span>$78.00</span>
                                       <del>$85.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/12.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/8.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                   <div class="product-price">
                                       <span>$150.00</span>
                                       <del>$180.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/13.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                   <div class="product-price">
                                       <span>$75.00</span>
                                       <del>$92.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/9.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/14.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                   <div class="product-price">
                                       <span>$78.00</span>
                                       <del>$85.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/10.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                   <div class="product-price">
                                       <span>$75.00</span>
                                       <del>$92.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/15.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Fresh Butter Cake</a></h2>
                                   <div class="product-price">
                                       <span>$150.00</span>
                                       <del>$180.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/6.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/7.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                   <div class="product-price">
                                       <span>$150.00</span>
                                       <del>$180.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/11.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!--  -->
                   </div>
               </div>
           </div>
           <div class="tab-pane fade" id="liton_tab_3_2">
               <div class="ltn__product-tab-content-inner">
                   <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/16.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/10.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                   <div class="product-price">
                                       <span>$78.00</span>
                                       <del>$85.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/15.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/9.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                   <div class="product-price">
                                       <span>$150.00</span>
                                       <del>$180.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/14.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                   <div class="product-price">
                                       <span>$75.00</span>
                                       <del>$92.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/8.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/13.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                   <div class="product-price">
                                       <span>$78.00</span>
                                       <del>$85.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/10.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                   <div class="product-price">
                                       <span>$75.00</span>
                                       <del>$92.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/15.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Fresh Butter Cake</a></h2>
                                   <div class="product-price">
                                       <span>$150.00</span>
                                       <del>$180.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/6.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/7.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                   <div class="product-price">
                                       <span>$150.00</span>
                                       <del>$180.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/11.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!--  -->
                   </div>
               </div>
           </div>
           <div class="tab-pane fade" id="liton_tab_3_3">
               <div class="ltn__product-tab-content-inner">
                   <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/6.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/12.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                   <div class="product-price">
                                       <span>$78.00</span>
                                       <del>$85.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/8.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/15.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                   <div class="product-price">
                                       <span>$150.00</span>
                                       <del>$180.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/9.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                   <div class="product-price">
                                       <span>$75.00</span>
                                       <del>$92.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/11.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/14.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                   <div class="product-price">
                                       <span>$78.00</span>
                                       <del>$85.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/10.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                   <div class="product-price">
                                       <span>$75.00</span>
                                       <del>$92.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/15.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Fresh Butter Cake</a></h2>
                                   <div class="product-price">
                                       <span>$150.00</span>
                                       <del>$180.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/6.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/7.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                   <div class="product-price">
                                       <span>$150.00</span>
                                       <del>$180.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/11.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!--  -->
                   </div>
               </div>
           </div>
           <div class="tab-pane fade" id="liton_tab_3_4">
               <div class="ltn__product-tab-content-inner">
                   <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/3.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/5.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                   <div class="product-price">
                                       <span>$78.00</span>
                                       <del>$85.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/2.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/16.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                   <div class="product-price">
                                       <span>$150.00</span>
                                       <del>$180.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/6.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                   <div class="product-price">
                                       <span>$75.00</span>
                                       <del>$92.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/14.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/14.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                   <div class="product-price">
                                       <span>$78.00</span>
                                       <del>$85.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/10.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                   <div class="product-price">
                                       <span>$75.00</span>
                                       <del>$92.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/15.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Fresh Butter Cake</a></h2>
                                   <div class="product-price">
                                       <span>$150.00</span>
                                       <del>$180.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/6.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/7.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                   <div class="product-price">
                                       <span>$150.00</span>
                                       <del>$180.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/11.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!--  -->
                   </div>
               </div>
           </div>
           <div class="tab-pane fade" id="liton_tab_3_5">
               <div class="ltn__product-tab-content-inner">
                   <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/7.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/13.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                   <div class="product-price">
                                       <span>$78.00</span>
                                       <del>$85.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/5.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/15.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                   <div class="product-price">
                                       <span>$150.00</span>
                                       <del>$180.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/9.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                   <div class="product-price">
                                       <span>$75.00</span>
                                       <del>$92.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/14.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/12.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                   <div class="product-price">
                                       <span>$78.00</span>
                                       <del>$85.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/10.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                   <div class="product-price">
                                       <span>$75.00</span>
                                       <del>$92.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/15.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Fresh Butter Cake</a></h2>
                                   <div class="product-price">
                                       <span>$150.00</span>
                                       <del>$180.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/6.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ltn__product-item -->
                       <div class="col-lg-12">
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/7.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">New</li>
                                       </ul>
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
                                   <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                   <div class="product-price">
                                       <span>$150.00</span>
                                       <del>$180.00</del>
                                   </div>
                               </div>
                           </div>
                           <div class="ltn__product-item ltn__product-item-3 text-center">
                               <div class="product-img">
                                   <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/11.png" alt="#"></a>
                                   <div class="product-badge">
                                       <ul>
                                           <li class="sale-badge">-19%</li>
                                       </ul>
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
                               <div class="product-info">
                                   <div class="product-ratting">
                                       <ul>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                           <li><a href="#"><i class="far fa-star"></i></a></li>
                                           <li class="review-total"> <a href="#"> (24)</a></li>
                                       </ul>
                                   </div>
                                   <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                   <div class="product-price">
                                       <span>$32.00</span>
                                       <del>$46.00</del>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!--  -->
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
@section('content2')
<div class="row">
   <div class="col-lg-12">
       <div class="section-title-area ltn__section-title-2 text-center">
           <h1 class="section-title">Featured Products</h1>
       </div>
   </div>
</div>
<div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
   <!-- ltn__product-item -->
   <div class="col-lg-3 col-md-4 col-sm-6 col-6">
       <div class="ltn__product-item ltn__product-item-3 text-left">
           <div class="product-img">
               <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/1.png" alt="#"></a>
               <div class="product-badge">
                   <ul>
                       <li class="sale-badge">New</li>
                   </ul>
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
               <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
               <div class="product-price">
                   <span>$32.00</span>
                   <del>$46.00</del>
               </div>
           </div>
       </div>
   </div>
   <!-- ltn__product-item -->
   <div class="col-lg-3 col-md-4 col-sm-6 col-6">
       <div class="ltn__product-item ltn__product-item-3 text-left">
           <div class="product-img">
               <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/2.png" alt="#"></a>
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
               <h2 class="product-title"><a href="product-details.html">Red Hot Tomato</a></h2>
               <div class="product-price">
                   <span>$25.00</span>
                   <del>$35.00</del>
               </div>
           </div>
       </div>
   </div>
   <!-- ltn__product-item -->
   <div class="col-lg-3 col-md-4 col-sm-6 col-6">
       <div class="ltn__product-item ltn__product-item-3 text-center">
           <div class="product-img">
               <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/3.png" alt="#"></a>
               <div class="product-badge">
                   <ul>
                       <li class="sale-badge">New</li>
                   </ul>
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
               <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
               <div class="product-price">
                   <span>$75.00</span>
                   <del>$92.00</del>
               </div>
           </div>
       </div>
   </div>
   <!-- ltn__product-item -->
   <div class="col-lg-3 col-md-4 col-sm-6 col-6">
       <div class="ltn__product-item ltn__product-item-3 text-center">
           <div class="product-img">
               <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/4.png" alt="#"></a>
               <div class="product-badge">
                   <ul>
                       <li class="sale-badge">New</li>
                   </ul>
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
               <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
               <div class="product-price">
                   <span>$78.00</span>
                   <del>$85.00</del>
               </div>
           </div>
       </div>
   </div>
   <!-- ltn__product-item -->
   <div class="col-lg-3 col-md-4 col-sm-6 col-6">
       <div class="ltn__product-item ltn__product-item-3 text-center">
           <div class="product-img">
               <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/5.png" alt="#"></a>
               <div class="product-badge">
                   <ul>
                       <li class="sale-badge">New</li>
                   </ul>
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
               <h2 class="product-title"><a href="product-details.html">Fresh Butter Cake</a></h2>
               <div class="product-price">
                   <span>$150.00</span>
                   <del>$180.00</del>
               </div>
           </div>
       </div>
   </div>
   <!-- ltn__product-item -->
   <div class="col-lg-3 col-md-4 col-sm-6 col-6">
       <div class="ltn__product-item ltn__product-item-3 text-center">
           <div class="product-img">
               <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/6.png" alt="#"></a>
               <div class="product-badge">
                   <ul>
                       <li class="sale-badge">New</li>
                   </ul>
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
               <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
               <div class="product-price">
                   <span>$150.00</span>
                   <del>$180.00</del>
               </div>
           </div>
       </div>
   </div>
   <!-- ltn__product-item -->
   <div class="col-lg-3 col-md-4 col-sm-6 col-6">
       <div class="ltn__product-item ltn__product-item-3 text-center">
           <div class="product-img">
               <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/7.png" alt="#"></a>
               <div class="product-badge">
                   <ul>
                       <li class="sale-badge">New</li>
                   </ul>
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
               <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
               <div class="product-price">
                   <span>$75.00</span>
                   <del>$92.00</del>
               </div>
           </div>
       </div>
   </div>
   <!-- ltn__product-item -->
   <div class="col-lg-3 col-md-4 col-sm-6 col-6">
       <div class="ltn__product-item ltn__product-item-3 text-center">
           <div class="product-img">
               <a href="product-details.html"><img src="{{asset('assets/clients')}}/img/product/8.png" alt="#"></a>
               <div class="product-badge">
                   <ul>
                       <li class="sale-badge">New</li>
                   </ul>
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
               <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
               <div class="product-price">
                   <span>$78.00</span>
                   <del>$85.00</del>
               </div>
           </div>
       </div>
   </div>
   <!--  -->
</div>

@section('showsl')
    @foreach ($dataSlider as $item)
            <div class="ltn__slide-item ">
        <div class="ltn__slide-item-inner">
            <div class="container">
                <div class="row">
                        <div class="slide-item-img">
                            <img class="d-block w-100" src="{{Storage::url($item->hinh_anh)}}" alt="#">
                        </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection


