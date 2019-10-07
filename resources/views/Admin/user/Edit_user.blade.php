@extends('Admin.AdminMaster')
@section('title', '- SỬA THÔNG TIN USER')
@section('content')
    <h2 class="bash">
        <a href="{{route('manager')}}" style="text-decoration: none">Quản lý</a>
        <a href="{{route('User')}}" style="text-decoration: none" ><span class="lv2">Thông tin</span></a>
    </h2>
    <div class="title">Sửa thông tin tài khoản</div>
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
    <div class="form_body">
        <div class="add">
            <form method="post" action="{{route('Edit_user',$edit->id)}}" class="form">
                @csrf
                <table>
                    <tr>
                        <th><h3 for="name_store">Tên tài khoản</h3></th>
                        <th style="width: 400px"><input type="text" name="full_name" required value="{{old('full_name', isset($edit) ? $edit['full_name'] : null)}}"></th>
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
                        <th colspan="2">
                            <button type="submit" class="btn btn-primary" style="padding-left: 10%; padding-right: 10%; margin-left: 35%;"><b>Thay đổi</b></button>
                        </th>
                    </tr>
                </table>
            </form>
        </div>
        <!--<span class="avatar">
            <img src="{{$edit->avatar}}" width="150" height="150" style="margin-bottom: 20px">
        </span>
    -->
    </div>
@endsection
