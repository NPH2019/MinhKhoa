@extends('Admin.AdminMaster')
@section('title', '- SỬA THÔNG TIN')
@section('content')
    <h2 class="bash">
        <a href="{{route('manager')}}" style="text-decoration: none">Quản lý</a>
        <a href="{{route('about')}}" style="text-decoration: none" ><span class="lv2">Thông tin</span></a>
    </h2>
    <div class="title">Sửa thông tin cửa hàng</div>
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
        <form method="post" action="{{route('UpdataAbout',$edit->id)}}" class="form">
            @csrf
            <table>
                <tr>
                    <th><h3 for="name_store">Tên cửa hàng</h3></th>
                    <th style="width: 400px"><input type="text" name="name_store" required value="{{old('name_store', isset($edit) ? $edit['name_store'] : null)}}"></th>
                </tr>
                <tr>
                    <th><h3 for="address">Địa chỉ</h3></th>
                    <th><input type="text" name="address" id="address" required value="{{old('address', isset($edit) ? $edit['address'] : null)}}"></th>
                </tr>
                <tr>
                    <th><h3 for="email">Email</h3></th>
                    <th><input type="text" name="email" id="email" required value="{{old('email', isset($edit) ? $edit['email'] : null)}}"></th>
                </tr>
                <tr>
                    <th><h3 for="phone">SĐT</h3></th>
                    <th><input type="text" name="phone" id="phone" required value="{{old('phone', isset($edit) ? $edit['phone'] : null)}}"></th>
                </tr>
                <tr>
                    <th></th>
                    <th style="text-align: center;">
                        <button type="submit" class="btn btn-primary" style="padding-left: 10%; padding-right: 10%"><b>Sửa</b></button>
                    </th>
                </tr>
            </table>
        </form>
    </div>
@endsection
