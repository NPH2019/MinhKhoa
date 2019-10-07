@extends('Admin.AdminMaster')
@section('content')
    <h2 class="bash">
        <a href="{{route('manager')}}" style="text-decoration: none">Quản lý</a> <a href="{{route('service')}}" style="text-decoration: none" ><span class="lv2">Dịch vụ</span></a>
    </h2>
    <div  class="notification">
        @if(Session::has('thanhcong'))
            <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
        @endif
            @if ($errors->any())
                <div class="error-form">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-dark" style="color: red">{{ $error }}</div>
                    @endforeach
                </div>
            @endif
    </div>
    <div class="title">Thêm dịch vụ</div>
    <div class="add">
        <form method="post" action="{{route('add_service')}}" enctype="multipart/form-data" class="form">

            @csrf
            <table>
                <tr>
                    <th><h3 for="service_name">Tên dịch vụ</h3></th>
                    <th><input type="text" name="service_name" required></th>
                </tr>
                <tr>
                    <th><h3 for="service_code">Mã dịch vụ</h3></th>
                    <th><input type="text" name="service_code" required></th>
                </tr>
                <tr>
                    <th><h3 for="image">Thêm ảnh</h3></th>
                    <th><input type="file" name="image" required></th>
                </tr>
                <tr>
                    <th><h3 for="service_description">Thông tin</h3></th>
                    <th><textarea type="text" name="service_description" class="ckeditor" required style="width: 300px; height: 100px"></textarea></th>
                </tr>
                <tr>
                    <th></th>
                    <th><button type="submit" class="btn btn-primary" style="padding-left: 46%; padding-right: 46%"><b>Thêm</b></button></th>
                </tr>
            </table>
        </form>
    </div>
@endsection
