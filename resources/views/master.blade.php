<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MINH KHOA @yield('title')</title>
	<base href="{{asset('')}}">
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="sources/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="sources/assets/dest/css/fontawesome.min.css">
	<link rel="stylesheet" href="sources/assets/dest/css/fontawesome.css">
	<link rel="stylesheet" href="sources/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="sources/assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="sources/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="sources/assets/dest/css/style.css">
	<link rel="stylesheet" href="sources/assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="sources/assets/dest/css/style2.css">
</head>
<body>
		@include('header')
		@yield('content')
		@include('footer')
	<div class="copyright" style="background: #1b1e21; height:50px; padding-left: 20%">
		<p style=" color: white">MINH KHOA ©Copyright {{date('Y')}}
			<a href="https://sby.vn" style="float: right; margin-left: 5px; margin-right: 30%; color: white;" ><b>Thiết kế bởi <span style="color: #de543e; font-size: 17px">SBY Soft</span></b></a>
			<img src="sources/assets/dest/images/logo-sby-soft.png" width="30px" style="float: right; margin-top: 10px">
		</p>
	</div> <!-- .copyright -->
	<!-- include js files -->
	<script src="sources/assets/dest/js/jquery.js"></script>
	<script src="sources/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="sources/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="sources/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="sources/assets/dest/vendors/animo/Animo.js"></script>
	<script src="sources/assets/dest/vendors/dug/dug.js"></script>
	<script src="sources/assets/dest/js/scripts.min.js"></script>
	<script src="sources/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="sources/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="sources/assets/dest/js/waypoints.min.js"></script>
	<script src="sources/assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="sources/assets/dest/js/custom2.js"></script>
	<script>
	$(document).ready(function($) {
		$(window).scroll(function(){
			if($(this).scrollTop()>100){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
</body>
</html>
