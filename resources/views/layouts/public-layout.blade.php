<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>Food Care Dog Reviews and Ratings</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('dist/public/css/bootstrap.min.css') }}">
    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ asset('dist/public/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/public/css/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/public/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/public/css/animate.min.css')}}">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{ asset('dist/public/css/font-awesome.css')}}">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    <header class="header-style-1">

      <!-- ============================================== TOP MENU : END ============================================== -->
      <div class="main-header">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
              <!-- ============================================================= LOGO ============================================================= -->
              <div class="logo">
                <a href="{{ url('/') }}">
                  <img src="{{ asset('dist/public/images/logo.png') }}" width="100%" alt="FoodCareDog">
                  <!--h2 class="txt-logo">FoodCareDog</h2-->
                </a>
              </div>
              <!-- /.logo -->
              <!-- ============================================================= LOGO : END ============================================================= -->
            </div>
            <!-- /.logo-holder -->
            <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
              <!-- /.contact-row -->
              <!-- ============================================================= SEARCH AREA ============================================================= -->
              <div class="search-area">
                <form>
                  <div class="control-group">
                    <input class="search-field" placeholder="Search here..." />
                    <a class="search-button" href="#"></a>
                  </div>
                </form>
              </div>
              <!-- /.search-area -->
              <!-- ============================================================= SEARCH AREA : END ============================================================= -->
            </div>
            <!-- /.top-search-holder -->

          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.main-header -->
      <!-- ============================================== NAVBAR ============================================== -->
      <div class="header-nav animate-dropdown">
        <div class="container">
          <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="nav-bg-class">
              <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                <div class="nav-outer">
                  <ul class="nav navbar-nav">

                    <li class="active dropdown hidden-sm">
                      <a cla href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Best French Bulldog Food</a>
                      <ul class="dropdown-menu pages">
                        <li>
                          <div class="yamm-content">
                            <div class="row">
                              <div class="col-xs-12 col-menu">
                                <ul class="links">
                                  <li><a href="{{ route('post-details', 'Best food for french bulldog') }}">Best food for french bulldog</a></li>
                                  <li><a href="{{ route('post-details', 'Best puppy food for french bulldog') }}">Best puppy food for french bulldog</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        <li>
                      </ul>
                    </li>
                    <!--li class="dropdown  navbar-right special-menu">
                      <a href="#">Todays reviews</a>
                    </li-->
                  </ul>
                  <!-- /.navbar-nav -->
                  <div class="clearfix"></div>
                </div>
                <!-- /.nav-outer -->
              </div>
              <!-- /.navbar-collapse -->
            </div>
            <!-- /.nav-bg-class -->
          </div>
          <!-- /.navbar-default -->
        </div>
        <!-- /.container-class -->
      </div>
      <!-- /.header-nav -->
      <!-- ============================================== NAVBAR : END ============================================== -->
    </header>
    <!-- ============================================== HEADER : END ============================================== -->

    @yield('content')

    <!-- /.body-content -->
    <!-- ============================================================= FOOTER ============================================================= -->
    <footer class="site-footer">
      <div class="wrap">

        <h2 style="cursor:pointer">
          <i><strong>Food</strong></i>CareDog
        </h2>
      
        <nav class="nav-footer">
          <div class="menu-footer-container">
            <ul id="menu-footer" class="menu">
              <li id="menu-item-133313" class="menu-item">
                <a href="">Disclosure</a>
              </li>
              |<li id="menu-item-133314" class="menu-item">
                <a href="">Terms of Use</a>
              </li>
              |<li id="menu-item-133315" class="menu-item">
                <a href="">Privacy Policy</a>
              </li>
              |
              <li id="menu-item-133316" class="menu-item">
                <a href="">Contact Us</a>
              </li>
            </ul>
          </div>
        </nav>

        <p class="copyright">Copyright © @php echo date('Y')  @endphp Food Care Dog All Rights Reserved || Designe & Developed by <a href="https://www.m.me/contactwith.ashis" target="blank" >Ashis Sarker</a></p>
      </div>
    </footer>
    <!-- ============================================================= FOOTER : END============================================================= -->
    <!-- For demo purposes – can be removed on production -->
    <!-- For demo purposes – can be removed on production : End -->
    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="{{ asset('dist/public/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('dist/public/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/public/js/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ asset('dist/public/js/jquery.rateit.min.js') }}"></script>
    <script src="{{ asset('dist/public/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('dist/public/js/wow.min.js') }}"></script>
    <script src="{{ asset('dist/public/js/scripts.js') }}"></script>
    <!-- For demo purposes – can be removed on production -->
    <script src="switchstylesheet/switchstylesheet.html"></script>
    <script>
      $(document).ready(function() {
        $(".changecolor").switchstylesheet({
          seperator: "color"
        });
        $('.show-theme-options').click(function() {
          $(this).parent().toggleClass('open');
          return false;
        });
      });
      $(window).bind("load", function() {
        $('.show-theme-options').delay(2000).trigger('click');
      });
    </script>
    <!-- For demo purposes – can be removed on production : End -->
  </body>
</html>
