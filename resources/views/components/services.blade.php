<section class="our-services main-container">
    <div class="section-header" data-aos="fade-up">
      <div class="abt-header-txt">{{ __('Our Services') }}</div>
      <p>{{ __('Here are some of the services we offer') }}</p>
    </div>
    @foreach($services as $service)
    <div class="row"  @if ($loop->index % 2 == 0) style="flex-direction:row;" @else style="flex-direction:row-reverse" @endif>
      <div class="col-12 col-lg-7">
        <div class="services-text-desc" data-aos="fade-up">
          <div class="img">
            <img src="{{ asset('storage/'.$service->icon)}}" alt="" />
          </div>
          <h2>{{ $service->name }}</h2>
          <p>
           {{ $service->desc }}
          </p>
          <div class="mka-order">
            <a href="{{ route('site.services') }}"> {{ __('Order the service now') }} </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-5">
        <div class="services-img" data-aos="fade-up">

          <img src="{{ asset('storage/'.$service->images[0])}}" alt="" />
        </div>
      </div>
    </div>
    @endforeach
</section>
