@extends('layouts.app')
@section('title', 'Property Category')

@push('css')
@endpush

@section('content')

    <section class="others-pages-hero bg-img section" style="background-image: url({{ asset('storage/'.($otherspagehero->image ?? 'others_page_hero/default.jpg')) }});">
        <div class="container">
            <div class="other-hero-content">
                <p>{{ $otherspagehero->sub_title ?? $sub_title}}</p>
                <h1>{{ $otherspagehero->title ?? $title }}</h1>
            </div>
        </div>
    </section>

      <section class="section project-section">
      <div class="container">
        
        <div class="row card-row">

            @forelse ($properties as $property)
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
            @empty
            <h5>No Properties Found</h5>
            @endforelse
          
        </div>
      </div>
    </section>


@endsection
