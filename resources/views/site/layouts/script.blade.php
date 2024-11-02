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


    <script>
        Swal.fire({
            position: "top-end",
            icon: @if (session('success')) "success" @elseif(session('error')) "error" @endif,
            title: @if(session("success")) "success" @elseif(session("error")) "error"@endif,
            showConfirmButton: false,
            timer: 1500
        });
    </script>
    @stack('js')
