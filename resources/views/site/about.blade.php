@extends('site.layouts.app')
@section('title', __('من نحن'))


@section('content')

<x-our-values/>
<x-about-us/>
<x-features/>
@endsection

@push('js')
@endpush
