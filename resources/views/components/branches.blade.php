<section class="barnches">
    <div class="section-header" data-aos="fade-up">
      <div class="abt-header-txt">فروعنـا</div>
      <p>إليك فروع الشركة فى جميع أنحاء المملكة</p>
      <img src="{{ asset('site/images/map-img.png')}}" alt="img" />
    </div>
    <div class="main-container">
      <div class="row">
        @foreach($branches as $branch)
        <div class="col-12 col-sm-6 col-lg-4 mka-border" data-aos="fade-up">
          <div class="links-card">
            <ul>
              <li>
                <img src="{{ asset('site/images/b-location.png')}}" alt="" />
                <p>العنوان : {{$branch->title}}</p>
              </li>
              <li>
                <img src="{{ asset('site/images/b-phone.png')}}" alt="" />
                <p>رقم الهاتف : {{$branch->phone}}</p>
              </li>
              <li>
                <img src="{{ asset('site/images/b-services.png')}}" alt="" />
                <p>الخدمات المتوفرة : صيانة - قطع غيار</p>
              </li>
            </ul>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</section>
