@extends('Admin.AdminMaster')
@section('title', '- THÊM SẢN PHẨM')
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
</div>
<div class="title">Thêm sản phẩm mới</div>
<div class="add">
    <form method="post" action="{{route('add_product')}}" enctype="multipart/form-data" class="form">
        @csrf
        <table>
            <tr>
                <th style="width: 200px"><h3 for="txtname">Tên sản phẩm</h3></th>
                <th><input type="text" name="txtname" required></th>
            </tr>
            <tr>
                <th><h3 for="txtcode">Mã sản phẩm</h3></th>
                <th><input type="text" name="txtcode" required></th>
            </tr>
            <tr>
                <th><h3 for="image">Ảnh sản phẩm</h3></th>
                <th><input type="file" name="image" id="image"></th>
            </tr>
            <tr>
                <th><h3 for="id_type">Loại</h3></th>
                <th>
                    <select name="id_type" required style="float: left">
                        @foreach($product_type as $type)
                        <option value="{{$type->id}}">{{$type->name_type}}</option>
                        @endforeach
                    </select>
                    <a href="{{route('add_type')}}" style="float: left; margin-left: 10px;"><img src="{{URL::asset('sources/admin/image/icons8-plus-40.png')}}" style="width: 60%; margin-bottom: 3px" class="icon"></a>
                </th>
            </tr>
            <tr>
                <th><h3 for="description">Thông tin</h3></th>
                <th>
                    <textarea type="text" name="description"  class ="ckeditor" required></textarea>
                </th>
            </tr>
            <tr>
                <th><h3 for="unit_price">Giá bán</h3></th>
                <th><input type="text" name="unit_price" required></th>
            </tr>
            <tr>
                <th></th>
                <th><button type="submit" class="btn btn-primary" style="padding-left: 46%; padding-right: 46%"><b>Thêm</b></button></th>
            </tr>
        </table>
    </form>
</div>
@endsection
