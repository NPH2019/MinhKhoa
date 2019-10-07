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
                        <div class="text-center w-75 m-auto">
                            <a href="{{route('index')}}">
                                <span><img src="{{URL::asset('sources/assets/dest/images/MINH KHOA-2.png')}}" alt="" height="200"></span>
                            </a>
                            <p class="text-muted mb-4 mt-3">
                                Nhập địa chỉ email của bạn và chúng tôi sẽ gửi cho bạn một email với hướng dẫn để đặt lại mật khẩu của bạn.</p>
                        </div>
                        <form action="{{route('Recoverpw')}}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email">Địa chỉ email</label>
                                <input class="form-control" type="email" id="email"  name="email" required="" placeholder="Nhập địa chỉ email">
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit"> Lấy lại mật khẩu </button>
                            </div>

                        </form>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Về trang <a href="{{route('login')}}" class="text-muted font-weight-medium ml-1">đăng nhập</a></p>
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


<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

</body>
</html>
