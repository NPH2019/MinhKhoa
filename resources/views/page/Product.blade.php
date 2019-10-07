@extends('master')
@section('title', '- SẢN PHẨM')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Sản phẩm</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="{{route('index')}}">Trang chủ</a> / <span>Sản phẩm</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-3">
                        <ul class="aside-menu">
                            @foreach($name_product as $name)
                            <li><a href="{{route('Product_type',$name->id)}}">{{$name->name_type}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="beta-products-list">
                            <h4>Tất cả sản phẩm</h4>
                            <div class="row">
                                @foreach($all_product as $all)
                                <div class="col-sm-4">
                                    @if($all->promotion_price <> 0)
                                        <div class="ribbon-wrapper" style="margin-right: 15px"><div class="ribbon sale">Sale</div></div>
                                    @endif
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="{{route('Product_details',$all->id)}}"><img src="sources/dashboard/image/product/{{$all->image}}" alt="" height="250px"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$all->name}}</p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="beta-btn primary" href="{{route('Product_details',$all->id)}}">Xem chi tiết<i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <br><br>
                                </div>
                                @endforeach
                            </div>
                        </div> <!-- .beta-products-list -->
                    </div>
                </div> <!-- end section with sidebar and main content -->
            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection
