@extends('layouts.app')
@section('title', 'Landowner')

@section('content')
    {{--  other page hero  id:4--}}
    <section class="others-pages-hero bg-img section" style="background-image: url({{ asset('storage/'.($otherspagehero->image ?? 'others_page_hero/default.jpg')) }});">
        <div class="container">
            <div class="other-hero-content">
                <p>{{ $otherspagehero->sub_title ?? 'Manage, List, and Grow the Value of Your Property' }}</p>
                <h1>{{ $otherspagehero->title ?? 'Land Owner Portal' }}</h1>
            </div>
        </div>
    </section>

    <section class="scrolling_section section">
        <div class="container">
            <div class="row scrolling-head align-items-end">
                <div class="col-lg-4 col-xl-3 col-md-4">
                    <img class="parallax-item" data-speed="-2" src="{{ asset('storage/'.($scrolling->image ?? 'scrolling/images/default.jpg')) }}">
                </div>
                <div class="col-lg-8 col-xl-9 col-md-8">
                    <p class="parallax-item" data-speed="">{{ $scrolling->description ?? 'Add Description' }}</p>
                </div>
            </div>
            <div class="news_video" data-aos="fade-left" data-aos-duration="3000">
                <video class="" style="width: 100%;" muted autoplay poster="" preload loop>
                    <source src={{ asset('storage/'.($scrolling->video ?? 'scrolling/videos/default.mp4')) }}" type="video/mp4">
                    <source src="{{ asset('storage/'.($scrolling->video ?? 'scrolling/videos/default.mp4')) }}" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>

    <section class="section section_landowner_contact">
        <div class="container">
            <div class="section-heading">
                <h2 class="text-left"><span class="heading-ani">MEET THE PROFESSIONALS</span></h2>
            </div>
            <form action="{{ route('lands.store') }}" method="POST">
            @csrf

                <div class="landowner_form">
                    <div class="form-group label">
                        <h4>Land Information</h4>
                    </div>
                    <div class="form-group w_50">
                        <input type="text" class="form-control form-control-lg" name="locality" placeholder="Locality">
                    </div>
                    <div class="form-group w_50">
                        <input type="text" class="form-control form-control-lg" name="address" placeholder="Address*">
                    </div>
                    <div class="form-group w_50">
                        <input type="number" step="0.01" name="size_in_katha" class="form-control form-control-lg" placeholder="Size in Katha">
                    </div>
                    <div class="form-group w_50">
                        <input type="number" name="road_width" placeholder="Road Width (Feet)" class="form-control form-control-lg">
                    </div>
                    <div class="form-group w_50">
                        <select name="category" class="form-select form-select-lg">
                            <option value="''"> Select Category</option>
                            <option value="Residential">Residential</option>
                            <option value="Commercial">Commercial</option>
                        </select>
                    </div>
                    <div class="form-group w_50">
                        <select name="facing" class="form-select form-select-lg">
                            <option value="facing">Select Facing</option>
                            <option value="North">North</option>
                            <option value="South">South</option>
                            <option value="East">East</option>
                            <option value="West">West</option>
                        </select>
                    </div>
                    <div class="form-group w_100">
                         <textarea name="attractive_features" placeholder="Attractive Features" class="form-control form-control-lg"></textarea>
                    </div>
                    <div class="form-group label w_100">
                        <h4>Landowners Information</h4>
                    </div>
                    <div class="form-group w_50">
                        <input type="text" name="owner_name" placeholder="Owner Name" class="form-control form-control-lg">
                    </div>
                    <div class="form-group w_50">
                        <input type="text" name="contact_number" placeholder="Contact Number" class="form-control form-control-lg">
                    </div>
                    <div class="form-group w_100">
                        <input type="email" name="email" placeholder="Email" class="form-control form-control-lg">
                    </div>

                </div>
                <div class="landowner_form">
                    <div class="form-group w_100">
                        <button class="btn btn-bas" type="submit"><span>Submit</span></button>
                    </div>
                </div>

            </form>

        </div>
    </section>




@endsection
