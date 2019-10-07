@extends('Admin.AdminMaster')
@section('title', '- ĐỔI MẬT KHẨU')
@section('content')
    <h2 class="bash">
        <a href="{{route('User')}}" style="text-decoration: none">Tài khoản</a><span class="lv2" > Đổi mật khẩu</span>
    </h2>
    <div class="title">Đổi mật khẩu quản trị</div>
    <div class="center">
    </div>
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
            @if(Session::has('thatbai'))
            <div class="alert alert-success" style="background: grey">{{Session::get('thatbai')}}</div>
        @endif
    </div>
    <div class="form_body">
        <div class="add">
            <form method="post" action="{{route('Resetpw', $user->id)}}" class="form">
                @csrf
                <table>
                    <tr>
                        <th><h3 for="old_password">Mật khẩu mới</h3></th>
                        <th style="width: 400px"><input type="password" name="password" id="password" required></th>
                    </tr>
                    <tr>
                        <th><h3 for="password">Nhập lại mật khẩu</h3></th>
                        <th style="width: 400px"><input type="password" name="repassword" id="repassword" required></th>
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
@endsection
