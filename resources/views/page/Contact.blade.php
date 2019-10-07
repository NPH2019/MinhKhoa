@extends('master')
@section('title', '- LIÊN HỆ')
@section('content')

	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Liên hệ</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('index')}}">Trang chủ</a> / <span>Liên hệ</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="beta-map">
		<div class="abs-fullwidth beta-map wow flipInX">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7858.344818434902!2d105.77493627611754!3d10.002613421397404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1568893241585!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Nhập thông tin</h2>
					<div class="space20">&nbsp;</div>
					<div class="space20">&nbsp;</div>
					<form action="{{route('Contact')}}" method="post" class="contact-form">
                        @csrf
                        <div  class="notification">
                            @if(Session::has('succeed'))
                                <div class="alert alert-success">{{Session::get('succeed')}}</div>
                            @endif
                            @if ($errors->any())
                                <div class="error-form">
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-dark" style="color: red">{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
						<div class="form-block">
							<input name="txtname" id="txtname" type="text" placeholder="Nhập tên" required>
						</div>
						<div class="form-block">
							<input name="txtemail" id="txtemail" type="email" placeholder="Email" required>
						</div>
						<div class="form-block">
							<input name="txtaddress"  type="text" placeholder="Địa chỉ">
						</div>
						<div class="form-block">
							<input name="txtphone_number" type="text" placeholder="Số điện thoại" required>
						</div>
						<div class="form-block">
							<textarea name="txtnote" placeholder="Lời nhắn" required></textarea>
						</div>

						<div class="form-block">
							<button type="submit" class="beta-btn primary">Gửi tin nhắn <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>Thông tin liên lạc</h2>
					<div class="space20">&nbsp;</div>
                    @foreach($info as $in)
                        <div class="info">
                            <li><b>Địa chỉ: </b>{{$in->address}}</li>
                            <li><b>SĐT:</b> {{$in->phone}}</li>
                            <li><b>Email: </b> <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank">{{$in->email}}</a></li>
                        </div>
                    @endforeach
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection
