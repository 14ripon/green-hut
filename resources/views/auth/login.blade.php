
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adminpix</title>
    <link rel="shortcut icon" href="{{ asset('admin/dist/img/favicon.png') }}" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
        WebFont.load({
            google: {families: ['Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i']},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- START GLOBAL MANDATORY STYLE -->
    <link href="{{ asset('admin/assets/dist/css/base.css') }}" rel="stylesheet" type="text/css">
    <!-- START THEME LAYOUT STYLE -->
    <link href="{{ asset('admin/assets/dist/css/style.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>
<!-- Preloader -->
<div class="preloader"></div>
<!-- Content Wrapper -->
<div class="login-wrapper">
    <div class="container-center">
        <div class="panel panel-bd">
            <div class="panel-heading">
                <div class="view-header">
                    <div class="header-icon">
                        <i class="pe-7s-unlock"></i>
                    </div>
                    <div class="header-title">
                        <h3>Login</h3>
                        <small><strong>Please enter your credentials to login.</strong></small>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <form method="POST" action="/login" id="loginForm">
                    <!--Social Buttons-->
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="username" type="email" class="form-control" value="{{ old('email') }}admin@admin.com" name="email" placeholder="admin@admin.com">

                        </div>
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <span class="help-block small">Your unique username to app</span>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input id="pass" type="password" class="form-control" name="password" value="11111111" placeholder="Password">
                            @error('password')
                            <div>{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div>

                        <div class="checkbox checkbox-success">
                            <input id="checkbox3" type="checkbox" name="remember">
                            <label for="checkbox3">Remember me</label>
                        </div>
                        <button class="btn btn-base pull-right">Login</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="bottom_text">
            Don't have an account? <a href="{{ route('register') }}">Sign Up</a><br>
            <a href="{{ route('home') }}">Back to Home</a><br>
            Remind <a href="forget_password.html">Password</a>
        </div>

    </div>
</div>  <!-- /.content-wrapper -->





<!-- Jquery -->
<script src="{{ asset('admin/assets/dist/js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('admin/assets/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/bootstrap/js/bootstrap.min.js') }}"></script>
<!--main js-->
<script src="{{ asset('admin/assets/dist/js/main.js') }}"></script>

</body>
</html>
