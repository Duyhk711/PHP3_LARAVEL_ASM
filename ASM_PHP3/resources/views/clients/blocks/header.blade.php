     <div class="container">
         <nav class="navbar navbar-expand-lg navbar-white">
             <a class="navbar-brand order-1" href="index.html">
                 <img class="img-fluid" width="100px" src="{{ asset('assets/clients') }}/images/logo.png" alt="Reader | Hugo Personal Blog Template">
             </a>
             <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
                 <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Trang Chủ </a>
                    </li>

                     <li class="nav-item dropdown">
                         <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                             aria-expanded="false">
                             Giới Thiệu <i class="ti-angle-down ml-1"></i>
                         </a>
                         <div class="dropdown-menu">

                             <a class="dropdown-item" href="about-me.html">About Me</a>

                             <a class="dropdown-item" href="about-us.html">About Us</a>

                         </div>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link" href="contact.html">Tin tức</a>
                     </li>

                     <li class="nav-item dropdown">
                         <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                             aria-expanded="false">Shop<i class="ti-angle-down ml-1"></i>
                         </a>
                         <div class="dropdown-menu">

                             <a class="dropdown-item" href="author.html">Bánh Kem</a>

                             <a class="dropdown-item" href="author-single.html">Đồ Ăn Nhanh</a>

                             <a class="dropdown-item" href="advertise.html">Đồ Uống</a>

                             <a class="dropdown-item" href="post-details.html">Đồ Chiên</a>
                         </div>
                     </li>

                     <li class="nav-item">
                        
                         <a class="nav-link" href="shop.html">Liên Hệ</a>
                     </li>
                 </ul>
             </div>

             <div class="order-2 order-lg-3 d-flex align-items-center">
                 <select class="m-2 border-0 bg-transparent" id="select-language">
                     <option id="en" value="" selected>En</option>
                     <option id="fr" value="">Fr</option>
                 </select>

                 <!-- search -->
                 <form class="search-bar">
                     <input id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
                 </form>

                 <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse"
                     data-target="#navigation">
                     <i class="ti-menu"></i>
                 </button>
             </div>

         </nav>
     </div>
