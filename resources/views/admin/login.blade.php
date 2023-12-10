@php 
    if(session()->has('admin_login')){
        echo "<script>window.location.href = '/admin/';</script>";
        die();
    }else{
        
    }
@endphp

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Techyans - Admin Dashboard</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('admin-assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <style>
            body {
                font-family: "Open Sans", sans-serif;
                background: #f6f9ff;
                color: #444444;
            }
            .logo span {
                font-size: 26px;
                font-weight: 700;
                color: #012970;
                font-family: "Nunito", sans-serif;
            }
            .card-title {
                padding: 20px 0 15px 0;
                font-size: 18px;
                font-weight: 500;
                color: #012970;
                font-family: "Poppins", sans-serif;
            }
            a{
                color: #4154f1;
                text-decoration: none;
            }
            .spinner-border{
                display:none;
            }
            .form-label{
                font-size:13px;
                font-weight:700;
            }
            input{
                font-size:14px !important;
            
            }
            input.error,input.error:focus{
                border: 1px solid red;
            }
            input.error{
                border: 1px solid red;
            }
            label.error{
                color:red;
                font-size:13px;
            }
            @media screen and (max-width:767px){
                
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 ">

                    <div class="d-flex justify-content-center py-4">
                        <a href="index.html" class="logo d-flex align-items-center w-auto">
                            <img src="assets/img/logo.png" alt="">
                            <span class="">TECHYANS</span>
                        </a>
                    </div><!-- End Logo -->
                    <form class="row admin-login-page bg-white border px-sm-4 py-4 mx-0" method="POST" action='{{ url("/admin/verify-admin-login")}}'>
                        @csrf
                        <div class="col-12">
                            <h5 class="card-title text-center p-0 m-0 fs-4">Login to Your Account</h5>
                            <p class="text-center small m-0 pt-2">Enter your username & password to login</p>
                        </div>
                        <div class="col-12 my-3">
                            <label class="form-label">Username</label>
                            <input type="email" name="user_email" class="form-control shadow-none" required>
                        </div>
                        <div class="col-12 mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control shadow-none" required>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Login <span class="spinner-border spinner-border-sm ms-4"></span></button>
                        </div>
                        <div class="col-12 text-end">
                            <p class="small mb-0 mt-2"><a href="pages-register.html">Forgot Password?</a></p>
                        </div>
                        <div class="col-12">
                            <p class="result"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Template Main JS File -->
        <script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('admin-assets/js/jquery.validate.min.js') }}"></script>
        <script>
            $('.admin-login-page').validate({
                rules:{
                    required:true,
                    user_email:{
                        email:true,
                    },password:{
                        minlength:6,
                    }
                },messages:{
                    user_email:{
                        required:"Email address is required",
                    },password:{
                        required:"Password is required",
                    }
                },submitHandler: function(form,e) {
                    e.preventDefault();
                    const user_email = $('.admin-login-page input[name=user_email]').val();
                    const user_pass = $('.admin-login-page input[name=password]').val();
                    var token = $('.admin-login-page input[name=_token]').val();
                    $.ajax({
                        method:'post',
                        url:'{{ url("/admin/verify-admin-login")}}',
                        data:{user_email:user_email,user_pass:user_pass},
                        headers: {
                            'X-CSRF-TOKEN': token
                        },
                        success:function(response){
                            $('.result').html(response);
                        }
                    })
                }
            })
        </script>
    </body>
</html>