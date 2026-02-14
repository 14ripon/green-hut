@extends('layouts.app')



@section('title', 'Blog')

@section('content')
    <section class="others-pages-hero bg-img section" style="background-image: url({{ asset('storage/'.($otherspagehero->image ?? 'others_page_hero/default.jpg')) }});">
        <div class="container">
            <div class="other-hero-content">
                <p>{{ $otherspagehero->sub_title ?? 'Insights, updates, and stories from our journey.' }}</p>
                <h1>{{ $otherspagehero->title ?? 'Blogs' }}</h1>
            </div>
        </div>
    </section>

    <section class="section blogs_section">
        <div class="container">
            <div class="row blogs-card">
                <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="3000">
                    <a href="single-blog.html" class="blog-card">
                        <div class="blog-thumnail">
                            <img class="img-fluid" src="{{ asset('frontend/images/blog/blog-1.jpg') }}">
                        </div>
                        <div class="blog-card-body">
                            <h6>04 Aug 2025</h6>
                            <h4 class="title">Top Real Estate Investment Tips for Navigating Dubai</h4>
                            <p>Tips for Investing in Dubai’s Thriving Real Estate MarketDubai’s property market has become one of…</p>
                            <span class="btn-text">READ MORE</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="3000">
                    <a href="single-blog.html" class="blog-card">
                        <div class="blog-thumnail">
                            <img class="img-fluid" src="{{ asset('frontend/images/blog/blog-2.jpg') }}">
                        </div>
                        <div class="blog-card-body">
                            <h6>04 Aug 2025</h6>
                            <h4 class="title">Top Real Estate Investment Tips for Navigating Dubai</h4>
                            <p>Tips for Investing in Dubai’s Thriving Real Estate MarketDubai’s property market has become one of…</p>
                            <span class="btn-text">READ MORE</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="3000">
                    <a href="single-blog.html" class="blog-card">
                        <div class="blog-thumnail">
                            <img class="img-fluid" src="{{ asset('frontend/images/blog/blog-3.jpg') }}">
                        </div>
                        <div class="blog-card-body">
                            <h6>04 Aug 2025</h6>
                            <h4 class="title">Top Real Estate Investment Tips for Navigating Dubai</h4>
                            <p>Tips for Investing in Dubai’s Thriving Real Estate MarketDubai’s property market has become one of…</p>
                            <span class="btn-text">READ MORE</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="3000">
                    <a href="single-blog.html" class="blog-card">
                        <div class="blog-thumnail">
                            <img class="img-fluid" src="{{ asset('frontend/images/blog/blog-4.jpg') }}">
                        </div>
                        <div class="blog-card-body">
                            <h6>04 Aug 2025</h6>
                            <h4 class="title">Top Real Estate Investment Tips for Navigating Dubai</h4>
                            <p>Tips for Investing in Dubai’s Thriving Real Estate MarketDubai’s property market has become one of…</p>
                            <span class="btn-text">READ MORE</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="3000">
                    <a href="single-blog.html" class="blog-card">
                        <div class="blog-thumnail">
                            <img class="img-fluid" src="{{ asset('frontend/images/blog/blog-5.jpg') }}">
                        </div>
                        <div class="blog-card-body">
                            <h6>04 Aug 2025</h6>
                            <h4 class="title">Top Real Estate Investment Tips for Navigating Dubai</h4>
                            <p>Tips for Investing in Dubai’s Thriving Real Estate MarketDubai’s property market has become one of…</p>
                            <span class="btn-text">READ MORE</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="3000">
                    <a href="single-blog.html" class="blog-card">
                        <div class="blog-thumnail">
                            <img class="img-fluid" src="{{ asset('frontend/images/blog/blog-6.jpg') }}">
                        </div>
                        <div class="blog-card-body">
                            <h6>04 Aug 2025</h6>
                            <h4 class="title">Top Real Estate Investment Tips for Navigating Dubai</h4>
                            <p>Tips for Investing in Dubai’s Thriving Real Estate MarketDubai’s property market has become one of…</p>
                            <span class="btn-text">READ MORE</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="3000">
                    <a href="single-blog.html" class="blog-card">
                        <div class="blog-thumnail">
                            <img class="img-fluid" src="{{ asset('frontend/images/blog/blog-7.jpg') }}">
                        </div>
                        <div class="blog-card-body">
                            <h6>04 Aug 2025</h6>
                            <h4 class="title">Top Real Estate Investment Tips for Navigating Dubai</h4>
                            <p>Tips for Investing in Dubai’s Thriving Real Estate MarketDubai’s property market has become one of…</p>
                            <span class="btn-text">READ MORE</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="3000">
                    <a href="single-blog.html" class="blog-card">
                        <div class="blog-thumnail">
                            <img class="img-fluid" src="{{ asset('frontend/images/blog/blog-8.jpg') }}">
                        </div>
                        <div class="blog-card-body">
                            <h6>04 Aug 2025</h6>
                            <h4 class="title">Top Real Estate Investment Tips for Navigating Dubai</h4>
                            <p>Tips for Investing in Dubai’s Thriving Real Estate MarketDubai’s property market has become one of…</p>
                            <span class="btn-text">READ MORE</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="3000">
                    <a href="single-blog.html" class="blog-card">
                        <div class="blog-thumnail">
                            <img class="img-fluid" src="{{ asset('frontend/images/blog/blog-9php.jpg') }}">
                        </div>
                        <div class="blog-card-body">
                            <h6>04 Aug 2025</h6>
                            <h4 class="title">Top Real Estate Investment Tips for Navigating Dubai</h4>
                            <p>Tips for Investing in Dubai’s Thriving Real Estate MarketDubai’s property market has become one of…</p>
                            <span class="btn-text">READ MORE</span>
                        </div>
                    </a>
                </div>



            </div>
            <div class="text-center mt-5" data-aos="fade-left" data-aos-duration="3000">
                <a href="#" class="btn btn-bas"><span>LOAD MORE</span></a>
            </div>
        </div>
    </section>
@endsection
