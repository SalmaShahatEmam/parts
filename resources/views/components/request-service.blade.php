<section class="contactus">
    <div class="main-container">
      <div class="mlr-auto">
        <div class="abt-header-txt" data-aos="fade-up">نموذج طلب خدمة</div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-6 mlr-auto" data-aos="fade-up">
          <form id="service_request" action="{{route('site.services.order.request')}}" method="post">
            @csrf
            <div class="row">
              <div class="col-12 col-md-6">
                <input type="text" placeholder="الاسم" name="name" />
                <span class="name-error error-text text-danger"></span>

              </div>
              <div class="col-12 col-md-6">
                <input type="text" placeholder="البريد الالكتروني" name="email"/>
                <span class="email-error error-text text-danger"></span>

              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6">
                <input type="number" placeholder="رقم الهاتف" name="phone" />
                <span class="phone-error error-text text-danger"></span>

              </div>
              <div class="col-12 col-md-6">
                <div class="custom-input">
                  <select name="service_id">
                    <option value="">أختر خدمة</option>

                    @foreach($services as $service)
                    <option value="{{$service->id}}"> {{$service->name}}</option>
                    @endforeach
                  </select>

                  <div class="arr">
                    <i class="fa-solid fa-angle-down"></i>
                  </div>
                  <span class="service_id-error error-text text-danger"></span>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <textarea placeholder="الرسالة" name="message"></textarea>
                <span class="message-error error-text text-danger"></span>

              </div>
            </div>
            <button type="submit" class="mlr-auto">ارسال</button>
          </form>
        </div>
      </div>
    </div>
  </section>
