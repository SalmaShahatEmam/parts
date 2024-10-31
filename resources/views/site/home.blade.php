@extends('site.layouts.app')
@section('title', __('الرئسية'))

@section('content')
<x-about-us/>
<x-services/>
<x-branches/>
<x-contact-us/>

@endsection
@push('js')
@endpush
