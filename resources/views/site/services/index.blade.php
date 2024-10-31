@extends('site.layouts.app')
@section('title', __('خدماتنا'))




@section('content')
<x-services/>
<x-request-service/>

@endsection
@push('js')
    <!-- Include jQuery and List.js -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log('ready');

            function initializeListJS() {
                var options = {
                    valueNames: ['text-head'],
                    page: 6,
                    pagination: true
                };
                var addressList = new List('order_data', options);
            }

            // Initialize List.js on page load
            initializeListJS();
        });
    </script>
@endpush
