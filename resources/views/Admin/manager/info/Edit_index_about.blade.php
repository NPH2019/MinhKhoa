@extends('Admin.AdminMaster')
@section('title', '- SỬA TRANG GIỚI THIỆU')
@section('content')
    <h2 class="bash">
        <a href="{{route('manager')}}" style="text-decoration: none">Quản lý</a>
        <a href="{{route('index_about')}}" style="text-decoration: none" ><span class="lv2">Giới thiệu</span></a>
    </h2>
    <div class="title">Sửa thông tin giới thiệu</div>
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
        <form method="post" action="{{route('edit_index_about',$news->id)}}" enctype="multipart/form-data" class="form">
            @csrf
            <table>
                <tr>
                    <th><h3 for="name">Tiêu đề </h3></th>
                    <th><input type="text" name="title" required value="{{old('title', isset($news) ? $news['title'] : null)}}"></th>
                </tr>
                <tr>
                    <th><h3 for="description">Mở đầu</h3></th>
                    <th><textarea type="text" name="premise" id="premise" class ="ckeditor" required style="width: 300px; height: 100px">{{old('premise', isset($news) ? $news['premise'] : null)}}</textarea></th>
                </tr>
                <tr>
                    <th><h3 for="description">Nội dung</h3></th>
                    <th><textarea type="text" name="txtcontent" id="txtcontent" class ="ckeditor" required style="width: 300px; height: 100px">{{old('txtcontent', isset($news) ? $news['content'] : null)}}</textarea></th>
                </tr>
                <tr>
                    <th></th>
                    <th><button type="submit" class="btn btn-primary" style="padding-left: 46%; padding-right: 46%"><b>Sửa</b></button></th>
                </tr>
            </table>
        </form>
    </div>


@endsection
