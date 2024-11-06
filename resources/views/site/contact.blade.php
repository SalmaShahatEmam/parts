@extends('site.layouts.app')
@section('title', __('من نحن').'|'.getSetting('site_name_'.app()->getLocale()))

@section('content')

<x-contact-data/>
<section class="contactus">
    <div class="main-container">
      <div class="mlr-auto">
        <div class="abt-header-txt" data-aos="fade-up">تواصل معنا</div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-6 mlr-auto" data-aos="fade-up">
            <form id="contactForm" action="{{ route('site.contact.request') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6">
                        <input type="text" placeholder="{{ __('Name') }}" name="name" />
                        <span class="name-error error-text text-danger"></span>
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="text" placeholder="{{ __('Email') }}" name="email" />
                        <span class="email-error error-text text-danger"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <input type="number" placeholder="{{ __('Phone Number') }}" name="phone" />
                        <span class="phone-error error-text text-danger"></span>
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="text" placeholder="{{ __('Subject') }}" name="topic" />
                        <span class="topic-error error-text text-danger"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <textarea placeholder="{{ __('Message') }}" name="message"></textarea>
                        <span class="message-error error-text text-danger"></span>
                    </div>
                </div>
                <button type="submit">{{ __('Send') }}</button>
              </form>
        </div>
      </div>
    </div>
  </section>

  <section class="main-map">
    <div id="map" style="height: 500px;"></div>
</section>

@endsection

@push('js')<!-- Load the Google Maps JavaScript API optimally -->


@endpush
