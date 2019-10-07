@extends('master')
@section('title', '- CHI TIẾT SẢN PHẨM')
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
		<div id="content">
			<div class="row">
				<div class="col-sm-9">
					<div class="row">
						<div class="col-sm-4">
							<img src="sources/dashboard/image/product/{{$product->image}}" width="100%" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<h3 class="single-item-title" style="font-size: 24px">{{$product->name}}</h3>
								<p class="single-item-price">
									<span>
                                        <span class="flash-sale">{{number_format($product->unit_price)}}đ</span>
									</span>
								</p>
							</div>
							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>
							<div class="single-item-desc">
							</div>
							<div class="space20">&nbsp;</div>
							<div class="single-item-options">
								<span style="color: red; font-size: 25px">Liên hệ</span>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li>Thông tin sản phẩm</li>
						</ul>
						<div class="panel" id="tab-description">
                            {!! $product->description !!}
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản phẩm liên quan</h4>
						<div class="row">
							@foreach($related_products as $lq)
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="{{route('Product_details',$lq->id)}}"><img src="sources/dashboard/image/product/{{$lq->image}}" alt="" height="250px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$lq->name}}</p>
										<p class="single-item-price">
											<span>
                                                <span class="flash-sale">{{number_format($lq->unit_price)}}đ</span>
											</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="beta-btn primary" href="{{route('Product_details',$lq->id)}}">Xem chi tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						{{$related_products->links()}}
					</div> <!-- .beta-products-list -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection
