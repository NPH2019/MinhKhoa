@extends('master')
@section('title', '- CHI TIẾT DỊCH VỤ')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Dịch vụ</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="{{route('index')}}">Trang chủ</a> / <span>Dịch vụ </span> / <span>Chi tiết</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div class="col-sm-3">
            <ul class="aside-menu">
                <h4 style="text-align: center">DANH SÁCH</h4>
                @foreach($service as $ser)
                    <li><a href="{{route('Service_details', $ser->id)}}">{{$ser->service_name}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-sm-9">
            <div class="space60">&nbsp;</div>
            @foreach($service_details as $sd)
                <div class="title">
                    <h2 style="text-align: center">{{$sd->service_name}}</h2>
                </div>
                <div class="center"><img src="sources/dashboard/image/service/{{$sd->image}}"></div>
                <div>
                    {!!$sd->service_description!!}
                </div>
            @endforeach
        </div> <!-- #content -->
    </div> <!-- .container -->
    <style>
        .main-content{
            float: right;
            width: 62%;
        }
    </style>
@endsection
