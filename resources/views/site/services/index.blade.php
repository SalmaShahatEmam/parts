@extends('site.layouts.app')
@section('title', __('خدماتنا'))

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
                                <div class="landing__header"> {{ __('خدماتنا') }} </div>
                                <div class="landing__links">
                                    {{ __('خدماتنا') }}<a href="/"> / {{ __('الرئيسية') }} </a>
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

    <!-- Services Section -->
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

                <div class="services__slider " id="order_data">
                    <div class="owl-carousell list">
                        @forelse ($services as $service)
                            <div class="item">
                                <div class="services__item">
                                    <a href="{{ route('site.services.show', $service->slug) }}" class="services__card">
                                        <div class="img">
                                            <img src="{{ $service->icon_path }}" alt="" />
                                        </div>
                                        <h3 class="text-head">{{ $service->name }}</h3>
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
                    @if ($services->count() > 0)
                        <ul class="pagination custom-pagination"></ul>
                    @endif
                </div>
            </div>

        </div>

    </section>
    {{-- <section class="services">
        <div class="main-container">
            <div class="services_content">
                <div class="about__company__text__header">
                    <div class="img">
                        <img src="{{ asset('site/images/about-us-img.png') }}" alt="logo" />
                    </div>
                    <h2>{{ __('الخدمات التي نقدمها') }}</h2>
                </div>
                <div class="services__slider">
                    <div class="owl-carousel">
                        @forelse ($services as $service )
                        <div class="item">
                            <div class="services__item">
                                <a href="{{ route('site.services.show',$service->slug) }}" class="services__card">
                                    <div class="img">
                                        <img src="{{ $service->icon_path }}" alt="" />
                                    </div>
                                    <h3>
                                        {{ $service->name }}
                                    </h3>
                                    <p>
                                        {{ $service->desc }}
                                    </p>
                                </a>

                            </div>
                        </div>
                        @empty

                        <div>
                            <h2>{{ __('لا يوجد خدمات حاليا') }}</h2>
                        </div>

                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <!-- start footer -->

    <!-- start footer -->
@endsection
@push('js')
    <!-- Include jQuery and List.js -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log('ready');

            function initializeListJS() {
                var options = {
                    valueNames: ['text-head'],
                    page: 6,
                    pagination: true
                };
                var addressList = new List('order_data', options);
            }

            // Initialize List.js on page load
            initializeListJS();
        });
    </script>
@endpush
