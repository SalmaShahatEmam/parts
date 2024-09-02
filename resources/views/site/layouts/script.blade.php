 <!-- bootstrap -->
 <script
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
 crossorigin="anonymous"
></script>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('site/js/jquery.js') }}"></script>

<script src="{{ asset('site/js/custome.js') }}"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('site/js/owl.carousel.min.js') }}"></script>

<!-- aos -->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
 AOS.init();
</script>

@stack('js')

