<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
                        @foreach($info as $in)
						<li><a href="{{route('index')}}"><i class="fa fa-home"></i>{{$in->address}}</a></li>
						<li><a href=""><i class="fa fa-phone"></i>{{$in->phone}}</a></li>
                        @endforeach
							@if (Auth::check())
								<li>
									<a href="{{route('admin')}}">{{"Quản lý"}}</a>
								</li>
							@else
								<li><a href="{{route('login')}}">Đăng nhập</a></li>
							@endif
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
                <a href="{{route('index')}}" id="logo"><img src="sources/assets/dest/images/MINH KHOA-2.png" width="20%" alt="" style="float:left;"></a>
                <img src="sources/assets/dest/images/hotline.png" width="20%" style="float:right; margin: 2%">
            </div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
	<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{route('index')}}">TRANG CHỦ</a></li>
						<li><a href="{{route('Product')}}">SẢN PHẨM</a>
							<ul class="sub-menu">
								@foreach($product_type as $type)
									<li><a href="{{route('Product_type',$type->id)}}">{{$type->name_type}}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="{{route('About')}}">GIỚI THIỆU</a></li>
						<li><a href="{{route('Contact')}}">LIÊN HỆ</a></li>
						<li><a href="{{route('Service')}}">DỊCH VỤ</a>
							<ul class="sub-menu">
								@foreach($service as $ser)
								<li><a href="{{route('Service_details', $ser-> id)}}">{{$ser->service_name}}</a></li>
								@endforeach
							</ul>
						</li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
