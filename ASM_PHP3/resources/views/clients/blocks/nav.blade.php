<div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white ltn__logo-right-menu-option sticky-active-into-mobile--- plr--9---">
     <div class="container">
         <div class="row">
             <div class="col">
                 <div class="site-logo-wrap">
                     <div class="site-logo">
                         <a href="index.html"><img src="{{asset('assets/clients')}}/img/logo.png" alt="Logo"></a>
                     </div>
                 </div>
             </div>
             <div class="col header-menu-column menu-color-white---">
                 <div class="header-menu d-none d-xl-block">
                     <nav>
                         <div class="ltn__main-menu">
                             <ul>
                                 <li class="menu-icon"><a href="#">Home</a>
                                   
                                 </li>
                                 <li class="menu-icon"><a href="#">Giới Thiệu</a>
                                     <ul>
                                         <li><a href="shop.html">Giới thiệu</a></li>
                                         <li><a href="shop-grid.html">Địa chỉ</a></li>
                                         
                                     </ul>
                                 </li>
                                 <li class="menu-icon"><a href="{{route('shop')}}">Shop</a>
                                     <ul>
                                         <li><a href="{{route('shop')}}">Shop</a></li>
                                         
                                         @foreach ($danhmucs as $item)
                                         <li><a href="{{route('shop.danhmuc',$item->id)}}">{{$item->ten_danh_muc}}</a></li>
                                         @endforeach
                                     </ul>
                                 </li>
                                 <li class="menu-icon"><a href="#">Tin Tức</a>
                                    
                                 </li>
                                 <li class="menu-icon"><a href="#">Pages</a>
                                 </li>
                                 <li><a href="contact.html">Liên Hệ</a></li>
                                 <li class="special-link"><a href="contact.html">GET A QUOTE</a></li>
                             </ul>
                         </div>
                     </nav>
                 </div>
             </div>
             <div class="ltn__header-options ltn__header-options-2">
                 <!-- header-search-1 -->
                 <div class="header-search-wrap">
                     <div class="header-search-1">
                         <div class="search-icon">
                             <i class="icon-search for-search-show"></i>
                             <i class="icon-cancel  for-search-close"></i>
                         </div>
                     </div>
                     <div class="header-search-1-form">
                         <form id="#" method="get"  action="#">
                             <input type="text" name="search" value="" placeholder="Search here..."/>
                             <button type="submit">
                                 <span><i class="icon-search"></i></span>
                             </button>
                         </form>
                     </div>
                 </div>
                 <!-- user-menu -->
                 <div class="ltn__drop-menu user-menu">
                     <ul>
                         <li>
                             <a href="#"><i class="icon-user"></i></a>
                             <ul>
                                 <li><a href="login.html">Sign in</a></li>
                                 <li><a href="register.html">Register</a></li>
                                 <li><a href="account.html">My Account</a></li>
                                 <li><a href="wishlist.html">Wishlist</a></li>
                             </ul>
                         </li>
                     </ul>
                 </div>
                 <!-- mini-cart -->
                 <div class="mini-cart-icon">
                     <a href="{{route('shop.cart')}}" class="ltn__utilize-toggle">
                         <i class="icon-shopping-cart"></i>
                         <sup>2</sup>
                     </a>
                 </div>
                 <!-- mini-cart -->
                 <!-- Mobile Menu Button -->
                 <div class="mobile-menu-toggle d-xl-none">
                     <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                         <svg viewBox="0 0 800 600">
                             <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                             <path d="M300,320 L540,320" id="middle"></path>
                             <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                         </svg>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </div>