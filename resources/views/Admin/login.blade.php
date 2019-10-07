<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>MINH KHOA - ĐĂNG NHẬP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="sources/assets/images/favicon.ico">
    <!-- App css -->
    <link href="sources/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="sources/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="sources/assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">
                    <div class="card-body p-4">
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
                        <div class="text-center w-75 m-auto">
                            <a href="{{route('index')}}">
                                <span><img src="{{URL::asset('sources/assets/dest/images/MINH KHOA-2.png')}}" alt="" height="200"></span>
                            </a>
                            <p class="text-muted mb-4 mt-3">Nhập địa chỉ email và mật khẩu của bạn để truy cập trang quản trị.</p>
                        </div>
                        <form role="form" method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="emailaddress">Địa chỉ email</label>
                                <input class="form-control" type="email" id="email" name="email" required="" placeholder="Nhập email">
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Mật khẩu</label>
                                <input class="form-control" type="password"  name="password" required="" id="password" placeholder="Nhập vào mật khẩu">
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit"> Đăng nhập </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p> <a href="{{route('Recoverpw')}}" class="text-muted ml-1">Quên mật khẩu?</a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->
<footer class="footer footer-alt">
    <p>MINH KHOA ©Copyright {{date('Y')}}</p>
</footer>

</body>
</html>
