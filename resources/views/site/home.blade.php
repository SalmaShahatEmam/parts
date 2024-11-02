@extends('site.layouts.app')
@section('title', __('الرئسية'))

@section('content')
<x-about-us/>
<x-services :services="$services"/>
<x-branches :branches="$branches"/>
<x-contact-us/>

@endsection
@push('js')
<script>
$(document).ready(function() {
    $('#contactForm').on('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission
        
        // Clear previous error messages
        $('.error-text').text('');

        $.ajax({
            url: $(this).attr('action'), // Use the form's action URL
            method: 'POST',
            data: $(this).serialize(), // Serialize the form data
            success: function(response) {
                // Show a success message or redirect the user
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "تم إرسال رسالتك بنجاح",
                    showConfirmButton: false,
                    timer: 1500
                });

                // Optionally, clear the form
                $('#contactForm')[0].reset();
            },
            error: function(xhr) {
                // Display validation errors
                if (xhr.status === 422) { // Laravel validation error status
                    let errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        $('.' + key + '-error').text(value[0]); // Display the first error message
                    });
                } else {
                    // General error message for other issues
                    Swal.fire({
                        position: "top-end",
                        icon: "error",
                        title: "حدث خطأ. حاول مرة أخرى.",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            }
        });
    });
});
</script>
@endpush
