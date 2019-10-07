@extends('master')
@section('title', '- LOẠI SẢN PHẨM')
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
                            @foreach($menu as $m)
							<li><a href="{{route('Product_type',$m->id)}}">{{$m->name_type}}</a></li>
                            @endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($product)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
                                @foreach($product as $pro)
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{route('Product_details', $pro->id)}}"><img src="sources/dashboard/image/product/{{$pro->image}}" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$pro->name}}</p>
											<p class="single-item-price">
                                                <span class="flash-sale">{{number_format($pro->unit_price)}}đ</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="beta-btn primary" href="{{route('Product_details',$pro->id)}}">Xem chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
									<br><br>
								</div>
                                @endforeach
							</div>
						</div> <!-- .beta-products-list -->
						<div class="space50">&nbsp;</div>
						<div class="beta-products-list">
							<h4>Sản phẩm khác</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($other_products)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
                                @foreach($other_products as $other)
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{route('Product_details',$other->id)}}"><img src="sources/dashboard/image/product/{{$other->image}}" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$other->name}}</p>
											<p class="single-item-price">
												<span>
                                                    <span class="flash-sale">{{$other->unit_price}}đ</span>
												</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="beta-btn primary" href="{{route('Product_details',$other->id)}}">Xem chi tiết<i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
                                @endforeach
							</div>
                                <div class="row" >{{$other_products->links()}}</div>
							<div class="space40">&nbsp;</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->
			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
