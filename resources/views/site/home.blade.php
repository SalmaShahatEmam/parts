@extends('site.layouts.app')
@section('title', __('الرئيسية'))

@include('site.layouts.seo')


@section('header-hero')
    <div class="owl-carousel">
        @forelse ($sliders as $slider)
            <div class="item" style="background-image: url('{{ $slider->background_image_path }}')">
                <div class="landing">
                    <div class="main-container">
                        <div class="row">
                            <div class="col-lg-7 col-md-6 col-sm-12">
                                <div class="landing-text">
                                    <h2>{{ $slider->name }}</h2>
                                    <h4>
                                        {{ $slider->desc }}
                                    </h4>
                                    <a href="{{ route('site.services') }}">{{ __('اطلب الخدمة') }}</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="landing-img mask1">
                                    <img src="{{ $slider->image_path }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="item" style="background-image: url('{{ asset('site/images/landing-bg.png') }}')">
                <div class="landing">
                    <div class="main-container">
                        <div class="row">
                            <div class="col-lg-7 col-md-6 col-sm-12">
                                <div class="landing-text">
                                    <h2>{{ __('افضل خدمات تقنية معلومات في المملكة') }}</h2>
                                    <h4>
                                        {{ __('نحن نوفر افضل انظمة حماية من الحرائق والسرقة وافضل انظمة حضور وانصراف لكي نساعدك ان تحيا حياة افضل واكثر راحة ونوفرلك الامن والامان ونساعدك علي استثمار المزيد من وقتك في امور اكثر اهمية') }}
                                    </h4>
                                    <a href="{{ route('site.services') }}">{{ __('اطلب الخدمة') }}</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="landing-img mask1">
                                    <img src="{{ asset('site/images/blog-img-4.png') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforelse


    </div>
@endsection



