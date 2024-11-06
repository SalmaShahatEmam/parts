<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous"
></script>

<!-- AOS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script src="{{ asset('site/js/custom.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


 {{--    <script>
        Swal.fire({
            position: "top-end",
            icon: @if (session('success')) "success" @elseif(session('error')) "error" @endif,
            title: @if(session("success")) "success" @elseif(session("error")) "error"@endif,
            showConfirmButton: false,
            timer: 1500
        });
    </script> --}}
    <script>
        $(document).ready(function() {
            $('#blogEmail').on('submit', function(event) {
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
                            title:"{{ __('You have successfully subscribed to the newsletter service') }}",
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
                                $('.' + key + '-errorq').text(value[0]); // Display the first error message
                            });
                        } else {
                            // General error message for other issues
                            Swal.fire({
                                position: "top-end",
                                icon: "error",
                                title: session('error'),
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    }
                });
            });
        });
        </script>

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
                        title: "{{ __('message sended successfully') }}",
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#language-toggle').on('click', function() {
            // Get the current language
            const currentLang = $(this).data('lang');
            // Determine the new language
            const newLang = currentLang === 'en' ? 'ar' : 'en';

            // Make the AJAX request
            $.ajax({
                url: '/toggle-language',
                type: 'POST',
                data: {
                    lang: newLang,
                    _token: '{{ csrf_token() }}' // Include CSRF token
                },
                success: function(response) {
                    if (response.success) {
                        // Update the button's data and text
                        $('#language-toggle').data('lang', newLang);
                        $('#language-toggle').text(newLang === 'en' ? 'ar' : 'en');

                        // Optionally, you can reload the page to apply the changes
                        location.reload();
                    }
                },
                error: function(xhr) {
                    console.error('Error toggling language:', xhr);
                }
            });
        });
    });
</script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdarVlRZOccFIGWJiJ2cFY8-Sr26ibiy
            Y&loading=async&callback=initMap"></script>


<script>
    let map;
    let lat = 23.330592;//{{ getSetting('lat') }};//28.161233;
    let lng =45.305470;// {{ getSetting('lng') }};//30.607054;

    async function initMap() {

        const position = {
            lat: parseFloat(lat),
            lng: parseFloat(lng)
        };
        const {
            Map
        } = await google.maps.importLibrary("maps");
        const {
            AdvancedMarkerElement
        } = await google.maps.importLibrary("marker");

        map = new Map(document.getElementById("map"), {
            zoom: 5,
            center: position,
            mapId: "DEMO_MAP_ID",
        });

        const marker = new AdvancedMarkerElement({
            map: map,
            position: position,
            title: "",
        });

    }
</script>
@stack('js')
