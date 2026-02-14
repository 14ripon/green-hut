@extends('layouts.app')
@section('title', 'Contact')

@section('content')
{{--  other page hero  id:4--}}
    <section class="others-pages-hero bg-img section" style="background-image: url({{ asset('storage/'.($otherspagehero->image ?? 'others_page_hero/default.jpg')) }});">
        <div class="container">
            <div class="other-hero-content">
                <p>{{ $otherspagehero->sub_title ?? 'Reach out anytime — we’d love to connect.' }}</p>
                <h1>{{ $otherspagehero->title ?? 'Contact Us' }}</h1>
            </div>
        </div>
    </section>

    <section class="address_section section">
        <div class="container">
            <div class="row">
                @foreach($contacts as $contact)
                <div class="col-md-6 mb-4">
                    <div class="card address-card" data-aos="fade-right" data-aos-duration="2000">
                        <div class="card-body">
                            <h4 class="title">{{ $contact->title }}</h4>
                            <p><span><i class="fa-solid fa-location-dot"></i></span>{{ $contact->address }}</p>
                            <p><span><i class="fa-solid fa-phone"></i></span>{{ $contact->phone }}</p>
                            <p><span><i class="fa-solid fa-envelope"></i></span>{{ $contact->email }}</p>
                            <p><span><i class="fa-solid fa-route"></i></span> <a target="_blank" href="{{ $contact->map_url }}">Get Direction</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="map_section">
        <iframe src="{{ ($meeting_content->map_embed ?? 'https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d58418.587908800175!2d90.398497!3d23.777254!3m2!1i1024!2i768!4f13.1!2m1!1sgreen%20hut%20real%20estate%20company!5e0!3m2!1sen!2sbd!4v1760895909451!5m2!1sen!2sbd') }}" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="contact_section section bg-img" style="background-image: url({{ asset('storage/'.($meeting_content->bg_image ?? 'meeting/default-bg.jpg')) }});">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-7">
                    <img class="img-fluid" src="{{ asset('storage/'.($meeting_content->image ?? 'meeting/defailt-image.jpg')) }}" data-aos="fade-right" data-aos-duration="2000">
                </div>
                <div class="col-md-6 col-xl-5">
                    <div class="contact_right_content" data-aos="fade-left" data-aos-duration="2000">
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
