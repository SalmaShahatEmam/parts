@extends('site.layouts.app')
@section('title', __('من نحن'))

@include('site.layouts.seo')

@section('background-image')
    style="background-image: url({{ asset('site/images/landing-bg.png') }})"
@endsection
@section('header-hero')
    <div class="owl-carousel">

        <div class="item">
            <div class="landing custom__landing">
                <div class="main-container">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-sm-12">
                            <div class="landing__text">
                                <div class="landing__header">{{ __('من نحن') }}</div>
                                <div class="landing__links">
                                    {{ __('من نحن') }}<a href="/"> / {{ __('الرئيسية') }} </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="landing-img mask1">
                                <img src="{{ asset('site/images/image.png') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('content')

    <section class="about__company presedent__word">
        <div class="main-container">
            <div class="about__company__content">
                <div class="about__company__text">
                    <div class="about__company__text__header">
                        <div class="img">
                            <img src="{{ asset('site/images/about-us-img.png') }}" alt="logo" />
                        </div>
                        <h2> {{ __('كلمة رئيس مجلس الادارة') }}</h2>
                    </div>
                    <p>
                        {{ $setting->{'seo_title_' . app()->getLocale()} }}
                    </p>
                    <p>
                        {{ $setting->{'seo_desc_' . app()->getLocale()} }}
                    </p>

                </div>
                <div class="about__company_img">
                    <img src="{{ asset('storage/' . $setting->seo_image) }}" alt="img-about">

                </div>
            </div>
        </div>
    </section>

    <!-- About Company Section -->


    <section class="about__company">
        <div class="main-container">
            <div class="about__company__content">
                <div class="about__company__text">
                    <div class="about__company__text__header">
                        <div class="img">
                            <img src="{{ asset('site/images/about-us-img.png') }}" alt="logo" />
                        </div>
                        <h2>{{ __('نبذة عن الشركة') }}</h2>
                    </div>
                    <p>
                        {{ $setting->{'about_desc_' . app()->getLocale()} }}
                    </p>
                </div>
                <div class="about__company_img">
                    <img src="{{ asset('storage/' . $setting->about_image) }}" alt="img-about">
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="team__work">
        <div class="main-container">
            <div class="about__company__text__header">
                <div class="img">
                    <img src="{{ asset('site/images/about-us-img.png') }}" alt="logo" />
                </div>
                <h2>{{ __('فريق العمل') }}</h2>
            </div>
            <div class="team__work__content">
                @forelse ($teams as $team)
                    <div class="team__card">
                        <div class="img"> <img src="{{ $team->image_path }}" alt=""> </div>
                        <div class="text">
                            <h3> {{ $team->name }} </h3>
                            <p> {{ $team->job_title }} </p>
                        </div>
                    </div>
                @empty
                    <div>
                        <h3>{{ __('لا يوجد فريق عمل حاليا') }}</h3>
                    </div>
                @endforelse

            </div>
        </div>
    </section>


    <section class="our__vession">
        <div class="main-container">
            <div class="our__vesion__header">
                <div class="our__vesion__title">
                    <div class="img"> <img src="{{ asset('site/images/ourvesion-1.png') }}" alt=""> </div>
                    <h3> {{ __('رؤيتنا') }} </h3>
                </div>

                {{ $setting->{'vision_' . app()->getLocale()} }}

            </div>
            <div class="our__vesion__message">
                <div class="message_section">
                    <div class="our__vesion__title">
                        <div class="img"> <img src="{{ asset('site/images/ourvesion-2.png') }}" alt=""> </div>
                        <h3> {{ __('رسالتنا') }} </h3>
                    </div>

                    {{ $setting->{'message_' . app()->getLocale()} }}

                </div>
                <div class="message__img">
                    <img src="{{ asset('storage/' . $setting->message_image) }}" alt="">
                </div>
            </div>


            <div class="our__vesion__values">
                <div class="image__value"> <img src="{{ asset('storage/' . $setting->value_image) }}" alt=""> </div>

                <div class="our__value__section">

                    <div class="our__vesion__title">

                        <div class="img"> <img src="{{ asset('site/images/ourvesion-3.png') }}" alt="">
                        </div>
                        <h3> {{ __('قيمنا') }} </h3>

                    </div>
                    {!! $setting->{'value_desc_' . app()->getLocale()} !!}
                </div>
            </div>
        </div>
    </section>


@endsection

@push('js')
@endpush
