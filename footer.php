<section class="sec7">
      <div class="container-1500">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-12">
            <img src="assets/images/orbed-logo.png" alt="">
          </div>
          <div class="col-lg-7 col-md-7 col-12 footer-mean-links">
            <div class="footer-menus">
              <h4><a href="index.php"> Home</a></h4>
              <ul>
                <li><a href="contact.php">Contact Us</a></li>
              </ul>
              <h4><a href="index.php"></a></h4>
              <ul>
              <li><a href="https://play.google.com/store/apps/details?id=com.orbedx&hl=en"><img style="width: 120px; height: auto;" src="assets/images/android.png" alt=""></a></li>
            </ul>
            </div>

            <div class="footer-menus">
              <h4><a href="aboutus.php"> About Us</a></h4>
              <ul>
                <li><a target="_blank" href="https://lms-alpha.b-cdn.net/assets/privacy_terms_support.pdf">Privacy Policy</a></li>
              </ul>
              <h4><a href="aboutus.php"></a></h4>
              <ul>
              <li><a href="https://apps.apple.com/us/app/orb-ed-x/id6504434447"><img style="width: 120px; height: auto;" src="assets/images/ios.png" alt=""></a></li>
              </ul>
            </div>


            <div class="footer-menus">
              <h4><a href="courses.php">Courses</a></h4>
              <ul>
                <li><a href="carrers.php">Careers</a></li>
              </ul>
            </div>

            <div class="footer-menus">
              <h4><a href="faqs.php">FAQs</a></h4>
              <ul>
                <li><a href="terms.php">Terms & Conditions</a></li>
              </ul>
            </div>
    

            <div class="footer-menus social">
              <!-- <h4><a href="faqs.php">FAQs</a></h4> -->
              <ul>
                <li><a href="https://www.youtube.com/@Orb-Ed/featured"> <i class=" fa-fade"><img src="assets/images/icn-1.png" alt=""></i> Youtube</a></li>
                <li><a href="https://www.instagram.com/orbedpk"> <i class=" fa-fade"><img src="assets/images/icn-2.png" alt=""> </i>Instagram</a></li>
                <li><a href="https://www.facebook.com/OrbEdPK"> <i class=" fa-fade"><img src="assets/images/icn-3.png" alt=""></i> Facebook</a></li>
                <li><a href=""> <i class=" fa-fade"><img src="assets/images/icn-4.png" alt=""></i> Linkedin</a></li>
              </ul>
            </div>

          </div>
        </div>
    </section>
    <div class="copyright">
      <p>Copyright © Orb-ed your learning partner | Powered by HowlTech (Pvt) Ltd | NTN - 4469696</p>
    </div>




</main>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/ScrollTrigger.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  AOS.init();
</script>
<script type="text/javascript">
  $(document).ready(function () {
    const $carousel = $('.testimonials-section');
    console.log('Carousel initialized:', $carousel.length);
    // Initialize Owl Carousel
    $carousel.owlCarousel({
      loop: true,
      margin: 45,
      nav: true,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: false, // disable built-in pause
      dots: false,
      slideBy: 1,
      slideTransition: "linear",
      responsiveClass: true,
      responsive: {
        0: { items: 1, nav: true },
        576: { items: 2, nav: true },
        768: { items: 2, nav: true },
        992: { items: 3, nav: true },
        1200: { items: 3, nav: true },
        1400: { items: 7, nav: true }
      }
    });

    // Hover events on media-container inside this carousel
    $carousel.find('.media-container').on('mouseenter', function () {
      const video = $(this).find('video').get(0);
      if (video) video.play();
      $carousel.trigger('stop.owl.autoplay'); // Stop carousel
    });

    $carousel.find('.media-container').on('mouseleave', function () {
      const video = $(this).find('video').get(0);
      if (video) {
        video.pause();
        video.currentTime = 0;
      }
      $carousel.trigger('play.owl.autoplay'); // Resume carousel
    });
  });
</script>
<script type="text/javascript">
    $('.owl-carousel:not(.testimonials-section)').owlCarousel({
      loop: true,
      margin: 45,
      nav: true,
      autoplay: true,
      autoplayTimeout: 3000,
      dots: false,
      slideBy: 1,
      slideTransition: "linear",
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        576: {
          items: 2,
          nav: true
        },
        768: {
          items: 2,
          nav: true
        },
        992: {
          items: 3,
          nav: true,
          loop: true
        },
        1200: {
          items: 3,
          nav: true,
          loop: true
        },
        1400: {
          items: 4,
          nav: true,
          loop: true
        }
      }
    })
  </script>
<script>
  $(function () {
    $(".toggle-menu").click(function () {
      $(this).toggleClass("active");
      $('.menu-drawer').toggleClass("open");
    });
  });



  window.onscroll = function () { stickyHeader() };

  var header = document.querySelector("header");
  var sticky = header.offsetTop;

  function stickyHeader() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }

  $('.autoplay').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });




  

  window.onscroll = function() {
  var header = document.querySelector('header');
  if (window.pageYOffset > 0) {
    header.classList.add('sticky');
  } else {
    header.classList.remove('sticky');
  }
};
document.addEventListener(
  "DOMContentLoaded",
  function() {
    var loadingCenter = document.getElementById("loading-center");
    var loading = document.getElementById("loading");
    var block1 = document.getElementById("block-1");
    if (!loading || !loadingCenter || !block1) return;

    setTimeout(function() {
      loadingCenter.className = "zoomOut";
    }, 350);
    setTimeout(function() {
      loading.className = "slideDown";
      block1.className = "slideInUp";
    }, 500);
  },
  false
);













</script>

</html>