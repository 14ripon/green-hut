@extends('layouts.app')
@section('title', 'Privacy Policy')

@push('css')
@endpush

@section('content')
{{--    hero id 4--}}
    <section class="others-pages-hero bg-img section" style="background-image: url({{ asset('storage/'.($otherspagehero->image ?? 'others_page_hero/default.jpg')) }});">
        <div class="container">
            <div class="other-hero-content">
                <h1>{{ $otherspagehero->title ?? 'Privacy Policy' }}</h1>
            </div>
        </div>
    </section>
    <section class="section single_blog_section">
        <div class="container">
            <div class="some-details">
                <h3 class="title">Privacy Policy</h3>
                <p>At Green Hut Real Estate, we value your trust and are committed to protecting your personal information. This Privacy Policy explains how we collect, use, and safeguard your information when you visit our website.</p>
                <h4 class="title">1. Information We Collect</h4>
                <p>We may collect the following types of information when you interact with our website:</p>
                <ul>
                    <li>Personal details such as your name, phone number, and email address when you submit an inquiry or register on our site.</li>
                    <li>Property preferences or requirements shared through forms or messages.</li>
                    <li>Technical information such as your IP address, browser type, and pages visited for analytical purposes.</li>
                </ul>
                <h4 class="title">2. How We Use Your Information</h4>
                <p>Your information may be used to:</p>
                <ul>
                    <li>Respond to property inquiries and provide requested services.</li>
                    <li>Improve our website’s functionality and user experience.</li>
                    <li>Share updates, offers, or property information (if you have opted in).</li>
                    <li>Ensure compliance with legal obligations.</li>
                </ul>
                <h4 class="title">3. Sharing of Information</h4>
                <ul>
                    <li>We do not sell, trade, or rent users’ personal information to third parties.</li>
                    <li>Information may be shared with trusted partners (e.g., property owners, agents, or developers) only when necessary to provide requested services.</li>
                    <li>We may disclose information if required by law or to protect our rights and safety.</li>
                </ul>
                <h4 class="title">4. Data Security</h4>
                <p>We take reasonable measures to protect your personal data against unauthorized access, alteration, or disclosure. However, no internet transmission or storage method is completely secure, and we cannot guarantee absolute security.</p>
                <h4 class="title">5. Cookies and Tracking</h4>
                <p>Our website may use cookies or similar technologies to enhance user experience and analyze website performance. You can disable cookies in your browser settings, though some features may not work properly.</p>
                <h4 class="title">6. Third-Party Links</h4>
                <p>Our website may include links to third-party websites. Green Hut Real Estate is not responsible for the privacy practices or content of these external sites.</p>
                <h4 class="title">7. Your Rights</h4>
                <p>You have the right to:</p>
                <ul>
                    <li>Request access to the personal data we hold about you.</li>
                    <li>Request correction or deletion of your personal data.</li>
                    <li>Opt out of receiving marketing communications at any time.</li>
                </ul>
                <h4 class="title">8. Updates to This Policy</h4>
                <p>Green Hut Real Estate reserves the right to update or change this Privacy Policy at any time. Changes will be posted on this page with the updated date.</p>
                <h4 class="title">9. Contact Us</h4>
                <p>If you have any questions about this Privacy Policy or how your data is handled, please contact us at: Green Hut Real Estate</p>

            </div>

        </div>
    </section>
@endsection
