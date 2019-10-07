@extends('Admin/AdminMaster')
@section('title', '- DASHBOARD')
@section('content')
<h2 class="bash">Dashboard</h2>
    <div class="form_product">
        <div class="statistical_das">{{count($all_product)}}</div>
        <h4>SẢN PHẨM CỬA HÀNG</h4>
    </div>

    <div class="form_product">
        <div class="statistical_das">{{count($cus)}}</div>
        <h4>TIN TỪ KHÁCH HÀNG </h4>
    </div>

    <div class="form_product">
        <div class="statistical_das">{{count($service)}}</div>
        <h4>DỊCH VỤ CỬA HÀNG </h4>
    </div>
@endsection
