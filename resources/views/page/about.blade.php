@extends('master')
@section('title', '- GIỚI THIỆU')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Giới thiệu</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="{{route('index')}}">Trang chủ</a> / <span>Giới thiệu </span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                @foreach($about as $ab)
                <div class="title">
                    <h2 style="text-align: center">{{$ab->title}}</h2>
                </div>
                <div class="premise">
                    <h2 style="text-align: center">{{$ab->premise}}</h2>
                </div>
                <div>
                    {!!$ab->content!!}
                </div>
                @endforeach
            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection
