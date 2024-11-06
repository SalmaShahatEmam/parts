<div id="app">
    <header>
      <div class="sub-header">
        <div class="main-container">
          <div class="sub-header mka-flex-between">
            <div class="con-links" data-aos="fade-left">
              <ul class="mka-flex-center">
                <li>
                  <a href="" target="_blank">
                    <img src="{{ asset('site/images/location.png') }}" alt="location" />
                    <span class="color-primary1">{{ __('our location') }}</span>
                    <p class="color-gray">{{ getSetting('address') }}</p>
                  </a>
                </li>
                <li>
                  <a href="{{ 'tel:+'.getSetting('phone') }}" target="_blank">
                    <img src="{{ asset('site/images/phone.png')}}" alt="location" />
                    <span class="color-primary1">{{ __('contact us') }}</span>
                    <p class="color-gray">{{ getSetting('phone') }}</p>
                  </a>
                </li>
                <li>
                  <a href="{{ 'mailto:'.getSetting('email') }}" target="_blank">
                    <img src="{{ asset('site/images/mail.png')}}" alt="location" />
                    <span class="color-primary1">{{ __('email') }}</span>
                    <p class="color-gray">{{ getSetting('email') }}</p>
                  </a>
                </li>
              </ul>
            </div>
            <div class="header-soc-links">
              <ul class="mka-flex-center" data-aos="fade-right">


                <li>
                  <a href="{{ getSetting('facebook') }}" target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a href="{{ getSetting('instagram') }}" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="{{'https://wa.me/'. getSetting('whatsapp') }}" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="res-menu" data-aos="fade-right">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-header-two main-container">
        <div class="sub-header-links mka-flex-between">
          <div class="logo" data-aos="fade-left">
            <a href="/"> <img src="{{ asset('site/images/logo.png')}}" alt="logo" /> </a>
          </div>
          <div class="main-links">
            <ul class="mka-flex-center" data-aos="fade-up">
              <li><a href="/" @if( request()->is('/')) class="active" @endif >{{ __('home') }}</a></li>
              <li><a href="{{ route('site.about') }}"  @if( request()->is('about')) class="active" @endif >{{ __('about us') }}</a></li>
              <li><a href="{{ route('site.services') }}"  @if( request()->is('services')) class="active" @endif >{{ __('our services') }}</a></li>
              <li><a href="{{ route('site.branches') }}"  @if( request()->is('branches')) class="active" @endif >{{ __('our branches') }}</a></li>
              <li><a href="{{ route('site.contact') }}" @if( request()->is('contact')) class="active" @endif >{{ __('contact us') }}</a></li>
              <li>
                <a href="{{ route('site.lang', app()->getLocale() == 'ar' ? 'en' : 'ar') }}">
                    {{ app()->getLocale() == 'ar' ? __('English') : __('Arabic') }}
                </a>
            </li>
            </ul>
          </div>
          <div class="main-btn mn-btn" data-aos="fade-right">
            <a href="{{ route('site.services') }}"> <p>{{ __('request our services') }}</p> </a>
          </div>
        </div>
      </div>
     @include('site.layouts.hero')
    </header>
</div>
