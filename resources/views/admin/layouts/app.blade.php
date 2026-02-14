<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>@yield('title', 'Laravel App')</title>
        <link rel="shortcut icon" href="{{ asset('admin/assets/dist/img/favicon.png') }}" type="image/x-icon">
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
        <link rel="stylesheet" href="{{ asset('admin/assets/dist/css/base.css') }}">

        @stack('css')
        <!-- START THEME LAYOUT STYLE -->
        <!-- <link href="assets/dist/css/style.css" rel="stylesheet" type="text/css"/> -->
        <link rel="stylesheet" href="{{ asset('admin/assets/dist/css/style.css') }}">

        <style>
            .alert {
                width: 300px;
                max-width: 100%;
                position: fixed;
                z-index: 999;
                top: 100px;
                left: 100px;
                box-shadow: 4px 4px 40px rgba(1, 1, 1, 0.4);
            }
        </style>
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Site wrapper -->

        <div class="wrapper">


            {{-- FLASH MESSAGES --}}
            @if(session('success'))
                <div class="flash-message alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="flash-message alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="flash-message alert alert-danger">
                    <ul style="margin:0;padding-left:20px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- AUTO HIDE SCRIPT --}}
            <script>
                setTimeout(function () {
                    document.querySelectorAll('.flash-message').forEach(function (el) {
                        el.style.transition = 'opacity 0.5s ease';
                        el.style.opacity = '0';
                        setTimeout(() => el.remove(), 500);
                    });
                }, 5000); // 5 seconds
            </script>


        @include('admin.layouts.partial.header')
        @include('admin.layouts.partial.sidebar')


        @yield('content')

            <footer class="main-footer pl-3">
                <div class="float-right">AdminPix</div>
                <p class="py-0 my-0"><strong class="fs-13">Copyright &copy; 2019</strong> All rights reserved.  <span><i class="fa fa-heart"></i></span></p>
            </footer>
        </div> <!-- ./wrapper -->


        <!--
        <script src="{{ asset('admin/') }}"></script>

        -->
        <!-- Jquery-->
        <script src="{{ asset('admin/assets/dist/js/jquery.min.js') }}"></script>
        <!-- lobicard -->
        <script src="{{ asset('admin/assets/plugins/lobicard/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/lobicard/js/tether.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/lobicard/js/lobicard.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('admin/assets/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('admin/assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>

        @stack('js')

        <!-- metisMenu -->
        <script src="{{ asset('admin/assets/plugins/menu/metisMenu.min.js') }}"></script>
        <!-- scroll bar-->
        <script src="{{ asset('admin/assets/plugins/scroll/dist/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/scroll/dist/scroll-active.js') }}"></script>

        <!-- START THEME LABEL SCRIPT -->

        <script src="{{ asset('admin/assets/dist/js/main.js') }}"></script>




    </body>
</html>
