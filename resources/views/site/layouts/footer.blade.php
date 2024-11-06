<footer style="background-image: url('{{ asset('site/images/footer-bg.png') }}')">
    <div class="main-container">
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="logo-footer">
                    <a href="/"><img src="{{ asset('site/images/logo.png')}}" alt="" /></a>
                </div>
                <div class="desc">
                    {{ __('Spare Parts & More Trading specializes in the import and sale of wholesale and retail car spare parts through our branches. Spare parts are essential components that help maintain vehicle performance and ensure passenger safety.') }}
                </div>
                <div class="footer-links">
                    <a href="{{ 'https://wa.me/'.getSetting('whatsapp') }}" target="_blank">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="{{ getSetting('instagram') }}" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="{{ getSetting('facebook') }}" target="_blank">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="footer-heading">{{ __('Quick Links') }}</div>
                <ul>
                    <li><a href="/" class="active">{{ __('Home') }}</a></li>
                    <li><a href="{{ route('site.about') }}">{{ __('About Us') }}</a></li>
                    <li><a href="{{ route('site.services') }}">{{ __('Our Services') }}</a></li>
                    <li><a href="{{ route('site.branches') }}">{{ __('Our Branches') }}</a></li>
                    <li><a href="{{ route('site.contact') }}">{{ __('Contact Us') }}</a></li>
                </ul>
            </div>
            <div class="col-12 col-lg-4">
                <div class="footer-heading">{{ __('Newsletter') }}</div>
                <div class="footer-news">
                    {{ __('Subscribe to our newsletter to stay updated on the latest in car spare parts.') }}
                </div>
                <div class="footer-frm">
                    <form id="blogEmail" action="{{ route('site.blog.user') }}" method="post">
                        @csrf
                        <input type="text" placeholder="{{ __('Enter your email') }}" name="email" />
                        <span class="email-errorq error-text text-danger"></span>
                        <button type="submit">{{ __('Send') }}</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="copy-write">
            <p>{{ __('All rights reserved') }} &copy; {{ __('2024 for Spare Parts & More Trading Co.') }}</p>

{{--             {{ __('All rights reserved &copy;2024 for Spare Parts & More Trading Co.') }}
 --}}        </div>

        <div class="footer-contact">
            <a class="icon" href="{{ 'https://wa.me/'.getSetting('whatsapp') }}" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
            <a class="icon" href="{{ 'tel:+'.getSetting('phone') }}" target="_blank">
                <i class="fa-solid fa-phone-volume"></i>
            </a>
        </div>
    </div>
</footer>

<!-- responsive menu -->
<div class="overlay"></div>
<div class="responsive-menu">
    <div class="close-menu">X</div>
    <div class="res-logo">
        <a href="/"> <img src="{{ asset('site/images/logo.png')}}" alt="logo" /> </a>
    </div>
    <ul class="mka-flex-center">
        <li><a href="/" @if( request()->is('/')) class="active" @endif>{{ __('Home') }}</a></li>
        <li><a href="{{ route('site.about') }}" @if( request()->is('about')) class="active" @endif >{{ __('About Us') }}</a></li>
        <li><a href="{{ route('site.services') }}" @if( request()->is('services')) class="active" @endif>{{ __('Our Services') }}</a></li>
        <li><a href="{{ route('site.branches') }}" @if( request()->is('branches')) class="active" @endif>{{ __('Our Branches') }}</a></li>
        <li><a href="{{ route('site.contact') }}" @if( request()->is('contact')) class="active" @endif>{{ __('Contact Us') }}</a></li>
    </ul>
</div>

@include('site.layouts.script')
</body>
</html>
