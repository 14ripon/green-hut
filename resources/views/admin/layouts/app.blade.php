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
        <!-- Modal  -->
        <link href="{{ asset('admin/assets/plugins/modals/modal-component.css')}}" rel="stylesheet" type="text/css"/>

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
        @include('admin.layouts.partial.footer')
        </div> <!-- ./wrapper -->


       
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

        <!-- Modal -->
        <script src="{{ asset('admin/assets/plugins/modals/classie.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/modals/modalEffects.js') }}"></script>

        @stack('js')

        <!-- metisMenu -->
        <script src="{{ asset('admin/assets/plugins/menu/metisMenu.min.js') }}"></script>
        <!-- scroll bar-->
        <script src="{{ asset('admin/assets/plugins/scroll/dist/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/scroll/dist/scroll-active.js') }}"></script>

        <!-- Sweet Alert --> 
         <script src="{{ asset('admin/assets/plugins/sweetalert.min.js') }}"></script>
         <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

        <!-- START THEME LABEL SCRIPT -->

        <script src="{{ asset('admin/assets/dist/js/main.js') }}"></script>


        <!-- Delete Confirmation Sweet Alert -->
        <script>
            document.querySelectorAll('.deleteBtn').forEach(button => {
                button.addEventListener('click', function () {

                    let id = this.getAttribute('data-id');
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "This action cannot be undone!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('delete-form-' + id).submit();
                        }
                    });

                });
            });
            </script>

            {{-- FLASH MESSAGES --}}
            @if(session('success'))
                <script>
                    Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 1500
                    });
                </script>
            @endif

            @if(session('error'))
                <script>
                    Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "{{ session('error') }}",
                    footer: '<a href="#">Why do I have this issue?</a>'
                    });
                </script>
            @endif

             @if ($errors->any())
                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Validation Error!',
                            html: `
                                <ul style="text-align:left; color:red;">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            `,
                        });
                    });
                </script>
                @endif




    </body>
</html>
