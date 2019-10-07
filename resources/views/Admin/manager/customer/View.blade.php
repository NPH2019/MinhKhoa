@extends('Admin.AdminMaster')
@section('title', '- KHÁCH HÀNG')
@section('content')
    <h2 class="bash">
        <a href="{{route('manager')}}" style="text-decoration: none">Quản lý</a> <a href="{{route('customer')}}" style="text-decoration: none"><span class="lv2" >Khách hàng</span></a>
    </h2>
    <div class="title">Chi tiết</div>
    <div class="center">
        <div style="text-align: center">
                <h3>Người gửi: {{$customer->name}}</h3>
                <h6>Gửi từ email: {{$customer->email}}</h6>
                <h6>Địa chỉ: {{$customer->address}}</h6>
                <h6>SĐT: {{$customer->phone_number }}</h6>
                <h6>Lời nhắn: {{$customer->note}}</h6>

            <h4></h4>
        </div>
    </div>
    @endsection
