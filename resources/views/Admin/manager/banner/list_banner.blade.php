@extends('Admin/AdminMaster')
@section('title', '- DANH SÁCH BANNER')
@section('content')
    <h2 class="bash">
        <a href="{{route('manager')}}" style="text-decoration: none">Quản lý</a> <span class="lv2">banner</span>
        <a href="{{route('add_banner')}}" style="float: right; margin-right: 20px"><img src="sources/admin/image/icons8-plus-40.png" class="icon"></a>
    </h2>
    <div class="title">Danh sách banner</div><br>
    <div class="tables_product">
        <table>
            <tr style="border-bottom: #7b8fa3 solid 2px">
                <th>STT</th>
                <th style="text-align: center">Ảnh thu nhỏ</th>
                <th style="text-align: center">Xoá</th>
            </tr>
            @foreach($list_banner as $ban)
                <tr>
                    <td>{{++$i}}</td>
                    <td style="text-align: center"><img src="sources/image/slide/{{$ban->image}}" alt="" height="50px" width="100px"></td>
                    <td style="text-align: center"><a href="{{route('DeleteBanner',$ban->id)}}"><img src="sources/admin/image/icons8-cancel-30.png" class="icon"></a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
