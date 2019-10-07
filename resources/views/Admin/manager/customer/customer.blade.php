@extends('Admin.AdminMaster')
@section('title', '- KHÁCH HÀNG')
@section('content')
    <h2 class="bash">
        <a href="{{route('manager')}}" style="text-decoration: none">Quản lý</a> <span class="lv2" >Khách hàng</span>
    </h2>
        <div class="title">Tin từ khách hàng</div>
    <div class="space20">&nbsp;</div>
    <div  class="notification">
        @if(Session::has('succeed'))
            <div class="alert alert-success">{{Session::get('succeed')}}</div>
        @endif
    </div>
        <div class="tables_product">
            <table>
                <tr style="border-bottom: #7b8fa3 solid 2px">
                    <th>STT</th>
                    <th>Tên khách hàng </th>
                    <th>Email</th>
                    <th>Địa chỉ </th>
                    <th>Số điện thoại </th>
                    <th>Lời nhắn</th>
                    <th>Tùy chọn</th>
                </tr>
                @foreach($customer as $cus)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$cus->name}}</td>
                        <td>{{$cus->email}}</td>
                        <td>{{$cus->address}}</td>
                        <td>{{$cus->phone_number}}</td>
                        <td class="content2">{!! $cus->note !!}</td>
                        <td>
                            <a href="{{route('View',$cus->id)}}">
                                <img src="{{URL::asset('sources/admin/image/icons8-view-30.png')}}" class="icon">
                            </a>
                            <a href="{{route('DeletecCus',$cus->id)}}">
                                <img src="{{URL::asset('sources/admin/image/icons8-cancel-30.png')}}" class="icon">
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
@endsection
