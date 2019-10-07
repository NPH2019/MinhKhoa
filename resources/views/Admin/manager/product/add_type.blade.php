@extends('Admin.AdminMaster')
@section('title', '- THÊM LOẠI SẢN PHẨM')
@section('content')
    <h2 class="bash">
        <a href="{{route('manager')}}" style="text-decoration: none">Quản lý</a> <span class="lv2">
    <a href="{{route('product')}}" style="text-decoration: none; color: gray" >Sản phẩm</a> </span>
    </h2>
    <div  class="notification">
        @if ($errors->any())
            <div class="error-form">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-dark" style="color: red">{{ $error }}</div>
                @endforeach
            </div>
        @endif
        @if(Session::has('thanhcong'))
            <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
        @endif
        @if(Session::has('succeed'))
            <div class="alert alert-success">{{Session::get('succeed')}}</div>
        @endif
    </div>
    <div class="title">Thêm loại sản phẩm mới</div>
    <div class="add">
        <form method="post" action="{{route('add_type')}}" enctype="multipart/form-data" class="form">
            @csrf
            <table>
                <tr>
                    <th><h3 for="txtname">Tên loại</h3></th>
                    <th><input type="text" name="txtname" required></th>
                </tr>
                <tr>
                    <th></th>
                    <th><button type="submit" class="btn btn-primary" style="padding-left: 43%; padding-right: 42%"><b>Thêm</b></button></th>
                </tr>
            </table>
        </form>
    </div>
    <div class="tables_product">
        <table>
            <tr style="border-bottom: #7b8fa3 solid 2px">
                <th>STT</th>
                <th>Tên loại</th>
                <th style="text-align: center">Tùy chọn</th>
            </tr>
            @foreach($product_type as $type)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$type->name_type}}</td>
                    <td style="text-align: center">
                        <a href="{{route('DeleteType',$type->id)}}"><img src="{{URL::asset('sources/admin/image/icons8-cancel-30.png')}}" class="icon"></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
