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
                <form class="login100-form validate-form" style="padding-top:20px;" method="post"
                    action="{{url('company/register')}}">
                    @csrf
                    <span class="login100-form-title p-b-30">
                        Register Your  Company
                    </span>

                    <div class="wrap-input100 validate-input" style="height: 69px;">
                        <input class="input100" type="text" name="first_name">
                        <span class="focus-input100"></span>
                        <span class="label-input100">First Name</span>
                    </div>
                    @error('first_name')
                    <span style="color:red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="wrap-input100 validate-input" style="height: 69px;">
                        <input class="input100" type="text" name="last_name">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Last Name</span>
                    </div>
                    @error('last_name')
                    <span style="color:red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="wrap-input100 validate-input" style="height: 69px;">
                        <input class="input100" type="text" name="business_name">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Business Name</span>
                    </div>
                    @error('business_name')
                    <span style="color:red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="wrap-input100 validate-input" style="height: 69px;"
                        data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="email">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>
                    @error('email')
                    <span style="color:red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror


                    <div class="wrap-input100 validate-input" style="height: 69px;"
                        data-validate="Password is required">
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>
                    @error('password')
                    <span style="color:red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="wrap-input100 validate-input" style="height: 69px;"
                        data-validate="Confirm Password is required">
                        <input class="input100" type="password" name="password_confirmation">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Confirm Password</span>
                    </div>
                    @error('password_confirmation')
                    <span style="color:red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Register
                        </button>
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