@section('content')
    <!-- About Company Section -->
    <section class="about__company">
        <div class="main-container">
            <div class="about__company__content">
                <div class="about__company__text">
                    <a href="{{ route('site.about') }}" class="about__company__text__header">
                        <div class="img">
                            <img src="{{ asset('site/images/about-us-img.png') }}" alt="logo" />

                        </div>
                        <h2>{{ __('نبذة عن الشركة') }}</h2>
                    </a>
                    <p>
                        {!! $setting->{'about_desc_' . app()->getLocale()} !!}
                    </p>
                    <div class="about__company__btn">
                        <div class="text">{{ __('معرفة المزيد') }}</div>
                        <div class="icons">
                            <i class="fa-solid fa-chevron-left"></i>
                            <i class="fa-solid fa-chevron-left"></i>
                        </div>
                    </div>
                </div>
                <div class="about__company_img">
                    <img src="{{ asset('storage/' . $setting->about_image) }}" alt="img-about">

                </div>
            </div>
        </div>

    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="main-container">
            <div class="services_content">
                <a href="{{ route('site.services') }}" class="about__company__text__header">
                    <div class="img">
                        <img src="{{ asset('site/images/about-us-img.png') }}" alt="logo" />
                    </div>
                    <h2>{{ __('الخدمات التي نقدمها') }}</h2>
                </a>
                <div class="services__slider">
                    <div class="owl-carousell">
                        @forelse ($services as $service)
                            <div class="item">
                                <div class="services__item">
                                    <a href="/services.html" class="services__card">
                                        <div class="img">
                                            <img src="{{ $service->icon_path }}" alt="" />
                                        </div>
                                        <h3>{{ $service->name }}</h3>
                                        <p>
                                            {{ Str::limit($service->desc, 100) }}

                                        </p>
                                    </a>
                                </div>
                            </div>

                        @empty
                            <div>
                                <h3>{{ __('لا يوجد خدمات حاليا') }}</h3>
                            </div>
                        @endforelse

                    </div>
                    <a href="{{ route('site.services') }}" class="about__company__btn caroiuo">
                        <div class="icons">
                            <i class="fa-solid fa-chevron-left"></i>
                            <i class="fa-solid fa-chevron-left"></i>
                        </div>
                        <div class="text">{{ __('معرفة المزيد') }}</div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects">
        <div class="main-container">
            <div class="projects__content">
                <a href="{{ route('site.projects') }}" class="about__company__text__header">
                    <div class="img">
                        <img src="{{ asset('site/images/about-us-img.png') }}" alt="logo" />
                    </div>
                    <h2>{{ __('المشاريع') }}</h2>
                </a>
                <div class="projects__slider">
                    <div class="owl-carousel">
                        @forelse ($projects as $project)
                            <div class="item">
                                <a href="/projectdetails.html" class="project__card">
                                    <div class="img">
                                        <img src="{{ $project->image_path }}" alt="" />
                                    </div>
                                    <h3>{{ $project->name }}</h3>
                                    <p>
                                        {{ Str::limit($project->desc, 100) }}

                                    </p>


                                </a>
                            </div>
                        @empty
                            <div>
                                <h3>{{ __('لا يوجد مشاريع حاليا') }}</h3>
                            </div>
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="partners">
        <div class="main-container">
            <div class="partners__content">
                <a href="{{ route('site.partners') }}" class="about__company__text__header">
                    <div class="img">
                        <img src="{{ asset('site/images/about-us-img.png') }}" alt="logo" />
                    </div>
                    <h2>{{ __('شركاء النجاح') }}</h2>
                </a>
                <div class="partners__slider">
                    <div class="owl-carousel">
                        @forelse ($partners as $partner)
                            <div class="item">
                                <div class="img">
                                    <img src="{{ $partner->image_path }}" alt="" />
                                </div>
                            </div>
                        @empty

                            <div>
                                <h3>{{ __('لا يوجد شركاء حاليا') }}</h3>
                            </div>
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blogs">
        <div class="main-container">
            <a href="{{ route('site.blogs') }}" class="about__company__text__header">
                <div class="img">
                    <img src="{{ asset('site/images/about-us-img.png') }}" alt="logo" />
                </div>
                <h2>{{ __('المدونة') }}</h2>
            </a>


            <div class="blogs__slider">
                <div class="owl-carousel">
                    @forelse ($blogs as $blog)
                        <div class="item">
                            <div class="blog__card">
                                <div class="img">
                                    <img src="{{ $blog->image_path }}" alt="" />
                                </div>
                                <div class="blog__tex">
                                    <h3>{{ $blog->name }}</h3>
                                    <p>
                                        {!! Str::limit($blog->desc, 100) !!}
                                    </p>
                                    <div class="blog__text__date">
                                        <div class="icon">
                                            <img src="{{ asset('site/images/calendar.png') }}" alt="" />
                                        </div>

                                        <div class="date__text">{{ $blog->created_at }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div>
                            <h3>{{ __('لا يوجد مدونات حاليا') }}</h3>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>
    </section>

    <!-- contact us section -->
    <section class="contact-us">
        <div class="main-container">
            <a href="{{ route('site.contact') }}" class="about__company__text__header">
                <div class="img">
                    <img src="{{ asset('site/images/about-us-img.png') }}" alt="logo" />
                </div>
                <h2>{{ __('تواصل معنا') }}</h2>
            </a>

            <div class="contact-us-content">
                <div class="contact-us-info">
                    <h3>
                        <div class="icon">
                            <img src="{{ asset('site/images/location-1.png') }}" alt="" />
                        </div>

                        <a
                            href="https://www.google.com/maps?q={{ $setting->location['lat'] }},{{ $setting->location['lng'] }}">
                            {{ $setting->address }}

                        </a>

                    </h3>
                    {{-- <p class="description">
                        Nimr Al NakheelK، طريق الإمام سعود بن عبد العزيز بن محمد الرياض
                        12381، المملكة العربية، centre السعودية
                    </p> --}}
                    <div class="mail">
                        <div class="img"><img src="{{ asset('site/images/mail.png') }}" alt="" /></div>
                        <a href="mailto:{{ $setting->email }}"> {{ $setting->email }} </a>
                    </div>
                    <div class="call">
                        <div class="img"><img src="{{ asset('site/images/call.png') }}" alt="" /></div>
                        <a href="tel:{{ $setting->whatsapp }}  "> {{ $setting->whatsapp }} </a>
                    </div>
                    <a class="direction-btn"> {{ __('الإتجاهات') }} </a>
                </div>
                <div class="contact-us-map">
                    <div id="map" style="height: 100%; width: 100%;" data-address="{{ $setting->address }}"></div>

                    <input type="hidden" name="lat" value="{{ $setting->location['lat'] }}">
                    <input type="hidden" name="lng" value="{{ $setting->location['lng'] }}">
                </div>

            </div>
        </div>
        </div>
    </section>
@endsection

@push('js')
    <!-- Owl Carousel Initialization -->
    <script>
        $(document).ready(function() {
            $(".services .owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                dots: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 3,
                    },
                },
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $(".projects .owl-carousel").owlCarousel({
                loop: true,
                margin: 30,
                dots: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 3,
                    },
                },
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $(".partners .owl-carousel").owlCarousel({
                loop: true,
                margin: 30,
                dots: true,
                responsive: {
                    0: {
                        items: 2,
                    },
                    768: {
                        items: 3,
                    },
                    1000: {
                        items: 4,
                    },
                    1150: {
                        items: 6,
                    },
                },
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $(".blogs__slider .owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                dots: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    430: {
                        items: 2,
                    },
                    768: {
                        items: 3,
                    },
                    1024: {
                        items: 4,
                    },
                },
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $(".header .owl-carousel").owlCarousel({
                loop: true,
                margin: 30,
                dots: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    425: {
                        items: 1,
                    },
                    1000: {
                        items: 1,
                    },
                    1150: {
                        items: 1,
                    },
                },
            });
        });
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdarVlRZOccFIGWJiJ2cFY8-Sr26ibiyY&libraries=places&callback=initAutocomplete&language={{ app()->getLocale() }}"
        async defer></script>
    <script src="{{ asset('site/js/map.js') }}"></script>
@endpush
