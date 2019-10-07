@extends('Admin/AdminMaster')
@section('title', '- QUẢN LÝ')
@section('content')
    <h2 class="bash">Quản lý</h2>
    <a href="{{route('product')}}">
        <div class="form_product">
            <h3>SẢN PHẨM</h3>
            <img src="sources/admin/image/product.png">
        </div>
    </a>
    <a href="{{route('service')}}">
        <div class="form_product">
            <h3>DỊCH VỤ </h3>
            <img src="sources/admin/image/icons8-service-100.png">
        </div>
    </a>
    <a href="{{route('customer')}}">
        <div class="form_product">
            <h3>TIN TỪ KHÁCH HÀNG</h3>
            <img src="sources/admin/image/icons8-chat-bubble-96.png">
        </div>
    </a>
    <a href="{{route('banner')}}">
        <div class="form_product">
            <h3>BANNER WEBSITE</h3>
            <img src="sources/admin/image/icons8-remove-tag-100.png">
        </div>
    </a>
    <a href="{{route('about')}}">
        <div class="form_product">
            <h3>THÔNG TIN CỬA HÀNG</h3>
            <img src="sources/admin/image/icons8-info-100.png">
        </div>
    </a>
    <a href="{{route('index_about')}}">
        <div class="form_product">
            <h3>GIỚI THIỆU CỬA HÀNG</h3>
            <img src="sources/admin/image/icons8-about-100.png">
        </div>
    </a>
@endsection
