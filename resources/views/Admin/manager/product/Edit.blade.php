@extends('Admin.AdminMaster')
@section('title', '- SỬA SẢN PHẨM')
@section('content')
    <h2 class="bash">
        <a href="{{route('manager')}}" style="text-decoration: none">Quản lý</a>
        <a href="{{route('product')}}" style="text-decoration: none" ><span class="lv2">Sản phẩm</span></a>
    </h2>
    <div class="title">Sửa thông tin sản phẩm</div>
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
    <div class="add">
        <form method="post" action="{{route('Edit',$data->id)}}" enctype="multipart/form-data" class="form">
            @csrf
            <table>
                <tr>
                    <th><h3 for="name">Tên sản phẩm</h3></th>
                    <th><input type="text" name="txtname" required value="{{old('txtname', isset($data) ? $data['name'] : null)}}"></th>
                </tr>
                <tr>
                    <th><h3 for="id_type">Mã sản phẩm</h3></th>
                    <th><input type="text" name="txtcode" required value="{{old('txtcode', isset($data) ? $data['code'] : null)}}"></th>
                </tr>
                <tr>
                    <th><h3 for="image">Ảnh sản phẩm</h3></th>
                    <th><input type="file" name="image" id="image" required></th>
                </tr>
                <tr>
                    <th><h3 for="description">Thông tin</h3></th>
                    <th><textarea type="text" name="description" class ="ckeditor" required style="width: 300px; height: 100px">{{old('description', isset($data) ? $data['description'] : null)}}</textarea></th>
                </tr>
                <tr>
                    <th><h3 for="unit_price">Giá bán</h3></th>
                    <th><input type="text" name="unit_price" required value="{{old('unit_price', isset($data) ? $data['unit_price'] : null)}}"></th>
                </tr>
                <tr>
                    <th></th>
                    <th><button type="submit" class="btn btn-primary" style="padding-left: 46%; padding-right: 46%"><b>Sửa</b></button></th>
                </tr>
            </table>
        </form>
    </div>
@endsection
