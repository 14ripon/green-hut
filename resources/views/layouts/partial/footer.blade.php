<!-- Footer -->
<footer class="footer-section bg-img" style="background-image: url({{ asset('frontend/images/footer-bg.jpg') }});">
    <a href="{{ $siteSettings->whatsapp ?? 'https://wa.me/8801754720343' }}" class="whatsapp-float" target="_blank" title="Chat on WhatsApp">
        <img src="{{ asset('frontend/images/WhatsApp.svg') }}" alt="WhatsApp">
    </a>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <a href="#" class="footer-logo">
                    <img src="{{ asset('Storage/'.($siteSettings->footer_logo ?? 'site-settings/logo-1.png')) }}" alt="{{ $siteSettings->site_name ?? 'My website' }}">
                </a>
                <div class="social-icons mt-5">
                    <h3>Join us</h3>
                    <a href="{{ $siteSettings->facebook ?? '' }}" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ $siteSettings->twitter ?? '' }}" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="{{ $siteSettings->instagram ?? '' }}" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="{{ $siteSettings->linkedin ?? '' }}" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="common-links">
                    <h3>Contact Info</h3>
                    <div style="position: relative">
                        <div class="contact-info">
                            <p><span><i class="fa-solid fa-location-dot"></i></span> <span>{{ $siteSettings->address ?? 'Darikandi Bancharampur Brahmanbaria' }}</span></p>
                            <p><span><i class="fa-solid fa-message"></i></span> <a href="mailto:{{ $siteSettings->email ?? 'zhripon97@gmail.com' }}">{{ $siteSettings->email ?? 'zhripon97@gmail.com' }}</a></p>
                            <p><span><i class="fa-solid fa-phone"></i></span> <a href="tel:{{ $siteSettings->phone ?? '01754720343' }}">{{ $siteSettings->phone ?? '01754720343' }}</a></p>
                        </div>
                        <div class="memeber-img">
                            <img class="img-fluid" src="{{ asset('frontend/images/rehab.png') }}">
                            <img class="img-fluid" src="{{ asset('frontend/images/fotter-img.jpg') }}">
                        </div>
                    </div>

                </div>
            </div>
            <div class="others-links">
                <a href="terms-conditions.html">Terms &amp; Conditions</a>
                <a href="privacy-policy.html">Privacy Policy</a>
                <a href="about.html">About Us</a>
                <a href="contact.html">Contact Us</a>
            </div>

        </div>
        <hr style="color: white; margin: 0">
        <div class="copyright">
            <p>{{ $siteSettings->copyright_text ?? '' }} <a href="mailto:zhripon97@gmail.com" target="_blank">Designed & Developed by Ripon</a></p>
        </div>
</footer>
<!--/ Footer -->
