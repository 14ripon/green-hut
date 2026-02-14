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
            <form>

                <div class="landowner_form">
                    <div class="form-group label">
                        <h4>Land Information</h4>
                    </div>
                    <div class="form-group w_50">
                        <input type="text" class="form-control form-control-lg" name="" placeholder="Locality">
                    </div>
                    <div class="form-group w_50">
                        <input type="text" class="form-control form-control-lg" name="" placeholder="Address*">
                    </div>
                    <div class="form-group w_50">
                        <input type="text" name="" class="form-control form-control-lg" placeholder="Size of the land in Kathas*">
                    </div>
                    <div class="form-group w_50">
                        <input type="text" name="" class="form-control form-control-lg" placeholder="Width of the road in front (In Feet)*">
                    </div>
                    <div class="form-group w_50">
                        <select name="" class="form-select form-select-lg">
                            <option value="''"> Select Category</option>
                            <option value="Freehold"> Freehold</option>
                            <option value="Leasehold"> Leasehold</option>
                        </select>
                    </div>
                    <div class="form-group w_50">
                        <input type="text" class="form-control form-control-lg" name="" placeholder="Facing*">
                    </div>
                    <div class="form-group w_100">
                        <select name="" class="form-select form-select-lg">
                            <option value="">Attractive features (if any)</option>
                            <option value="Lakeside">Lakeside</option>
                            <option value="Corner Plot">Corner Plot</option>
                            <option value="Park View">Park View</option>
                            <option value="Main Road">Main Road</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
                <div class="landowner_form">
                    <div class="form-group label">
                        <h4>Landowners Information</h4>
                    </div>
                    <div class="form-group w_50">
                        <input type="text" name="" class="form-control form-control-lg" placeholder="Name of the landowner*">
                    </div>
                    <div class="form-group w_50">
                        <input type="text" name="" class="form-control form-control-lg" placeholder="Contact number*">
                    </div>
                    <div class="form-group w_100">
                        <input type="email" name="" class="form-control form-control-lg" placeholder="Email ID*">
                    </div>
                    <div class="form-group w_100">
                        <button class="btn btn-bas" type="submit"><span>Submit</span></button>
                    </div>
                </div>

            </form>

        </div>
    </section>




@endsection
