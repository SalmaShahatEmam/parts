@if (request()->is('/'))
<div class="hero">
    <div class="row">
      <div class="col-12 col-xl-6 text-hero">
        <div class="text">
          <div class="text-header">
            <p data-aos="fade-up">قطع وأكثر للتجارة</p>
            <img
              data-aos="fade-up"
              src="{{ asset('site/images/line.png')}}"
              alt="smile-line"
            />
          </div>
          <h3 data-aos="fade-up">
            "نوفر لك جميع احتياجاتك من قطع الغيار بأعلى جودة."
          </h3>
          <p data-aos="fade-up" class="desc">
            شركة [اسم الشركة] تقدم مجموعة واسعة من قطع غيار السيارات
            الأصلية والمعتمدة لكل أنواع المركبات، مع خدمة عملاء مميزة
            لضمان راحتك وثقتك.
          </p>
          <div class="main-btn more-read" data-aos="fade-up">
            <a href="/aboutus.html"> <p>قراءة المزيد</p> </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-6 hero-img">
        <img src="{{ asset('site/images/hero-img.png')}}" alt="" />
      </div>
    </div>
    <div class="abs-img">
      <img src="{{ asset('site/images/hero-bg-img-1.png')}}" alt="img" />
      <img src="{{ asset('site/images/hero-bg-img-2.png')}}" alt="img" />
      <img src="{{ asset('site/images/hero-bg-img-3.png')}}" alt="img" />
    </div>
    <div class="img-setting">
      <img src="{{ asset('site/images/settings-circle.png')}}" alt="img" />
    </div>
  </div>
@else
<div class="custom-hero">
    <img src="{{ asset('site/images/settings-circle.png')}}" alt="img" />
    <img class="ctm-img" src="{{ asset('site/images/hero-imgs.png')}}" alt="img" />
    <h2 data-aos="fade-up">من نحن</h2>
    <div class="custom-hero-links" data-aos="fade-up">
      <a href="/"> الرئيسية </a>
      <img src="{{ asset('site/images/home-img.png')}}" alt="" />
      <p>من نحن</p>
    </div>
  </div>
@endif

