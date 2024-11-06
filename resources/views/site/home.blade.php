@extends('site.layouts.app')
@section('title', __('الرئسية') .'|'.getSetting('site_name_'.app()->getLocale()))

@section('content')
<x-about-us/>
<x-services :services="$services"/>
<x-branches :branches="$branches"/>
<x-contact-us/>

@endsection
