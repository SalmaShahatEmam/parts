<section class="contactus">
    <div class="main-container">
      <div class="abt-header-txt" data-aos="fade-up">{{ __('Contact Us') }}</div>
      <div class="row">
        <div class="col-12 col-lg-6" data-aos="fade-up">
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
        <div class="col-12 col-lg-6" data-aos="fade-up">
          <div class="map-location" id="map">

          </div>
          <div class="loc-links">
            <ul>
              <li>
                <a href="{{ 'mailto:'.getSetting('email') }}">
                  <div class="img">
                    <img src="{{ asset('site/images/mail.png')}}" alt="" />
                  </div>
                  <p>
                    <span>{{ __('Email') }} : </span>
                    {{ getSetting('email') }}
                  </p>
                </a>
              </li>
              <li>
                <a href=" {{ 'tel:+'.getSetting('phone') }}">
                  <div class="img">
                    <img src="{{ asset('site/images/phone.png')}}" alt="" />
                  </div>
                  <p>
                    <span>{{ __('Call Us') }} : </span>
                    {{ getSetting('phone') }}
                  </p>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="img">
                    <img src="{{ asset('site/images/location.png')}}" alt="" />
                  </div>
                  <p>
                    <span>{{ __('Our Location') }} : </span>
                    {{ getSetting('address') }}
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>
