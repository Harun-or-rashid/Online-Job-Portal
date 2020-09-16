<!DOCTYPE html>
<html lang="en">

<head>
    <title>ShobChai Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('vendor')}}/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/css/main.css">
    <!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="post" action="{{url('company/login')}}">
                    @csrf
                    <span class="login100-form-title p-b-43">
                        Login to continue
                    </span>


                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>
                    @error('email')
                    <span style="color:red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror


                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>
                    @error('password')
                    <span style="color:red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                        <div>
                            <a href="#" class="txt1">
                                Forgot Password?
                            </a>
                        </div>
                    </div>


                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-46 p-b-20">
                        <span class="txt2">
                            or
                            <a href="{{route('company.register')}}">
                                sign up
                            </a>
                        </span>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('{{asset('vendor')}}/images/bg-01.jpg');">
                </div>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="{{asset('vendor')}}/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor')}}/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor')}}/bootstrap/js/popper.js"></script>
    <script src="{{asset('vendor')}}/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor')}}/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor')}}/daterangepicker/moment.min.js"></script>
    <script src="{{asset('vendor')}}/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor')}}/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor')}}/js/main.js"></script>

</body>

</html>
