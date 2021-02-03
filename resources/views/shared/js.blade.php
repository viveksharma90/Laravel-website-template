
<!-- jQuery  -->
<script src="{{asset('/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('/assets/js/popper.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper('.swiper-container', {
          slidesPerView: 3,
          spaceBetween: 5,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
        });
    </script>