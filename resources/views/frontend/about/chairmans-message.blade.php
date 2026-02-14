@extends('layouts.app')
@section('title', 'Chairmans Message')

@section('content')
    <section class="others-pages-hero bg-img section" style="background-image: url({{ asset('storage/'.($otherspagehero->image ?? 'others_page_hero/default.jpg')) }});">
        <div class="container">
            <div class="other-hero-content">
                <h1>{{ $otherspagehero->title ?? "Chairman's Message" }}</h1>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">

            <div class="row">
                <div class="col-md-4" data-aos="fade-right" data-aos-duration="3000">
                    <div class="chairman-info">
                        <img class="img-fluid" src="{{ asset('storage/'.($chairman->photo ?? 'default.jpg')) }}">
                        <h3 class="title">{{ $chairman->name }}</h3>
                        <p>{{ $chairman->designation }}</p>
                    </div>
                </div>
                <div class="col-md-8" data-aos="fade-left" data-aos-duration="3000">
                    <div class="some-details">
                        {!! $chairman->message !!}
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
