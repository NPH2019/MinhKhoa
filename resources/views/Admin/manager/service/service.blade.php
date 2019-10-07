@extends('Admin.AdminMaster')
@section('title', '- DỊCH VỤ')
@section('content')
<h2 class="bash">
    <a href="{{route('manager')}}" style="text-decoration: none">Quản lý</a> <span class="lv2">Dịch vụ</span>
    <a href="{{route('add_service')}}" style="float: right; margin-right: 20px"><img src="{{URL::asset('sources/admin/image/icons8-plus-40.png')}}" class="icon"></a>
</h2>
@if(Session::has('succeed'))
    <div class="alert alert-success">{{Session::get('succeed')}}</div>
@endif
<div class="title">Danh sách dịch vụ</div>
<div class="list">
    <table style="width: 100%; border-bottom: solid 2px #7b8fa3; border-top: solid 2px #7b8fa3">
        <tr style="border-bottom: #7b8fa3 solid 2px">
            <th style="text-align: center">STT</th>
            <th>Tên dịch vụ</th>
            <th>Mã dịch vụ</th>
            <th width="20%">Ảnh thu nhỏ</th>
            <th>Mô tả</th>
            <th style="text-align: center">Tùy chọn</th>
        </tr>
        @foreach($list_service as $list)
            <tr>
                <td style="text-align: center">{{++$i}}</td>
                <td>{{$list->service_name}}</td>
                <td>{{$list->service_code}}</td>
                <td><img src="sources/dashboard/image/service/{{$list->image}}" width="50px"></td>
                <td  class="content2" style="width: 200px">{!!$list->service_description!!}</td>
                <td style="text-align: center">
                    <a href="{{route('Edit_service',$list->id)}}"><img src="{{URL::asset('sources/admin/image/icons8-wrench-30.png')}}" class="icon"></a>
                    <a href="{{route('Delete_service',$list->id)}}"><img src="{{URL::asset('sources/admin/image/icons8-cancel-30.png')}}" class="icon"></a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
