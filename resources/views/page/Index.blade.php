@extends('master')
@section('title', '- TRANG CHỦ')
@section('content')
<div class="rev-slider">
<div class="fullwidthbanner-container">
	<div class="fullwidthbanner">
		<div class="bannercontainer" >
			<div class="banner">
				<ul>
				@foreach($slide as $sl)
					<!-- THE FIRST SLIDE -->
						<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
							<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
								<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="sources//image/slide/{{$sl->image}}" data-src="sources//image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('sources//image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
								</div>
							</div>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="tp-bannertimer"></div>
	</div>
</div>
	<!--slider-->
</div>
<marquee direction="left" height="50px" style="background: #1d68a7" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="8">
    <h3 style="margin-top: 5px; color: lightgrey; font-size: 20px">Chuyên: lắp đặt - sửa chữa - vệ sinh các thiết bị điện lạnh, điện gia dụng, điện cơ, lắp đặt sửa chữa máy tính để bàn, laptop, hệ thống mạng, camera, thiết kế và thi công bảng hiệu hộp đèn.</h3></marquee>
<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<div class="space50">&nbsp;</div>
							<div class="row">
                                <div id="menu_left">
                                    <h4><b>DỊCH VỤ</b></h4>
                                    @foreach($service as $ser)
                                        <a href="{{route('Service_details', $ser->id)}}">
                                            <li style="list-style-type: none">
                                                <img src="sources/admin/image/icons8-arrow-40-2.png">
                                                <h6>{{$ser->service_name}}</h6>
                                            </li>
                                        </a>
                                    @endforeach
                                </div>
                                @foreach($service as $ser)
									<a href="{{route('Service_details', $ser->id)}}">
										<div class="item-right">
											<img src="sources/dashboard/image/service/{{$ser->image}}" width="100px" height="100px" style="padding: 10px; float: left">
											<div style="float: left"><h6 style="font-size: 18px; margin-top: 25px"><b>{{$ser->service_name}}</b></h6></div>
										</div>
									</a>
								@endforeach
                            </div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->
                <div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<div class="space50">&nbsp;</div>
							<div class="row">
                                <div id="product">
                                    <h4><b>SẢN PHẨM</b></h4>
                                </div>
                                <div class="space50">&nbsp;</div>
                            @foreach($data as $row)
									<div class="col-sm-3">
										<div class="single-item">
											<div class="single-item-header">
												<a href="{{route('Product_details',$row->id)}}"><img src="sources/dashboard/image/product/{{$row->image}}" alt="" width="350px" height="150px"></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title">{{$row->name}}</p>
												<p class="single-item-price">
													<span class="flash-sale">{{number_format($row->unit_price)}}đ</span>
												</p>
											</div>
											<div class="single-item-caption">
												<a class="beta-btn primary" href="{{route('Product_details',$row->id)}}">Xem chi tiết<i class="fa fa-chevron-right"></i></a>
											</div>
											<br>
										</div>
									</div>
								@endforeach
                                </div>
                            </div>
                    </div> <!-- .beta-products-list -->
							<div class="space50">&nbsp;</div>
						<!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->
			</div> <!-- .main-content -->
		</div> <!-- #content -->
</div> <!-- .container -->
    <style>


    </style>
@endsection