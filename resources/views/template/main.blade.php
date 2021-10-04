<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <!-- ========== SEO ========== -->
  <title>Hotel Himara - Hotel HTML Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta content="" name="author">
  <!-- ========== FAVICON ========== -->
  <link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon-apple.png')}}" />
  <link rel="icon" href="{{ asset('images/favicon.png')}}">
  <!-- ========== STYLESHEETS ========== -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/jquery.mmenu.css')}}">
  <link rel="stylesheet" href="{{ asset('revolution/css/layers.css')}}">
  <link rel="stylesheet" href="{{ asset('revolution/css/settings.css')}}">
  <link rel="stylesheet" href="{{ asset('revolution/css/navigation.css')}}">
  <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
  <!-- ========== ICON FONTS ========== -->
  <link href="{{ asset('fonts/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('fonts/flaticon.css')}}" rel="stylesheet">
  <!-- ========== GOOGLE FONTS ========== -->
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700"
    rel="stylesheet">
</head>

<body>
  <!-- ========== PRELOADER ========== -->
  <div class="loader loader3">
    <div class="loader-inner">
      <div class="spin">
        <span></span>
        <img src="images/logo.svg" alt="Hotel Himara">
      </div>
    </div>
  </div>
  <!-- ========== MOBILE MENU ========== -->
  <nav id="mobile-menu"></nav>
  <!-- ========== WRAPPER ========== -->
  <div class="wrapper">
    <!-- ========== TOP MENU ========== -->
    <div class="topbar">
      <div class="container">
        <div class="welcome-mssg">
          Welcome to Hotel Himara.
        </div>
        <div class="top-right-menu">
          <ul class="top-menu">
            <li class="d-none d-md-inline">
              <a href="tel:+18881234567">
                <i class="fa fa-phone"></i>+1 888 123 4567
              </a>
            </li>
            <li class="d-none d-md-inline">
              <a href="mailto:contact@hotelhimara.com">
                <i class="fa fa-envelope-o "></i>contact@hotelhimara.com</a>
            </li>
            <li class="language-menu">
              <a href="#" class="active-language"><img src="images/icons/flags/gb.png" alt="Image">English</a>
              <ul class="languages">
                <li class="language">
                  <a href="#"><img src="images/icons/flags/it.png" alt="Image">Italiano</a>
                </li>
                <li class="language">
                  <a href="#"><img src="images/icons/flags/gr.png" alt="Image">Ελληνικα</a>
                </li>
                <li class="language">
                  <a href="#"><img src="images/icons/flags/al.png" alt="Image">Shqip</a>
                </li>
                <li class="language">
                  <a href="#"><img src="images/icons/flags/fr.png" alt="Image">Français</a>
                </li>
                <li class="language">
                  <a href="#"><img src="images/icons/flags/es.png" alt="Image">Español</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  @include('partials.header.header')
  @yield('content')
  @include("partials.footer.footer")
 
  <!-- ========== JAVASCRIPT ========== -->
  <script src="{{ asset('js/jquery.min.js')}}"></script>
  <script src="http://maps.google.com/maps/api/js?key=YOUR_API_KEY"></script>
  <script src="{{ asset('js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap-select.min.js')}}"></script>
  <script src="{{ asset('js/jquery.mmenu.js')}}"></script>
  <script src="{{ asset('js/jquery.inview.min.js')}}"></script>
  <script src="{{ asset('js/jquery.countdown.min.js')}}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('js/owl.carousel.thumbs.min.js')}}"></script>
  <script src="{{ asset('js/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('js/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{ asset('js/masonry.pkgd.min.js')}}"></script>
  <script src="{{ asset('js/wow.min.js')}}"></script>
  <script src="{{ asset('js/countup.min.js')}}"></script>
  <script src="{{ asset('js/moment.min.js')}}"></script>
  <script src="{{ asset('js/daterangepicker.js')}}"></script>
  <script src="{{ asset('js/parallax.min.js')}}"></script>
  <script src="{{ asset('js/smoothscroll.min.js')}}"></script>
  <script src="{{ asset('js/instafeed.min.js')}}"></script>
  <script src="{{ asset('js/main.js')}}"></script>
  <!-- ========== REVOLUTION SLIDER ========== -->
  <script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
  <script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
  <script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
  <script src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
  <script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
  <script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
  <script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
  <script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
  <script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
  <script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
  <script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
  <script>
    $(document).ready(function() {
        $('li.active').removeClass('active');
        $('a[href="' + location.pathname + '"]').closest('li').addClass('active');
    });
</script>
</body>

</html>