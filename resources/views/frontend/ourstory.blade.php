@extends('layouts.app')



@section('title', 'Our Story')

@section('content')
    <section class="others-pages-hero bg-img section" style="background-image: url({{ asset('storage/'.($otherspagehero->image ?? 'others_page_hero/default.jpg')) }});">
        <div class="container">
            <div class="other-hero-content">
                <!-- <p>{{ $otherspagehero->sub_title ?? 'Insights, updates, and stories from our journey.' }}</p> -->
                <h1>{{ $otherspagehero->title ?? 'Our Story' }}</h1>
            </div>
        </div>
    </section>

    <section class="section our_story_section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6" data-aos="fade-right" data-aos-duration="3000">
          <img class="img-fluid" src="{{ asset('frontend/images/story/story-1.jpg') }}">
        </div>
        <div class="col-md-6" data-aos="fade-left" data-aos-duration="3000">
          <div class="some-details">
            <h3 class="title">The Beginning</h3>
            <p>Every dream starts with a vision, and ours was clear from the very first day—to build more than just properties, to create lasting communities. We understood that a home is not just four walls and a roof; it is where memories are made, where families grow, and where futures are shaped. With that belief, our journey began, guided by passion, dedication, and a commitment to redefine modern living.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section our_story_section" style="background-color:#F8F8F8;">
    <div class="container">
      <div class="row align-items-center flex-direction-md-reverse">
        <div class="col-md-6" data-aos="fade-right" data-aos-duration="3000">
          <div class="some-details">
            <h3 class="title">Our Philosophy</h3>
            <p>At the heart of our work lies a simple philosophy: real estate is about people, not just projects. We believe in designing spaces that blend functionality with beauty, comfort with security, and innovation with sustainability. Every project we undertake is rooted in transparency, trust, and a promise to deliver value that stands the test of time. For us, success is measured not only by what we build, but by the lives we touch and the communities we inspire.</p>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-left" data-aos-duration="3000">
          <img class="img-fluid" src="{{ asset('frontend/images/story/story-2.jpg') }}">
        </div>
      </div>
    </div>
  </section>
  <section class="section our_story_section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6" data-aos="fade-right" data-aos-duration="3000">
          <img class="img-fluid" src="{{ asset('frontend/images/story/story-3.jpg') }}">
        </div>
        <div class="col-md-6" data-aos="fade-left" data-aos-duration="3000">
          <div class="some-details">
            <h3 class="title">The Growth</h3>
            <p>From humble beginnings, we have steadily grown into a trusted name in real estate. Each milestone achieved has been fueled by the trust of our clients and the dedication of our team. Our projects reflect careful planning, thoughtful design, and world-class standards of quality. Over the years, we have transformed landscapes into landmarks, creating homes and spaces that reflect modern lifestyles while staying connected to tradition and community values.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section our_story_section" style="background-color:#F8F8F8;">
    <div class="container">
      <div class="row align-items-center flex-direction-md-reverse">
        <div class="col-md-6" data-aos="fade-right" data-aos-duration="3000">
          <div class="some-details">
            <h3 class="title">The Future Ahead</h3>
            <p>Our story is still being written, and the best chapters are yet to come. As we look to the future, we remain focused on innovation, sustainability, and excellence in everything we do. With every new project, we aim to raise the benchmark for real estate by offering smart solutions, eco-friendly designs, and spaces that bring people together. The journey continues—with you at the center of it—because our story is not just about building projects, it’s about building futures.</p>
          </div>
        </div>
         <div class="col-md-6" data-aos="fade-left" data-aos-duration="3000">
          <img class="img-fluid" src="{{ asset('frontend/images/story/story-4.jpg') }}">
        </div>
      </div>
    </div>
  </section>

    
@endsection
