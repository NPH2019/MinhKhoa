	<div id="footer" class="color-div">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="center">
						<div class="widget">
							<h4 class="widget-title">
								<img src="sources/assets/dest/images/MINH KHOA-2.png" width="100px" alt="">
							</h4>
                            @foreach($info as $in)
							<i class="fa fa-map-marker"> {{$in->address}}</i>
							<i class="fa fa-phone"> {{$in->phone}}</i><br>
                                @endforeach
						</div>
					</div>
				</div>
				<div class="col-sm-2" style="margin-left: 100px">
					<div class="widget">
						<h4 class="widget-title">Chính mục</h4>
						<a href="{{route('index')}}"><img src="sources/assets/dest/images/next.png" width="10px"> Trang chủ</a><br>
						<a href="{{route('About')}}"><img src="sources/assets/dest/images/next.png" width="10px"> Giới thiệu của hàng</a><br>
						<a href="{{route('Contact')}}"><img src="sources/assets/dest/images/next.png" width="10px"> Thông tin liên hệ</a><br>
						<a href="{{route('Service')}}"><img src="sources/assets/dest/images/next.png" width="10px"> Các dịch vụ cửa hàng</a><br>
						<a href="{{route('Product')}}"><img src="sources/assets/dest/images/next.png" width="10px"> Sản phẩm cửa hàng</a><br>
						
					</div>
				</div>
				<div class="col-sm-2" style="margin-left: 100px">
					<div class="widget">
						<h4 class="widget-title">Dịch vụ mới</h4>
							@foreach($service as $ser)
							<a href="{{route('Service_details', $ser-> id)}}"><img src="sources/assets/dest/images/next.png" width="10px"> {{$ser->service_name}}</a><br>
							@endforeach
						<br>
					</div>
				</div>
				<div class="col-sm-4">
				 <div class="col-sm-10">
					<div class="widget">
						<h4 class="widget-title"></h4>
						<div>
							<div class="contact-info">
							</div>
						</div>
					</div>
				  </div>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- #footer -->
