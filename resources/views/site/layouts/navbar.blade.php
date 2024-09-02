<section class="header" @yield('background-image')>
    <nav>
        <div class="main-container">
            <a href="/" class="logo-container">
                <img src="{{ asset('storage/' . $setting->logo) }}" />
            </a>
            <div class="element">
                <ul>
                    <li><a class="{{ isActiveRoute('site.home') }} " href="/">{{ __('الرئيسية') }}</a></li>
                    <li><a class="{{ isActiveRoute('site.about') }}" href="{{ route('site.about') }}" > {{ __('من نحن') }}</a></li>
                    <li><a class="{{ isActiveRoute('site.services') }}" href="{{ route('site.services') }}">  {{ __('خدماتنا') }} </a></li>
                    <li><a class="{{ isActiveRoute('site.projects') }}" href="{{ route('site.projects') }}">  {{ __('المشاريع') }}</a></li>
                    <li><a class="{{ isActiveRoute('site.blogs') }}" href="{{ route('site.blogs') }}"  >{{ __('المدونة') }}</a></li>
                    <li><a class="{{ isActiveRoute('site.partners') }}" href="{{ route('site.partners') }}"  >{{ __('شركاء النجاح') }}</a></li>
                    <li><a class="{{ isActiveRoute('site.regulations') }}" href="{{ route('site.regulations') }}"  >{{ __('اللوائح والسياسات') }}</a></li>
                    <li><a class="{{ isActiveRoute('site.about') }}" href="{{ route('site.about') }}"  >{{ __('منصة العقود') }}</a></li>
                    <li><a class="{{ isActiveRoute('site.contact') }}" href="{{ route('site.contact') }}"  >{{ __('تواصل معنا') }}</a></li>
                </ul>
            </div>
            <div class="language">
                <div class="dropdown">
                    <button class="dropbtn">
                        <i class="fa-solid fa-angle-down"></i> {{ app()->getLocale() == 'ar' ? 'AR' : 'EN' }}
                    </button>
                    <div class="dropdown-content">
                        <a href="{{ route('site.lang', app()->getLocale() == 'ar' ? 'en' : 'ar') }}">
                            {{ app()->getLocale() == 'ar' ? 'EN' : 'AR' }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-div">
                <div class="content" id="times-ican">
                    <a href="#" title="Navigation menu" class="navicon" aria-label="Navigation">
                        <span class="navicon__item"></span>
                        <span class="navicon__item"></span>
                        <span class="navicon__item"></span>
                        <span class="navicon__item"></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('header-hero')

</section>
<!-- start menu responsive =========== -->
<div class="bg_menu"></div>
<div class="menu_responsive" id="menu-div">
  <div class="element_menu_responsive">
    <!-- <a href="/" class="logo-container">
                <img src="images/logo.png">
            </a> -->
    <div class="element">
      <ul>
        <li><a class="{{ isActiveRoute('site.home') }} " href="/">{{ __('الرئيسية') }}</a></li>
        <li><a class="{{ isActiveRoute('site.about') }}" href="{{ route('site.about') }}" > {{ __('من نحن') }}</a></li>
        <li><a class="{{ isActiveRoute('site.services') }}" href="{{ route('site.services') }}">  {{ __('خدماتنا') }} </a></li>
        <li><a class="{{ isActiveRoute('site.projects') }}" href="{{ route('site.projects') }}">  {{ __('المشاريع') }}</a></li>
        <li><a class="{{ isActiveRoute('site.blogs') }}" href="{{ route('site.blogs') }}"  >{{ __('المدونة') }}</a></li>
        <li><a class="{{ isActiveRoute('site.partners') }}" href="{{ route('site.partners') }}"  >{{ __('شركاء النجاح') }}</a></li>
        <li><a class="{{ isActiveRoute('site.regulations') }}" href="{{ route('site.regulations') }}"  >{{ __('اللوائح والسياسات') }}</a></li>
        <li><a class="{{ isActiveRoute('site.about') }}" href="{{ route('site.about') }}"  >{{ __('منصة العقود') }}</a></li>
        <li><a class="{{ isActiveRoute('site.contact') }}" href="{{ route('site.contact') }}"  >{{ __('تواصل معنا') }}</a></li>
      </ul>
    </div>
    <div class="language">
      <div class="dropdown">
        <button class="dropbtn">
          <i class="fa-solid fa-angle-down"></i> {{ app()->getLocale() == 'ar' ? 'AR' : 'EN' }}
        </button>
        <div class="dropdown-content">
          <a href="{{ route('site.lang', app()->getLocale() == 'ar' ? 'en' : 'ar') }}">
            {{ app()->getLocale() == 'ar' ? 'EN' : 'AR' }}
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="remove-mune">
    <span></span>
  </div>
</div>
<!-- end menu responsive =========== -->
