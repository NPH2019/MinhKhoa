@extends('Admin/AdminMaster')
@section('title', '- GIỚI THIỆU')
@section('content')
    <h2 class="bash">
        <a href="{{route('manager')}}" style="text-decoration: none">Quản lý</a> <span class="lv2">Giới thiệu </span>
    </h2>
    <div class="title">Giới thiệu cửa hàng</div><br>
    <div class="tables_product">
        <table>
            @foreach($about as $n)
                <tr style="border-bottom: #7b8fa3 solid 2px">
                    <th style="width: 100px">Tiêu đề</th>
                    <td style="text-align: center">{{$n->title}}</td>
                </tr>
                <tr style="border-bottom: #7b8fa3 solid 2px">
                    <th>Mở đầu</th>
                    <td class="content2" style="text-align: center">{!!$n->premise!!}</td>
                </tr>
                <tr style="border-bottom: #7b8fa3 solid 2px">
                    <th>Nội dung</th>
                    <td class="content2" style="text-align: center">{!!$n->content!!}</td>
                </tr>
                <tr>
                    <th></th>
                    <th style="text-align: center">
                        <a href="{{route('edit_index_about', $n->id)}}" style="text-decoration: none;">
                            <button class="btn btn-primary">
                                <b>Thay đổi</b>
                            </button>
                        </a>
                    </th>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
