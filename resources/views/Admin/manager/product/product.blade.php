@extends('Admin.AdminMaster')
@section('title', '- SẢN PHẨM')
@section('content')
<h2 class="bash">
    <a href="{{route('manager')}}" style="text-decoration: none">Quản lý</a> <span class="lv2">Sản phẩm</span>
    <a href="{{route('add_product')}}" style="float: right; margin-right: 20px"><img src="{{URL::asset('sources/admin/image/icons8-plus-40.png')}}" class="icon"></a>
</h2>
<div class="title">Danh sách sản phẩm</div>

@if(Session::has('succeed'))
    <div class="alert alert-success">{{Session::get('succeed')}}</div>
@endif
<br>
<div class="tables_product">
    <table>
        <tr style="border-bottom: #7b8fa3 solid 2px">
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Mã sản phẩm</th>
            <th>Thông tin</th>
            <th>Ảnh</th>
            <th>Giá bán</th>
            <th>Tùy chọn</th>
        </tr>
        @foreach($product as $pro)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$pro->name}}</td>
                <td>{{$pro->code}}</td>
                <td class="content2" style="width: 300px">{!!$pro->description!!}</td>
                <td><img src="sources/dashboard/image/product/{{$pro->image}}" alt="" height="50px" width="50px"></td>
                <td>{{number_format($pro->unit_price)}}đ/1 cái</td>
                <td><a href="{{route('Edit',$pro->id)}}"><img src="{{URL::asset('sources/admin/image/icons8-wrench-30.png')}}" class="icon"></a>
                    <a href="{{route('Delete',$pro->id)}}"><img src="{{URL::asset('sources/admin/image/icons8-cancel-30.png')}}" class="icon"></a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
