@extends('site.layouts.app')
@section('title', __('من نحن').'|'.getSetting('site_name_'.app()->getLocale()))


@section('content')
<x-our-values/>
<x-about-us/>
<x-features  :features="$features"/>
@endsection

@push('js')
@endpush
