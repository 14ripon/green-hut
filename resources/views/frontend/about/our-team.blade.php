@extends('layouts.app')
@section('title', 'Our Team')

@push('css')
@endpush

@section('content')
{{--    hero id 3--}}
    <section class="others-pages-hero bg-img section" style="background-image: url({{ asset('storage/'.($otherspagehero->image ?? 'others_page_hero/default.jpg')) }});">
        <div class="container">
            <div class="other-hero-content">
                <p>{{ $otherspagehero->sub_title ?? 'The people behind our success' }}</p>
                <h1>{{ $otherspagehero->title ?? 'Meet Our Team' }}</h1>
            </div>
        </div>
    </section>

    <section class="section team_section">
        <div class="container">
            <div class="row">
                @foreach($teams as $team)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="team-card" data-aos="fade-left" data-aos-duration="3000">
                        <img src="{{ asset('storage/'.($team->image ?? 'teams/default.jpg')) }}">
                        

                        <div class="overlay">
                            <a href="#"><h4>{{ $team->name }}</h4></a>
                            <p>{{ $team->title }}</p>
                            <div class="social-link">
                                <a href="{{ $team->social->facebook }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="{{ $team->social->linkedin }}"><i class="fa-brands fa-linkedin-in" target="_blank"></i></a>
                                <a href="{{ $team->social->whats_app }}"><i class="fa-brands fa-whatsapp" target="_blank"></i></a>
                                <a href="tel:{{ $team->social->phone }}"><i class="fa-solid fa-phone" target="_blank"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
