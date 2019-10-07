@extends('Admin.AdminMaster')
@section('title', '- THÊM BANNER')
@section('content')
    <h2 class="bash">
        <a href="{{route('manager')}}" style="text-decoration: none">Quản lý</a>
        <a href="{{route('banner')}}" style="text-decoration: none" ><span class="lv2">banner</span></a>
    </h2>
    <div  class="notification">
        @if(Session::has('thanhcong'))
            <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
        @endif
    </div>
    <div class="title">Thêm banner mới</div>
    <div class="add">
        <form method="post" action="{{route('add_banner')}}" enctype="multipart/form-data" class="form">
            @if ($errors->any())
                <ul class="error-form">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            @csrf
            <table>
                <tr>
                    <th colspan="2"><h4 for="name">Kích thước hình ảnh khuyến nghị lớn hơn 800 × 300</h4></th>

                </tr>
                <tr>
                    <th><h3 for="image">Chọn ảnh</h3></th>
                    <th><input type="file" name="image" id="image"></th>
                </tr>
                <tr>
                    <th></th>
                    <th><button type="submit" class="btn btn-primary" style="padding-left: 43%; padding-right: 42%"><b>Thêm</b></button></th>
                </tr>
            </table>
        </form>
    </div>
@endsection
