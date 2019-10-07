@extends('master')
@section('title', '- DỊCH VỤ')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Dịch vụ</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="{{route('index')}}">Trang chủ</a> / <span>Dịch vụ</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <div class="row">
                            @foreach($service as $ser)
                                <a href="{{route('Service_details', $ser->id)}}">
                                <div class="item-right2">
                                    <img src="sources/dashboard/image/service/{{$ser->image}}" width="150px" height="150px" style="padding: 10px; float: left">
                                    <h6 style="font-size: 18px;"><b>{{$ser->service_name}}</b></h6>
                                    <h5 class="content2" >{!! $ser->service_description !!}</h5>
                                </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .main-content -->
    </div> <!-- #content -->
    <style>
        .content2 p, .content2 li, .content2 strong, .content2 em
        {
            text-overflow: ellipsis;
            overflow: hidden;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: -webkit-box;
        }
    </style>
@endsection
