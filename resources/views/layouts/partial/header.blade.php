<header class="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-6">
                <a href="{{ route('home') }}" class="logo">
                    <img class="img-fluid logo-1" src="{{ asset("storage/".($siteSettings->logo ?? 'site-settings/logo-1.png'))}}" alt="{{ $siteSettings->site_name ?? 'My Website' }}">
                    <img class="img-fluid logo-2" src="{{ asset("storage/".($siteSettings->logo_sticky ?? 'site-settings/logo-2.png'))}}" alt="{{ $siteSettings->site_name ?? 'My Website' }}">
                </a>
            </div>
            <div class="col-lg-8">
                <nav class="menu-wrapper ">

                    <div class="navigation">
                        <ul class="ul">
                            <li>
                                <a href="index.html" class="logo">
                                    <img class="img-fluid" src="{{ asset('frontend/images/logo-1.png') }}">
                                </a>
                            </li>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="dropdown_menu"><a href="#">About <i class="fa-solid fa-caret-down"></i></a>
                                <ul>
                                    <li><a href="{{ route('our-team') }}">Our Team</a></li>
                                    <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                                    <li><a href="{{ route('chairmans-message') }}">Chairman's Message</a></li>
                                </ul>
                            </li>
                            <li class="dropdown_menu"><a href="#">Projects <i class="fa-solid fa-caret-down"></i></a>
                                <ul>
                                    <li class="sub-dropdown-parent"><a href="#">Ongoing</a>
                                        <ul class="sub-dropdown-menu">
                                            <li><a href="project-details.html">Condominium</a></li>
                                            <li><a href="#">Commercial</a></li>
                                            <li><a href="#">Residential</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="project-details.html">Upcoming</a></li>
                                    <li><a href="project-details.html">Completed</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li class="dropdown_menu"><a href="#">Gallery <i class="fa-solid fa-caret-down"></i></a>
                                <ul>
                                    <li><a href="#">Newsletter</a></li>
                                    <li><a href="image-gallery.html">Image Gallery</a></li>
                                    <li><a href="video-gallery.html">Video Gallery</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('career') }}">Career</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="{{ route('landowner') }}">Landowner</a></li>

                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-lg-2 col-6">
                <div class="header-third-col">
                    <a href="tel:01754720343" class="btn btn-bas"><i class="fa-solid fa-phone"></i> <span>{{$siteSettings->phone ?? '01754720343'}}</span></a>
                    <a class="hamburger  ">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

            @auth
                <!-- <p>Welcome, {{ auth()->user()->name }}!</p> -->
                <a href="{{ route('dashboard') }}">Dashboard</a>
            @endauth
            @guest
            <a href="{{ route('login') }}">Login</a>
            @endguest

