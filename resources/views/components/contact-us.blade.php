<section class="contactus">
    <div class="main-container">
      <div class="abt-header-txt" data-aos="fade-up">تواصل معنا</div>
      <div class="row">
        <div class="col-12 col-lg-6" data-aos="fade-up">
          <form id="contactForm" action="{{ route('site.contact.request') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <input type="text" placeholder="الاسم" name="name" />
                    <span class="name-error error-text text-danger"></span>
                </div>
                <div class="col-12 col-md-6">
                    <input type="text" placeholder="البريد الالكتروني" name="email" />
                    <span class="email-error error-text text-danger"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <input type="number" placeholder="رقم الهاتف" name="phone" />
                    <span class="phone-error error-text text-danger"></span>
                </div>
                <div class="col-12 col-md-6">
                    <input type="text" placeholder="الموضوع" name="topic" />
                    <span class="topic-error error-text text-danger"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <textarea placeholder="الرسالة" name="message"></textarea>
                    <span class="message-error error-text text-danger"></span>
                </div>
            </div>
            <button type="submit">ارسال</button>
        </form>
        
        </div>
        <div class="col-12 col-lg-6" data-aos="fade-up">
          <div class="map-location">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.4988953787636!2d144.96332831531654!3d-37.81362897975133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577a1fcb75fba8a!2sFederation%20Square!5e0!3m2!1sen!2sus!4v1604540847314!5m2!1sen!2sus"
            ></iframe>
          </div>
          <div class="loc-links">
            <ul>
              <li>
                <a href="mailto:trading@gmail.com">
                  <div class="img">
                    <img src="{{ asset('site/images/mail.png')}}" alt="" />
                  </div>
                  <p>
                    <span> البريد الالكتروني : </span>
                    parts&more for trading@gmail.com
                  </p>
                </a>
              </li>
              <li>
                <a href="mailto:trading@gmail.com">
                  <div class="img">
                    <img src="{{ asset('site/images/phone.png')}}" alt="" />
                  </div>
                  <p>
                    <span> اتصل بنا : </span>
                    +9664365354656
                  </p>
                </a>
              </li>
              <li>
                <a href="mailto:trading@gmail.com">
                  <div class="img">
                    <img src="{{ asset('site/images/location.png')}}" alt="" />
                  </div>
                  <p>
                    <span> موقعنا : </span>
                    المملكة العربية السعودية
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>



