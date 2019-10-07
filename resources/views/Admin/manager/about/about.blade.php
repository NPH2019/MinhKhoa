@extends('Admin.AdminMaster')
@section('title', '- THÔNG TIN')
@section('content')
<h2 class="bash">
    <a href="{{route('manager')}}" style="text-decoration: none">Quản lý </a> <span class="lv2">Thông tin</span></a>
</h2>
<div class="title">Thông tin cửa hàng</div>
<div class="center" style="padding-top: 50px;padding-bottom: 50px">
    @foreach($name as $n)
        <div class="about">
            <table style="border-bottom: #7b8fa3 2px solid; border-top: #7b8fa3 2px solid; margin: 0 auto">
                <tr>
                    <th><h4>Tên cửa hàng:</h4></th>
                    <th><h4>{{$n->name_store}}</h4></th>
                </tr>
                <tr>
                    <th><h4>SĐT:</h4></th>
                    <th><h4>{{$n->phone}}</h4></th>
                </tr>
                <tr>
                    <th><h4>Email:</h4></th>
                    <th><h4>{{$n->email}}</h4></th>
                </tr>
                <tr>
                    <th><h4>Địa chỉ:</h4></th>
                    <th><h4>{{$n->address}}</h4></th>
                </tr>
            </table>
            <a href="{{route('UpdataAbout',$n->id)}}" style="text-decoration: none;">
                <button class="btn btn-primary" style="margin-top: 15px">
                    <b>Thay đổi</b>
                </button>
            </a>
        </div>
        
    @endforeach
</div>
@endsection
