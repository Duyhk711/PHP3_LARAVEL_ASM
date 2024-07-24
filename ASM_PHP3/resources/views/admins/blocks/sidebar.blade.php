<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
 <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
      <img src="{{asset('assets/admins/img/logo-food-removebg-preview.png')}}" class="navbar-brand-img h-150 w-120 mb-2"  alt="main_logo">
      <span class="ms-2  fw-bold fs-4">Manager</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="{{route('dashboard')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('danhmuc.index')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Danh Mục</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('sanpham.index')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <img src="{{asset('assets/admins/img/menu-icon/product.svg')}}" alt="" srcset="">
          </div>
          <span class="nav-link-text ms-1">Sản Phẩm</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('donhang.index')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-app text-info text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Đơn hàng</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('user.index')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Tài Khoản</span>
        </a>
      </li>
      
    </ul>
  </div>
  
</aside>

