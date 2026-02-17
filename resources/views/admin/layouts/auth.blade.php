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

        <!-- START THEME LAYOUT STYLE -->
        <!-- <link href="assets/dist/css/style.css" rel="stylesheet" type="text/css"/> -->
        <link rel="stylesheet" href="{{ asset('admin/assets/dist/css/style.css') }}">
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader"></div>
       
        <!-- Site wrapper -->
         
            
        @yield('content')

        <!-- Jquery-->
        <script src="{{ asset('admin/assets/dist/js/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('admin/assets/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('admin/assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- START THEME LABEL SCRIPT -->
        <script src="{{ asset('admin/assets/dist/js/main.js') }}"></script>
        

    </body>
</html>