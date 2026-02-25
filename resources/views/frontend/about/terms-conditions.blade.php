@extends('layouts.app')
@section('title', 'Terms & Conditions')

@push('css')
@endpush

@section('content')
{{--    hero id 4--}}
    <section class="others-pages-hero bg-img section" style="background-image: url({{ asset('storage/'.($otherspagehero->image ?? 'others_page_hero/default.jpg')) }});">
        <div class="container">
            <div class="other-hero-content">
                <h1>{{ $otherspagehero->title ?? 'Terms & Conditions' }}</h1>
            </div>
        </div>
    </section>
    <section class="section single_blog_section">
        <div class="container">
            <div class="some-details">
                <h3 class="title">{{ $termsNConditions->title }}</h3>
                {!! $termsNConditions->content !!}
            </div>
        </div>
    </section>
@endsection
