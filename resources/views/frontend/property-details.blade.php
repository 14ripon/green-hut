@extends('layouts.app')
@section('title', 'Property Details')

@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/plugin/owl-carousel/owl.carousel.min.css') }}">
@endpush
@section('content')

    <!-- <section class="section Product-details-hero"> -->
    <div class=" project-details-hero">
        <div class="row align-items-start">
            <div class="col-md-6 slide-side">
                <div class="gallery-container">
                    <div class="main-image">
                        @php
                            $firstImage = $property->media->first();
                        @endphp
                        <img id="mainImg" src="{{ $firstImage ? asset('storage/'.$firstImage->image) : asset('no-image.png') }}" alt="Product">
                    </div>
                    <div class="thumbnails">
                        @foreach($property->media as $media)
                            <img class="{{ $loop->first ? 'active' : '' }}" src="{{ asset('storage/'.$media->image) }}" alt="">
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6 project-details-hero-right">
                <div class="px-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$property->status_text}}</li>
                        </ol>
                    </nav>


                    <div class="section-heading mb-0">
                        <h2 class="text-left"><span class="heading-ani">{{ $property->title }}</span></h2>
                    </div>

                    <div class="side-title mt-3">
{{--                        <h4 class="title">At a Glance</h4>--}}
                    </div>
                    <table class="table table-bordered project-details-table mb-0">
                        <tr>
                            <td><span><i class="fa-solid fa-location-dot"></i></span> Address</td>
                            <td>
                                {{ $property->location?->area }}, {{ $property->location?->city }}
                            </td>
                        </tr>
                        <tr>
                            <td><span><i class="fas fa-pencil-ruler"></i></span> Land Area</td>
                            <td>{{ $property->location?->city }}</td>
                        </tr>
                        <tr>
                            <td><span><i class="fas fa-pencil-ruler"></i></span> No. of Floors</td>
                            <td>{{ $property->no_of_floors }}</td>
                        </tr>
                        <tr>
                            <td><span><i class="fas fa-th"></i></span> Apartment/Floor</td>
                            <td>{{ $property->apartment_per_floor }}</td>
                        </tr>
                        <tr>
                            <td><span><i class="fas fa-ruler-combined"></i></span> Apartment Size</td>
                            <td>{{ $property->apartment_size }}</td>
                        </tr>
                        <tr>
                            <td><span><i class="fas fa-bed"></i></span> Bedroom</td>
                            <td>{{ $property->bedrooms }}</td>
                        </tr>
                        <tr>
                            <td><span><i class="fas fa-bath"></i></span> Bathroom</td>
                            <td>{{ $property->bedrooms }}</td>
                        </tr>
                        <tr>
                            <td><span><i class="far fa-calendar-check"></i></span> Launch Date</td>
                            <td>{{ $property->launch_date_note }}</td>
                        </tr>
                        <tr>
                            <td><span><i class="fas fa-project-diagram"></i></span> Collection</td>
                            <td>{{ $property->collection }}</td>
                        </tr>

                    </table>
                    <div class="buttons">
                        <button type="button" class="btn btn-bas" data-bs-toggle="modal" data-bs-target="#exampleModal"><span>Expand</span></button>
                        <a class="btn btn-bas"><span>Brochure</span></a>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal modal-dialog-centered modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title title mb-0" id="exampleModalLabel">Property Details</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered project-details-table mb-0">
                        <tr>
                            <td><span><i class="fa-solid fa-location-dot"></i></span> Address</td>
                            <td>{{ $property->location?->area }}, {{ $property->location?->city }}</td>
                        </tr>
                        <tr>
                            <td><span><i class="fas fa-pencil-ruler"></i></span> Land Area</td>
                            <td>{{ $property->land_area }}</td>
                        </tr>
                        <tr>
                            <td><span><i class="fas fa-pencil-ruler"></i></span> No. of Floors</td>
                            <td>{{ $property->no_of_floors }}</td>
                        </tr>
                        <tr>
                            <td><span><i class="fas fa-th"></i></span> Apartment/Floor</td>
                            <td>{{ $property->apartment_per_floor }}</td>
                        </tr>
                        <tr>
                            <td><span><i class="fas fa-ruler-combined"></i></span> Apartment Size</td>
                            <td>{{ $property->apartment_size }}</td>
                        </tr>
                        <tr>
                            <td><span><i class="fas fa-bed"></i></span> Bedroom</td>
                            <td>{{ $property->bedrooms }}</td>
                        </tr>
                        <tr>
                            <td><span><i class="fas fa-bath"></i></span> Bathroom</td>
                            <td>{{ $property->bathrooms }}</td>
                        </tr>
                        <tr>
                            <td><span><i class="far fa-calendar-check"></i></span> Launch Date</td>
                            <td>{{ $property->launch_date_note }}</td>
                        </tr>
                        <tr>
                            <td><span><i class="fas fa-project-diagram"></i></span> Collection</td>
                            <td>{{ $property->collection }}</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>


    <section class="section" style="background-color: #f7f8f9;">
        <div class="container">
            <div class="section-heading mb-0">
                <h2><span class="heading-ani">Features & Amenities</span></h2>
            </div>
            <div class="features-cards">
                <div class="feature-card">
                    <img src="assets/images/project-details/features-amenities/1.svg" alt="icon">
                    <h3>Infinity Pool & Lounge Deck</h3>
                </div>
                <div class="feature-card">
                    <img src="assets/images/project-details/features-amenities/2.svg" alt="icon">
                    <h3>Modern Fitness Center</h3>
                </div>
                <div class="feature-card">
                    <img src="assets/images/project-details/features-amenities/3.svg" alt="icon">
                    <h3>Landscaped Garden & Green Spaces</h3>
                </div>
                <div class="feature-card">
                    <img src="assets/images/project-details/features-amenities/4.svg" alt="icon">
                    <h3>Secure Parking Area</h3>
                </div>
                <div class="feature-card">
                    <img src="assets/images/project-details/features-amenities/5.svg" alt="icon">
                    <h3>24/7 Security & CCTV Surveillance</h3>
                </div>
                <div class="feature-card">
                    <img src="assets/images/project-details/features-amenities/6.svg" alt="icon">
                    <h3>Spacious Living Interiors</h3>
                </div>
                <div class="feature-card">
                    <img src="assets/images/project-details/features-amenities/7.svg" alt="icon">
                    <h3>Rooftop Terrace & BBQ Zone</h3>
                </div>
                <div class="feature-card">
                    <img src="assets/images/project-details/features-amenities/8.svg" alt="icon">
                    <h3>Smart Home Automation</h3>
                </div>
                <div class="feature-card">
                    <img src="assets/images/project-details/features-amenities/9.svg" alt="icon">
                    <h3>Children’s Play Area</h3>
                </div>
                <div class="feature-card">
                    <img src="assets/images/project-details/features-amenities/10.svg" alt="icon">
                    <h3>Community Hall & Event Space</h3>
                </div>
            </div>
        </div>
    </section>





    <section class="section progress-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 ">
                    <div class="section-heading mb-0">
                        <h2 class="text-left"><span class="heading-ani" style="color:#fff;">Project Progress</span></h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="progress-wrapper">
                        <div class="progress-title">
                            <p>Project Start</p>
                            <p>Completed</p>
                        </div>
                        <div class="progressbar">
                            <div class="progress">
                                <div class="progress-bar" style="width:60%">60%</div>
                            </div>
                        </div>
                        <div class="progress-title">
                            <p>0%</p>
                            <p>100%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="section" style="background-color: #f7f8f9;">
        <div class="container">
            <div class="section-heading">
                <h2 class="text-left"><span class="heading-ani">Gallery</span></h2>
            </div>
        </div>


        <div class="details_gallery">
            <img src="assets/images/project-details/1.jpg" alt="1">
            <img src="assets/images/project-details/2.jpg" alt="2">
            <img src="assets/images/project-details/3.jpg" alt="3">
            <img src="assets/images/project-details/4.jpg" alt="4">
            <img src="assets/images/project-details/5.jpg" alt="5">
            <img src="assets/images/project-details/6.jpg" alt="6">
            <img src="assets/images/project-details/1.jpg" alt="1">
            <img src="assets/images/project-details/2.jpg" alt="2">
            <img src="assets/images/project-details/3.jpg" alt="3">
            <img src="assets/images/project-details/4.jpg" alt="4">
            <img src="assets/images/project-details/5.jpg" alt="5">
            <img src="assets/images/project-details/6.jpg" alt="6">
        </div>

        <div class="glightbox" id="lightbox">
            <button id="closeBtn" class="details_gallery_btn">✕</button>
            <button id="prevBtn" class="details_gallery_btn">⟨</button>
            <img src="" alt="Lightbox Image" id="lightboxImg">
            <button id="nextBtn" class="details_gallery_btn">⟩</button>
        </div>
    </section>





    <section class="section " >

        <div class="container">
            <div class="row align-items-center mb-3">
                <div class="col-md-6 col-8">
                    <div class="section-heading mb-0">
                        <h2 class="text-left"><span class="heading-ani">Related Project</span></h2>
                    </div>
                </div>
                <div class="col-md-6 col-4">
                    <div class="text-right" data-aos="fade-left" data-aos-duration="3000">
                        <a href="projects.html" class="btn btn-bas"><span>VIEW ALL</span></a>
                    </div>
                </div>
            </div>


        </div>

        <div class="owl-carousel owl-theme ordinary_slider">
            @foreach($relatedProperties as $relatedProperty)
            <div class="item">
                <a href="#" class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="project-card">
                        <div class="project-badge">
                            <p>Sapphire Series</p>
                        </div>
                        @php
                            $image = $relatedProperty->media->first();
                        @endphp
                        <img class="img-fluid" src="{{ $image ? asset('storage/'.$image->image) : asset('no-image.png') }}">
                        <div class="card-title">
                            <h4>{{ $relatedProperty->title }}</h4>
                            <p>{{ $relatedProperty->status_text }} <span><i class="fa-solid fa-location-dot"></i></span> {{ $relatedProperty->location?->area }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </section>

    <section class="section map_section bg-img" style="background-image: url(assets/images/contact-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-heading">
                        <h2><span class="heading-ani">Location</span></h2>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d58418.587908800175!2d90.398497!3d23.777254!3m2!1i1024!2i768!4f13.1!2m1!1sgreen%20hut%20real%20estate%20company!5e0!3m2!1sen!2sbd!4v1760678909739!5m2!1sen!2sbd" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">
                    <h3 class="title text-center">Enquiry</h3>
                    <form class="landowner_form">
                        <div class="form-group w_100">
                            <input type="text" class="form-control form-control-lg" name="" placeholder="Name">
                        </div>
                        <div class="form-group w_100">
                            <input type="tel" name="" class="form-control form-control-lg" placeholder="Phone">
                        </div>
                        <div class="form-group w_100">
                            <input type="text" name="" class="form-control form-control-lg" placeholder="Email">
                        </div>
                        <div class="form-group w_100">
                            <textarea class="form-control form-control-lg" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group w_100">
                            <button class="btn btn-bas w-100" type="submit"><span>SUBMIT</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('js')
    <script src="{{ asset('frontend/plugin/owl-carousel/owl.carousel.js') }}"></script>
    <script>
        const mainImg = document.getElementById('mainImg');
        const thumbs = document.querySelectorAll('.thumbnails img');
        let current = 0;
        let interval;

        // thumbnail click
        thumbs.forEach((thumb, index) => {
            thumb.addEventListener('click', () => {
                setActive(index);
                resetAutoplay();
            });
        });

        // function to change main image and active class
        function setActive(index) {
            mainImg.src = thumbs[index].src.replace('/100/100', '/600/400');
            thumbs.forEach(t => t.classList.remove('active'));
            thumbs[index].classList.add('active');
            current = index;
        }

        // autoplay function
        function startAutoplay() {
            interval = setInterval(() => {
                current = (current + 1) % thumbs.length;
                setActive(current);
            }, 5000); // change every 3s
        }

        function resetAutoplay() {
            clearInterval(interval);
            startAutoplay();
        }

        // start autoplay
        startAutoplay();
    </script>



    <script>



        // It's duplicate form index
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
    </script>

    <script>
        const details_gallery = document.querySelectorAll('.details_gallery img');
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightboxImg');
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');
        const closeBtn = document.getElementById('closeBtn');

        let currentIndex = 0;

        details_gallery.forEach((img, index) => {
            img.addEventListener('click', () => {
                currentIndex = index;
                showImage();
            });
        });

        function showImage() {
            lightbox.classList.add('active');
            lightboxImg.src = details_gallery[currentIndex].src;
        }

        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % details_gallery.length;
            showImage();
        });

        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + details_gallery.length) % details_gallery.length;
            showImage();
        });

        closeBtn.addEventListener('click', () => {
            lightbox.classList.remove('active');
        });

        // Close on background click
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) lightbox.classList.remove('active');
        });

        // Keyboard support
        document.addEventListener('keydown', (e) => {
            if (!lightbox.classList.contains('active')) return;
            if (e.key === 'ArrowRight') nextBtn.click();
            if (e.key === 'ArrowLeft') prevBtn.click();
            if (e.key === 'Escape') closeBtn.click();
        });
    </script>
@endpush
