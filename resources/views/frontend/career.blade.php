@extends('layouts.app')
@section('title', 'Career')

@section('content')
    {{--  other page hero  id:4--}}
    <section class="others-pages-hero bg-img section" style="background-image: url({{ asset('storage/'.($otherspagehero->image ?? 'others_page_hero/default.jpg')) }});">
        <div class="container">
            <div class="other-hero-content">
                <p>{{ $otherspagehero->sub_title ?? 'Discover roles that match your talent and ambition at Green Hut Real Estate.' }}</p>
                <h1>{{ $otherspagehero->title ?? 'Build Your Future With Us' }}</h1>
            </div>
        </div>
    </section>

    <section class="section career_section">
        <div class="container">
            <div class="row">
                @foreach ($careers as $career)
                <div class="col-md-6"  data-aos="fade-left" data-aos-duration="3000">
                    <a href="#" class="career-card">
                        <div class="career-card-head">
                            <div class="card-title">
                                <h3>{{ $career->title }}</h3>
                            </div>
                            <div class="career-bandge
                                @if($career->status === 'in_progress')
                                    badge-medium
                                @elseif($career->status === 'closed')
                                    badge-high
                                @endif
                            ">
                                <div class="spinner-grow spinner-grow-sm"></div> {{$career->status}}
                            </div>
                        </div>
                        <p>{{ $career->description }}</p>
                        <div class="career-card-footer">
                            <h6>#{{ $career->id }} 
                                @if($career->priority === 'high')
                                    <span class="high">{{ $career->priority }}</span>
                                @elseif($career->priority === 'medium')
                                    <span class="medium">{{ $career->priority }}</span>
                                @else
                                    <span class="">{{ $career->priority }}</span>
                                @endif
                            </h6>
                            <h5>Olivia Taylor <i class="fa-solid fa-calendar-days"></i> {{ $career->created_at->Format('Y-m-d') }}</h5>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
