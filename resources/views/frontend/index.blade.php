@extends('layouts.app')



@section('title', 'Home')

@push('css')
    <!-- START PAGE LABEL PLUGINS -->
    <link href="{{ asset('frontend/css/rev-slider.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('frontend/plugin/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
@endpush


@section('content')
    <section class="home-slider Banner-slider p0">
        <div class="baner-slider revslider-wrap tp-overflow-hidden slider-parallax clearfix" id="slider">
            <div id="rev_slider_202_1_wrapper" class="rev_slider_wrapper tp-overflow-hidden" data-alias="concept1" style="background-color:transparent;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.1.1RC fullscreen mode -->
                <div id="rev_slider_202_1" class="rev_slider tp-overflow-hidden" style="display:none;" data-version="5.4.5">
                    <ul>
                        @foreach($sliders as $slider)
                        <!-- SLIDE  1-->

                        <li data-index="rs-{{ $loop->index }}" class="dark" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="Power1.easeInOut" data-easeout="default" data-masterspeed="default" data-speed="1.5" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="your dream our passion" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('storage/'.$slider->image) }}" alt="{{ $slider->alt_text ?? $slider->title }}" data-bgposition="bottom" data-bgfit="cover" style="height: 100% !important;" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!--                        <div class="overlay"></div>-->
                            <div class="container">
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption   tp-resizeme" id="slide-101-layer-0" data-x="['left']" data-hoffset="['0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['550','200','350','280']" data-fontsize="['35','35','40','30']" data-lineheight="['35','35','40','30']" data-width="['none','none','700','300']" data-height="auto,auto,auto,auto" data-whitespace="['nowrap','nowrap','nowrap','nowrap']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"power2.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap;text-align:center;text-transform: uppercase; font-size: 35px !important; color: #fff; letter-spacing: 1px; font-weight: 400;">
                                    <p class="h_title">{{ $slider->title }}</p>
                                </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption   tp-resizeme" id="slide-102-layer-0" data-x="['left']" data-hoffset="['0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['500','280','500','210']" data-fontsize="['35','35','40','30']" data-lineheight="['60','60','50','40']" data-width="['900','none','700','300']" data-height="none" data-whitespace="['normal','nowrap','nowrap','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":300,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"power2.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap;text-align:center; text-transform: uppercase; font-size: 35px !important; color: #fff; letter-spacing: 1px; font-weight: 500;">
                                    <p class="p_title"></p>
                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;color:#FFF;"></div>
                </div>
            </div>
        </div>
        <div class="Banner-slider__menu">
            <div class="container">
                <div class="cards">
                    <a href="#">
                        <span><i class="fa-regular fa-house"></i></span>
                        <p href="#">Residential</p>
                    </a>
                    <a href="#">
                        <span><i class="fa-solid fa-city"></i></span>
                        <p>Commercial</p>
                    </a>
                    <a href="#">
                        <span><i class="fa-solid fa-map-location"></i></span>
                        <p>Landowner</p>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-----------------banner slider----------------->


    <section class="scrolling_section section">
        <div class="container">
            <div class="row scrolling-head align-items-end">
                <div class="col-lg-4 col-xl-3 col-md-4">
{{--                    <img class="parallax-item" data-speed="-2" src="{{ asset('storage/'.$scrolling->image) }}">--}}
                    <img class="parallax-item" data-speed="-2" src="{{ asset('storage/'.($scrolling->image ?? 'scrolling/images/default.jpg')) }}">
                </div>
                <div class="col-lg-8 col-xl-9 col-md-8">
                    <p class="parallax-item" data-speed=""></p>
                    <p class="parallax-item" data-speed="">{{ $scrolling->description ?? 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'}}</p>
                </div>
            </div>
        </div>
        <div class="ticker__viewport" id="tickerViewport">
            <div class="ticker__track" id="tickerTrack">
                @foreach($tickers as $ticker)
                    <div class="ticker__item">{{ $ticker->scrolling_text }}</div>
                @endforeach
            </div>
        </div>
        <div class="container">
            <div class="news_video" data-aos="fade-left" data-aos-duration="3000">
                <video class="" style="width: 100%;" muted autoplay poster="" preload loop>
                    <source src={{ asset('storage/'.($scrolling->video ?? 'scrolling/videos/default.mp4')) }}" type="video/mp4">
                    <source src="{{ asset('storage/'.($scrolling->video ?? 'scrolling/videos/default.mp4')) }}" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>



    <!-- Ordinary -->
    <section class="ordinary_section section">
        <div class="container">
            <div class="section-heading">
                <h2><span class="heading-ani">We make the ordinary... Extraordinary!</span></h2>
                <p><span class="heading-ani">Find a suitable property of your choice from these exclusive & prominent locations of Dhaka.</span></p>
            </div>
        </div>

        <div class="owl-carousel owl-theme ordinary_slider">
            @forelse($properties as $property)
            <div class="item">
                <a href="{{ route('property.show', $property->id) }}" class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="project-card">
                        <div class="project-badge">
                            <p>{{ $property->collection }}</p>
                        </div>
                        @php
                            $image = $property->media->first();
                        @endphp
                        <img class="img-fluid" src="{{ $image ? asset('storage/'.$image->image) : asset('no-image.png') }}">
                        <div class="card-title">
                            <h4>{{ $property->title }}</h4>
                            <p>{{ $property->status_text }} <span><i class="fa-solid fa-location-dot"></i></span> {{ $property->location->area }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @empty
                <div class="item">
                <a href="" class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="project-card">
                        <div class="project-badge">
                            <p>Sapphire Series</p>
                        </div>
                        
                        <img class="img-fluid" src="{{ asset('storage/properties/default.jpg') }}">
                        <div class="card-title">
                            <h4>Sheltech Winter Berry</h4>
                            <p>Upcoming <span><i class="fa-solid fa-location-dot"></i></span> Brahmanbaria</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforelse

        </div>
    </section>
    <!--/ Ordinary -->



    <!-- Available -->
    <section class="available_section section">
        <div class="container">
            <div class="section-heading">
                <h2><span class="heading-ani">Available Properties by Location</span></h2>
                <p><span class="heading-ani">Find a suitable property of your choice from these exclusive & prominent locations of Dhaka.</span></p>
            </div>
            <div class="row">
                @forelse($properties_four_view as $property)

                <div class="col-md-3 col-sm-6 col-6">
                    <div class="available-box" data-aos="fade-left" data-aos-duration="3000">
                        @php
                            $image = $property->media->first();
                        @endphp
                        <img class="img-fluid" src="{{ $image ? asset('storage/'.$image->image) : asset('no-image.png') }}">
                        <a href="{{ route('property.show', $property->id) }}" class="overlay">
                            <div class="overlay-head">
                                <h3>{{ $property->location->area }}</h3>
                            </div>
                            <h5><span>More Details</span> <i class="fa-solid fa-play"></i></h5>
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="available-box" data-aos="fade-left" data-aos-duration="3000">
                        <img class="img-fluid" src="{{ asset('storage/properties/default.jpg') }}">
                        <a href="#" class="overlay">
                            <div class="overlay-head">
                                <h3>Chicago</h3>
                            </div>
                            <h5><span>More Details</span> <i class="fa-solid fa-play"></i></h5>
                        </a>
                    </div>
                </div>
                @endforelse

            </div>

        </div>
    </section>
    <!--/ Available -->


    <!-- Explore -->
    <section class="explore_section section">
        <div class="container">
            <div class="section-heading">
                <h2><span class="heading-ani">Explore</span></h2>
                <p><span class="heading-ani">Find a suitable property of your choice from these exclusive & prominent locations of Dhaka.</span></p>
            </div>
        </div>
        <div class="owl-carousel owl-theme explore_slider">
            @foreach($explores_sliders as $explores_slider)
                <div class="item">
                    @if($explores_slider->media_type === 'image')
                        <img src="{{ asset('storage/'.$explores_slider->media_path) }}">
                    @elseif($explores_slider->media_type === 'video')
                        <video style="width:100%" muted autoplay poster="" preload loop>
                            <source src="{{ asset('storage/'.$explores_slider->media_path) }}" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                    <h3>{{ $explores_slider->title }}</h3>
                </div>
            @endforeach


        </div>
    </section>
    <!--/ Explore -->


    <!-- Testimonial -->
    <section class="testimonial_section section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-heading">
                        <h2 class="text-left"><span class="heading-ani">Testimonial</span></h2>
                        <p class="text-left"><span class="heading-ani">What customers Say About us</span></p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme testimonial_slider">
                @foreach($testimonials as $testimonial)
                <div class="item">
                    <a href="{{ $testimonial->video_url }}" class="testi-video video-btn">
                        <div class="video-play-button " >
                            <span></span>
                        </div>
                        <img src="{{ asset('storage/'.$testimonial->thumbnail) }}">
                    </a>
                    <div class="testi-about">
                        <span class="quote"><i class="fa-solid fa-quote-left"></i></span>
                        <h3>{{ $testimonial->testimonial_subject }}</h3>
                        <p>{{ $testimonial->testimonial_description }}</p>
                        <div class="profile-info">
                            <h5>{{ $testimonial->name }}</h5>
                            <p>{{ $testimonial->title }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="popup" id="videoPopup">
                <div class="popup-content">
                    <span class="close" id="closePopup">&times;</span>
                    <iframe id="videoFrame" src="" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!--/ Testimonial -->

    <section class="contact_section section bg-img" style="background-image: url({{ asset('storage/'.($meeting_content->bg_image ?? 'meeting/default-bg.jpg')) }});">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-7">
{{--                    <img class="img-fluid" src="{{ asset('storage/'.optional($meeting_content)->image) }}" data-aos="fade-right" data-aos-duration="3000">--}}
                    <img class="img-fluid" src="{{ asset('storage/'.($meeting_content->image ?? 'meeting/defailt-image.jpg')) }}" data-aos="fade-right" data-aos-duration="3000">
                </div>
                <div class="col-md-6 col-xl-5">
                    <div class="contact_right_content" data-aos="fade-left" data-aos-duration="3000">
                        <div class="section-heading">
                            <h2 class="text-left"><span class="heading-ani">{{ ($meeting_content->title ?? 'Contact Us') }}</span></h2>
                        </div>

                        <form class="contact-form" action="{{ route('mails.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="full_name" required class="form-control form-control-lg" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="telephone" name="phone" required class="form-control form-control-lg" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="preferred_time" type="datetime-local">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-bas" type="submit"><span>Submit</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('js')
    <script src="{{ asset('frontend/js/revolution.min.js') }}"></script>
    <script src="{{ asset('frontend/plugin/owl-carousel/owl.carousel.js') }}"></script>
@endpush


@push('after_main_js')

    <script>
        $(document).ready(function() {
            $('.ordinary_slider').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                autoplay:5000,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    500: {
                        items: 2,
                        nav: true
                    },
                    768: {
                        items: 3,
                        nav: true
                    },
                    1200: {
                        items: 4,
                        nav: true,
                        loop: true,//false
                        margin: 20
                    },
                    1400: {
                        items: 5,
                        nav: true,
                        loop: true,//false
                        margin: 20
                    }
                }
            })

            $('.explore_slider').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                autoplay:5000,
                center: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: true
                    },
                    1000: {
                        items: 2,
                        nav: true,
                        loop: true,//false
                        margin: 20
                    }
                }
            })

            // Testimonial
            $('.testimonial_slider').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                autoplay:false,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true,//false
                        margin: 20
                    }
                }
            })

        })

    </script>


    <!-- Popup video from testimonial -->
    <script>
        const popup = document.getElementById("videoPopup");
        const closeBtn = document.getElementById("closePopup");
        const videoFrame = document.getElementById("videoFrame");

        // Select all <a> with class video-btn
        const videoBtns = document.querySelectorAll(".video-btn");

        videoBtns.forEach(btn => {
            btn.addEventListener("click", function(e) {
                e.preventDefault();
                const videoURL = this.getAttribute("href");
                popup.style.display = "flex";
                videoFrame.src = videoURL;
            });
        });

        closeBtn.addEventListener("click", function() {
            popup.style.display = "none";
            videoFrame.src = ""; // Stop video
        });

        window.addEventListener("click", function(e) {
            if (e.target === popup) {
                popup.style.display = "none";
                videoFrame.src = "";
            }
        });
    </script>

    <!-- Ticker -->
    <script>
        const track = document.getElementById('tickerTrack');
        const viewport = document.getElementById('tickerViewport');

        // Duplicate enough times to cover viewport twice
        track.innerHTML = track.innerHTML + track.innerHTML + track.innerHTML;

        let paused = false;
        let position = 0;
        const speed = 0.1; // pixels per ms
        let lastTime = null;

        function animate(timestamp) {
            if (!lastTime) lastTime = timestamp;
            const delta = timestamp - lastTime;
            lastTime = timestamp;

            if (!paused) {
                position -= speed * delta;
                // When fully scrolled one set, reset smoothly
                if (Math.abs(position) >= track.scrollWidth / 3) {
                    position = 0;
                }
                track.style.transform = `translateX(${position}px)`;
            }

            requestAnimationFrame(animate);
        }

        viewport.addEventListener('mouseenter', () => paused = true);
        viewport.addEventListener('mouseleave', () => paused = false);

        requestAnimationFrame(animate);
    </script>
@endpush
