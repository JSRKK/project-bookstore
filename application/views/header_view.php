<!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
<div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.1">

    <!-- ======== @Region: #navigation ======== -->
    <div id="navigation" class="wrapper">
      <!--Hidden Header Region-->
      <div class="header-hidden collapse">
        <div class="header-hidden-inner container">
          <div class="row">
            <div class="col-md-3">
              <h3>
                  About Us
                </h3>
              <p>Flexor is a super flexible responsive theme with a modest design touch.</p>
              <a href="about.html" class="btn btn-more"><i class="fa fa-plus"></i> Learn more</a>
            </div>
            <div class="col-md-3">
              <!--@todo: replace with company contact details-->
              <h3>
                  Contact Us
                </h3>
              <address>
                  <strong>Flexor Bootstrap Theme Inc</strong>
                  <abbr title="Address"><i class="fa fa-pushpin"></i></abbr>
                  Sunshine House, Sunville. SUN12 8LU.
                  <br>
                  <abbr title="Phone"><i class="fa fa-phone"></i></abbr>
                  019223 8092344
                  <br>
                  <abbr title="Email"><i class="fa fa-envelope-alt"></i></abbr>
                  info@flexorinc.com
                </address>
            </div>
            <div class="col-md-6">
              <!--Colour & Background Switch for demo - @todo: remove in production-->
              <h3>
                  Theme Variations
                </h3>
              <div class="switcher">
                <div class="cols">
                  Backgrounds:
                  <br>
                  <a href="#benches" class="background benches active" title="Benches">Benches</a> <a href="#boots" class="background boots " title="Boots">Boots</a> <a href="#buildings" class="background buildings " title="Buildings">Buildings</a>
                  <a
                    href="#city" class="background city " title="City">City</a> <a href="#metro" class="background metro " title="Metro">Metro</a>
                </div>
                <div class="cols">
                  Colours:
                  <br>
                  <a href="#orange" class="colour orange active" title="Orange">Orange</a> <a href="#green" class="colour green " title="Green">Green</a> <a href="#blue" class="colour blue " title="Blue">Blue</a> <a href="#lavender" class="colour lavender "
                    title="Lavender">Lavender</a>
                </div>
              </div>
              <p>
                <small>Selection is not persistent.</small>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!--Header & navbar-branding region-->
      <div class="header">
        <div class="header-inner container">
          <div class="row">
            <div class="col-md-8">
              <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
              <a class="navbar-brand" href="index.html" title="Home">
                <h1 class="hidden">
                    <img src="img/logo.png" alt="Flexor Logo">
                    Flexor
                  </h1>
              </a>
              <div class="navbar-slogan">
                Responsive HTML Theme
                <br> By BootstrapMade.com
              </div>
            </div>
            <!--header rightside-->
            <div class="col-md-4">
              <!--user menu-->
              <ul class="list-inline user-menu pull-right">
                <li class="user-register"><i class="fa fa-edit text-primary "></i> <a href="<?php echo base_url('index.php/RegisterController')?>" class="text-uppercase">Register</a></li>
                <li class="user-login"><i class="fa fa-sign-in text-primary"></i> <a href="<?php echo base_url('index.php/LoginController')?>" class="text-uppercase">Login</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="navbar navbar-default">
          <!--mobile collapse menu button-->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <!--social media icons-->
          <div class="navbar-text social-media social-media-inline pull-right">
            <!--@todo: replace with company social media details-->
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
          </div>
          <!--everything within this div is collapsed on mobile-->
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="main-menu">
              <li class="icon-link">
                <a href="<?php echo base_url('index.php/HomeController')?>"><i class="fa fa-home"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Books<b class="caret"></b></a>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu">
                  <li class="dropdown-header">Book types</li>
                  <li><a href="elements.html" tabindex="-1" class="menu-item">Magazine1</a></li>
                  <li><a href="about.html" tabindex="-1" class="menu-item">Magazine2</a></li>
                  <li><a href="login.html" tabindex="-1" class="menu-item">Magazine3</a></li>
                  <li><a href="register.html" tabindex="-1" class="menu-item">Sign-Up</a></li>
                  <li class="dropdown-footer">Dropdown footer</li>
                </ul>
              </li>
              <li><a href="#">Promotion</a></li>
              <li class="dropdown dropdown-mm">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reader<b class="caret"></b></a>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu dropdown-menu-mm dropdown-menu-persist">
                  <li class="row">
                    <ul class="col-md-6">
                      <li class="dropdown-header">Websites and Apps</li>
                      <li><a href="#">Profile</a></li>
                      <li><a href="<?php echo base_url('index.php/LibaryController')?>">My Library</a></li>
                      <li><a href="<?php echo base_url('index.php/HistoryPurchaseController') ?>">History purchase</a></li>
                      <li><a href="#">History top-up</a></li>
                      <li><a href="#">Favorite</a></li>
                      <li><a href="#">Top-up</a></li>
                    </ul>
                    <ul class="col-md-6">
                      <li class="dropdown-header">Enterprise solutions</li>
                      <li><a href="#">Business Analysis</a></li>
                      <li><a href="#">Custom UX Consulting</a></li>
                      <li><a href="#">Quality Assurance</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-footer">Dropdown footer</li>
                </ul>
              </li>
              <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Writer & Publisher<b class="caret"></b></a>
                <ul class="dropdown-menu dropdown-menu-mm dropdown-menu-persist">
                  <li class="row">
                    <ul class="col-md-6">
                      <li class="dropdown-header">Websites and Apps</li>
                      <li><a href="#">Profile</a></li>
                      <li><a href="<?php echo base_url('index.php/LibaryController')?>">My Library</a></li>                      
                      <li><a href="#">Upload book</a></li>
                      <li><a href="#">Add promotion</a></li>
                      <li><a href="#">Total sale</a></li>
                    </ul>
                    <ul class="col-md-6">
                      <li class="dropdown-header">Enterprise solutions</li>
                      <li><a href="#">Business Analysis</a></li>
                      <li><a href="#">Custom UX Consulting</a></li>
                      <li><a href="#">Quality Assurance</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-footer">Dropdown footer</li>
                </ul>
              </li>
              <li><a href="#">User Guide</a></li>
            </ul>
          </div>
          <!--/.navbar-collapse -->
        </div>
      </div>
    </div>
    <div class="hero" id="highlighted">
      <div class="inner">
        <!--Slideshow-->
        <div id="highlighted-slider" class="container">
          <div class="item-slider" data-toggle="owlcarousel" data-owlcarousel-settings='{"singleItem":true, "navigation":true, "transitionStyle":"fadeUp"}'>
            <!--Slideshow content-->
            <!--Slide 1-->
            <div class="item">
              <div class="row">
                <div class="col-md-6 col-md-push-6 item-caption">
                  <h2 class="h1 text-weight-light">
                      Welcome to <span class="text-primary">Flexor</span>
                    </h2>
                  <h4>
                      Super flexible responsive theme with a modest design touch.
                    </h4>
                  <p>Perfect for your App, Web service, company or portfolio! Magna tincidunt sociis ac integer amet non. Rhoncus augue? Tempor porttitor sed, aliquet phasellus a, nisi nunc aliquet nec rhoncus enim porttitor ultrices lacus tristique?</p>
                  <a href="https://bootstrapmade.com" class="btn btn-more btn-lg i-right">Buy Now <i class="fa fa-plus"></i></a>
                </div>
                <div class="col-md-6 col-md-pull-6 hidden-xs">
                  <img src="<?php echo base_url('assets/img/slides/slide1.png')?>" alt="Slide 1" class="center-block img-responsive">
                </div>
              </div>
            </div>
            <!--Slide 2-->
            <div class="item">
              <div class="row">
                <div class="col-md-6 text-right-md item-caption">
                  <h2 class="h1 text-weight-light">
                      <span class="text-primary">Flexor</span> Bootstrap Theme
                    </h2>
                  <h4>
                      High quality, responsive theme!
                    </h4>
                  <p>Perfect for your App, Web service, company or portfolio! Magna tincidunt sociis ac integer amet non. Rhoncus augue? Tempor porttitor sed, aliquet phasellus a, nisi nunc aliquet nec rhoncus enim porttitor ultrices lacus tristique?</p>
                  <a href="https://bootstrapmade.com" class="btn btn-more btn-lg"><i class="fa fa-plus"></i> Learn More</a>
                </div>
                <div class="col-md-6 hidden-xs">
                  <img src="<?php echo base_url('assets/img/slides/slide2.png')?>" alt="Slide 2" class="center-block img-responsive">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>