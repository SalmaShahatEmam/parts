<link rel="stylesheet" href="{{ asset('site/css/general.css') }}">
<link rel="stylesheet" href="{{ asset('site/css/header.css') }}">
<link rel="stylesheet" href="{{ asset('site/css/footer.css') }}">
<link rel="stylesheet" href="{{ asset('site/css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('site/css/main.css') }}">

@if (app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('site/css/ar.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('site/css/en.css') }}">
@endif


@stack('css')
