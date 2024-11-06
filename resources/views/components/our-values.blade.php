<section class="about-cards main-container">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up">
        <div class="about-card">
          <div class="img">
            <img src="{{ asset('site/images/ab-img-1.png') }}" alt="img" />
          </div>
          <h2>{{ __('vision') }}</h2>
          <p>{{ getSetting('vision_'.app()->getLocale()) }}  </p>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up">
        <div class="about-card">
          <div class="img">
            <img src="{{ asset('site/images/ab-img-2.png') }}" alt="img" />
          </div>
          <h2>{{ __('message') }}</h2>
          <p>{{ getSetting('message_'.app()->getLocale()) }}  </p>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up">
        <div class="about-card">
          <div class="img">
            <img src="{{ asset('site/images/ab-imf-3.png') }}" alt="img" />
          </div>
          <h2>{{ __('Goals') }}</h2>

          <p>{{ getSetting('value_desc_'.app()->getLocale()) }}  </p>
        </div>
      </div>
    </div>
  </section>
