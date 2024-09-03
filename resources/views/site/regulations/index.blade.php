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
                                <div class="landing__header">{{ __('اللوائح والسياسات') }}</div>
                                <div class="landing__links">
                                    {{ __('اللوائح والسياسات') }}<a href="/"> / {{ __('الرئيسية') }} </a>
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
    <section class="main__accordion">
        <div class="main-container">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                @forelse ($regulationsCategory as $category)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                {{ $category->name }} /{{ __('عددها') }} {{ $category->regulations_count }}
                            </button>
                        </h2>
                        @foreach ($category->regulations as $regulation)
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="pdf__view">
                                        <div class="text">
                                            <div class="img"> <img src="{{ asset('site/images/flie (1).svg') }}"
                                                    alt=""> </div>
                                            <p> {{ $regulation->name }}</p>
                                        </div>
                                        <div data-href="{{ $regulation->pdf_path }}" class="icon  pdf_download"> <i
                                                class="fa-solid fa-download"></i> </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                @empty
                    <div>
                        <h2>{{ __('لا يوجد لوائح حاليا') }}</h2>
                    </div>
                @endforelse


            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        $(document).ready(function() {


            $('.pdf_download').on('click', function(e) {
                e.preventDefault();

                var href_pdf = $(this).attr('href');

                var a = document.createElement('a');
                        var url = window.URL.createObjectURL(data);
                        a.href = url;
                        a.download =
                            '{{ isset($regulation->name) ? $regulation->name : 'default' }}'; // or any other extension                        document.body.append(a);
                        a.click();
                        a.remove();
                        window.URL.revokeObjectURL(url);

                // $.ajax({
                //     url: href,
                //     method: 'GET',
                //     xhrFields: {
                //         responseType: 'blob'
                //     },
                //     success: function(data) {
                //         console.log(data);

                //         var a = document.createElement('a');
                //         var url = window.URL.createObjectURL(data);
                //         a.href = url;
                //         a.download =
                //             '{{ isset($regulation->name) ? $regulation->name : 'default' }}'; // or any other extension                        document.body.append(a);
                //         a.click();
                //         a.remove();
                //         window.URL.revokeObjectURL(url);
                //     }
                // });
            });
        });
    </script>
@endpush
