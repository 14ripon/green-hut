<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="Md Ripon Miah - zhripon97@gmail.com">
    <!--=== Favicon ===-->
    <link rel="icon" href="{{ asset('frontend/images/logo.png') }}">
    <!-- ====  Page title  ====-->
    <title>@yield('title', 'Green Hut Real Ested')</title>

    <!-- <link rel="stylesheet" href="assets/css/all.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/config.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.min.css')}}" media="all">
    @stack('css')
    <!-- ====================== Main Style ====================-->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}">
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

@include('layouts.partial.header')
<main>
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
    @yield('content')
</main>
@include('layouts.partial.footer')


<!-- =======================================-->
<!--================= jquery  ===================-->
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/all.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
@stack('js')
<script src="{{ asset('frontend/js/aos.min.js') }}"></script>
<!--================= Main JS  ===================-->
<script src="{{ asset('frontend/js/main.js') }}"></script>
@stack('after_main_js')
</body>
</html>
