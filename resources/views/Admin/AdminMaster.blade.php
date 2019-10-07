<!DOCTYPE html>
<html lang="vn">
<head>
  <meta charset="utf-8">
  <title>MINH KHOA @yield('title')</title>
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cerulean/bootstrap.min.css" rel='stylesheet' type='text/css'>
  <link href="{{URL::asset('sources/admin/dashboard/adminview.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('sources/admin/dashboard/add_product.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('sources/admin/dashboard/service.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('sources/admin/dashboard/UpdataAbout.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<!--star menu left-->
<div class="header">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('admin')}}"><h3>QUẢN LÝ</h3></a>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('index')}}"><h5>Về trang chủ</h5></a>
        </li>
      </ul>
    </div>
    <div class="container">
      @if (Auth::check())
        <div>
        </div>
        <div class="pull-right" style="margin-top: 3px;">
          @if( Auth::user()->full_name)
           <span style="color:white ">{{Auth::user()->full_name}}</span>
          @endif
          <a class="btn btn-primary" href="{{route('logout') }}">Đăng xuất</a></div>
      @endif
    </div>
  </nav>
</div>
<style>
  .menu_left2{
    margin-top: 2px;
  }
  .menu_left2 li
  {
    display: none;
    float: left;
    width: 100%;
    margin-left: 20px;
    padding: 5px 0 5px 0;
  }
  .menu_left:hover .menu_left2 li
  {
    display: inline;
    border-radius: 5px;
    -webkit-transition:-webkit-transform 1s, background 0.5s, margin-left 0.5s, height 0.5s, margin-bottom 0.5s;
    transition:  background 0.5s, margin-left 0.5s, height 0.5s,margin-bottom 0.5s;
  }

  .menu_left2 img
  {
    width: 30px;
    margin: 5px 5px 5px 20px;
  }

</style>
<div class="menu">
  <div class="card text-white bg-info mb-3">
    <img src="{{URL::asset('sources/assets/dest/images/MINH KHOA-2.png')}}">
    <div class="card-header"><h1 style="text-align: center">MINH KHOA</h1></div>
    <div class="card-body">
      <div class="dashboard">
        <a href="{{route('admin')}}">
        <li class="blue_">
            <img src="{{URL::asset('sources/admin/image/icons8-dashboard-64.png')}}" style="margin-left: 0; width: 30px; margin-bottom: 10px; margin-right: 5px">Dashboard
        </li>
        </a>
        <ul>
          <a href="{{route('manager')}}">
          <li class="menu_left blue_">
              <img src="{{URL::asset('sources/admin/image/icons8-networking-manager-30.png')}}" style="margin-left: 0; width: 30px; margin-bottom: 10px; margin-right: 5px">Quản lý
            </a>
            <ul class="menu_left2 ">
              <a href="{{route('product')}}">
                <li><img src="{{URL::asset('sources/admin/image/product.png')}}">Sản phẩm</li>
              </a>
              <a href="{{route('service')}}">
                <li><img src="{{URL::asset('sources/admin/image/icons8-service-100.png')}}">Dịch vụ</li>
              </a>
              <a href="{{route('customer')}}">
                <li><img src="{{URL::asset('sources/admin/image/icons8-customer-100.png')}}">Khách hàng</li>
              </a>
              <a href="{{route('banner')}}">
               <li><img src="{{URL::asset('sources/admin/image/icons8-remove-tag-100.png')}}">Banner</li>   </a>
              <a href="{{route('about')}}">
                <li><img src="{{URL::asset('sources/admin/image/icons8-info-100.png')}}">Liên hệ</li>
              </a>
              <a href="{{route('index_about')}}">
                <li><img src="{{URL::asset('sources/admin/image/icons8-about-100.png')}}">Giới thiệu</li>
              </a>
            </ul>
          </li>
        </ul>
        <a href="{{route('User')}}">
        <li class="menu_left blue_">
            <img src="{{URL::asset('sources/admin/image/icons8-male-user-30.png')}}" style="margin-left: 0; width: 30px; margin-bottom: 10px; margin-right: 5px">Tài khoản
        </li>
        </a>
      </div>
    </div>
  </div>
</div>
<!--end menu left-->
<div class="main">
  <div class="body">
    @yield('content')
  </div>
</div>
<div class="footer">
</div>
</body>

<script src="/sources/ckeditor/ckeditor.js"></script>
</html>
