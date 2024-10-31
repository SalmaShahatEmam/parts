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
                    <span class="color-primary1"> موقعنا : </span>
                    <p class="color-gray">المملكة العربية السعودية</p>
                  </a>
                </li>
                <li>
                  <a href="https://wa.me/0488086778889" target="_blank">
                    <img src="{{ asset('site/images/phone.png')}}" alt="location" />
                    <span class="color-primary1"> اتصل بنا :</span>
                    <p class="color-gray">0488086778889</p>
                  </a>
                </li>
                <li>
                  <a href="mailto:trading@gmail.com" target="_blank">
                    <img src="{{ asset('site/images/mail.png')}}" alt="location" />
                    <span class="color-primary1"> البريد الالكتروني : </span>
                    <p class="color-gray">parts&more for trading@gmail.com</p>
                  </a>
                </li>
              </ul>
            </div>
            <div class="header-soc-links">
              <ul class="mka-flex-center" data-aos="fade-right">
                <li>
                  <a href="#"> <span> EN </span> </a>
                </li>
                <li>
                  <a href="https://facebook.com" target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a href="https://instagram.com" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="https://wa.me/" target="_blank">
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
              <li><a href="/" class="active"> الرئيسية </a></li>
              <li><a href="{{ route('site.about') }}"> من نحن </a></li>
              <li><a href="{{ route('site.services') }}"> خدماتنا </a></li>
              <li><a href="{{ route('site.branches') }}"> فروعنا </a></li>
              <li><a href="{{ route('site.contact') }}"> تواصل معنا </a></li>
            </ul>
          </div>
          <div class="main-btn mn-btn" data-aos="fade-right">
            <a href="/services.html"> <p>اطلب منتجاتنا الان</p> </a>
          </div>
        </div>
      </div>
     @include('site.layouts.hero')
    </header>
