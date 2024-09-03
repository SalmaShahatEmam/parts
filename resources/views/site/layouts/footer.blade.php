<!-- start footer -->
<footer>
    <div class="main-container">
        <div class="top-footer">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 d-flex flex-column gap-3">
                    <a href="/" class="footer-logo">
                        <img src="{{ asset('storage/' . $setting->logo_footer) }} " alt="">
                    </a>
                    <p>
                        {{ $setting->{'decs_footer_' . app()->getLocale()} }}
                    </p>
                    <ul class="social">
                        <li>
                            <a target="__blank" href="{{ $setting->instagram }}"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li>
                            <a target="__blank" href="{{ $setting->linkedin }}"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a  target="__blank" href="{{ $setting->facebook }}"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li>
                            <a target="__blank" href=" https://wa.me/{{ $setting->whatsapp  }}"><i class="fa-brands fa-whatsapp"></i></a>
                        </li>
                        <li>
                            <a target="__blank" href="{{ $setting->twitter }}"><i class="fa-brands fa-x-twitter"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-6">
                            <h4>{{ __('معلومات') }}</h4>
                            <div class="footer-links">
                                <ul>
                                    <li><a href="{{ route('site.about') }}">{{ __('من نحن') }}</a></li>
                                    <li><a href="{{ route('site.about') }}#team">{{ __('فريق العمل') }}</a></li>
                                    <li><a href="{{ route('site.projects') }}">{{ __('المشاريع') }}</a></li>
                                    <li><a href="{{ route('site.contact') }}">{{ __('اتصل بنا') }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <h4>{{ __('روابط مهمة') }}</h4>
                            <div class="footer-links">
                                <ul>
                                    <li><a href="{{ route('site.services') }}">{{ __('الخدمات') }}</a></li>
                                    <li><a href="{{ route('site.blogs') }}">{{ __('المدونة') }}</a></li>
                                    <li>
                                        <a href="{{ route('site.regulations') }}">{{ __('اللوائح والسياسات') }}</a>
                                    </li>
                                    <li><a href="{{ route('site.contracts.platform') }}">{{ __('منصة العقود') }}</a></li>
                                    <li><a href="{{ route('site.partners') }}">{{ __('شركاء النجاح') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copy__write">
        <p>

            {{ __('كل الحقوق محفوظة') }} {{ $setting->{'site_name_' . app()->getLocale()} }} &copy;
            {{ date('Y') }}
        </p>

        <a href="https://jaadara.com/" target="_blank">
            {{ __('صنع بكل حب') }} <span> ❤ </span> {{ __('في معامل جدارة') }}
        </a>
    </div>
</footer>

<!-- start menu responsive =========== -->
<div class="bg_menu"></div>
<div class="menu_responsive" id="menu-div">
    <div class="element_menu_responsive">
        <!-- <a href="/" class="logo-container">
                  <img src="images/logo.png">
              </a> -->
        <div class="element">
            <ul>
                <li><a href="/">الرئيسية</a></li>
                <li><a href="/aboutus.html">من نحن </a></li>
                <li><a href="/services.html">خدماتنا </a></li>
                <li><a href="/projects.html">المشاريع</a></li>
                <li><a href="/blogs.html">المدونة</a></li>
                <li><a href="/partners.html">شركاء النجاح</a></li>
                <li><a href="/regulationspolicies.html">اللوائح والسياسات</a></li>
                <li><a href="/contracts.html">منصة العقود</a></li>
                <li><a href="/contactus.html">تواصل معنا</a></li>
            </ul>
        </div>
        <div class="language">
            <div class="dropdown">
                <button class="dropbtn">
                    <i class="fa-solid fa-angle-down"></i> AR
                </button>
                <div class="dropdown-content">
                    <a href="#">EN</a>
                </div>
            </div>
        </div>
    </div>

    <div class="remove-mune">
        <span></span>
    </div>
</div>


@include('site.layouts.script')
</body>

</html>
