<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themes.potenzaglobalsolutions.com/html/hi-soft/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2021 19:57:38 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="keywords" content="HTML5 Template" />
  <meta name="description" content="Hi-soft - IT Solutions and Services Company HTML5 Template" />
  <meta name="author" content="potenzaglobalsolutions.com" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo:400,500,600,700&amp;display=swap">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/flaticon/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap/bootstrap.min.css')}}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{asset('frontend/css/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/animate/animate.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup/magnific-popup.css')}}" />

    <!-- Template Style -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />


    @stack('css')

  </head>
  <body>

    <!--=================================
    header -->
    <style>
      .header-transparent{
        position: relative;
      }
    </style>
    <header class="header header-transparent" style="background-color:#032e63">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
              <a class="navbar-brand" href="{{route('home')}}">
                <img class="img-fluid" src="{{asset('frontend/images/logo/logo2.png')}}" alt="logo" style="height: 50px;">
              </a>
              <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                  <li class="dropdown nav-item">
                    <a href="properties.html" class="nav-link" data-toggle="dropdown">Company</a>
                    <ul class="dropdown-menu">
                      <?php $companies = DB::table('companies')->latest()->get(); ?>
                      @foreach($companies as $company)
                        <li><a class="dropdown-item" href="{{route('company',$company->slug)}}">{{($company->company_service)}}<i class="fas fa-arrow-right"></i></a></li>
                      @endforeach
                    </ul>
                  </li>
                  <li class="dropdown nav-item">
                    <a href="properties.html" class="nav-link" data-toggle="dropdown">Services</a>
                      <ul class="dropdown-menu">
                        <?php $services = DB::table('services')->latest()->get(); ?>
                        @foreach($services as $service)
                          <li><a class="dropdown-item" href="{{route('service',$service->slug)}}">{{($service->service_name)}}<i class="fas fa-arrow-right"></i></a></li>
                        @endforeach
                      </ul>
                  </li>
                  <li class="nav-item {{ Request::is('portfolio') ? 'active' : '' }}"><a href="{{route('portfolio')}}" class="nav-link">Portfolio</a></li>
                  <li class="nav-item {{ Request::is('blog') ? 'active' : '' }}"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
                  <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                </ul>
              </div>
              <div class="d-none d-sm-flex ml-auto mr-5 mr-lg-0 pr-4 pr-lg-0">
                <ul class="nav ml-1 ml-lg-2 align-self-center">
                  <li class="header-search nav-item">
                    <div class="search">
                      <a class="search-btn not_click" href="javascript:void(0);"></a>
                      <div class="search-box not-click">
                        <form action="updating" method="get">
                          <input type="text" class="not-click form-control" name="search" placeholder="Search..">
                          <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
                        </form>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!--=================================
    header -->


    



    @yield('main_section')





   <!--=================================
    footer-->
    <footer class="footer space-pt">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-contact-info">
              <a href="index.html"><img class="img-fluid mb-4" src="{{asset('frontend/images/logo/logo1.png')}}" alt="logo" style="height: 60px; width: 150px;"></a>
              <p class="mb-2 mb-sm-4">West Jatrabari, Dhaka-1204, Bangladesh</p>
              <h4 class="mb-2 mb-sm-4 font-weight-bold"><a href="#">+(880) 1789977899</a></h4>
              <a class="text-dark" href="error-404.html">info@liliumit.com</a>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 mt-4 mt-md-0 pl-lg-5">
            <h5 class="text-primary mb-2 mb-sm-4">IT Services</h5>
            <div class="footer-link">
              <ul class="list-unstyled mb-0">
                <li><a href="#">Data Synchronization</a></li>
                <li><a href="error-404.html">Content Management</a></li>
                <li><a href="error-404.html">Content Delivery</a></li>
                <li><a href="error-404.html">Transaction Processing</a></li>
                <li><a href="error-404.html">Process Automation</a></li>
              </ul>
              <ul class="list-unstyled mb-0">
                <li><a href="error-404.html">Event Processing</a></li>
                <li><a href="error-404.html">Information Security</a></li>
                <li><a href="error-404.html">Mobile Platforms</a></li>
                <li><a href="error-404.html">Communications</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mt-4 mt-lg-0">
            <h5 class="text-primary mb-2 mb-sm-4">Company</h5>
            <div class="footer-link">
              <ul class="list-unstyled mb-0">
                <li><a href="error-404.html">About</a></li>
                <li><a href="error-404.html">Leadership Team</a></li>
                <li><a href="error-404.html">IT Blog</a></li>
                <li><a href="error-404.html">Case Studies</a></li>
                <li><a href="error-404.html">Locations</a></li>
                <li><a href="error-404.html">Careers <span class="badge badge-success ml-2">We're hiring</span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mt-4 mt-lg-0">
            <h5 class="text-primary mb-2 mb-sm-4">Support</h5>
            <div class="footer-link">
              <ul class="list-unstyled mb-0">
                <li><a href="error-404.html">Forum Support</a></li>
                <li><a href="error-404.html">Help &amp; FAQs</a></li>
                <li><a href="error-404.html">Contact Us</a></li>
                <li><a href="error-404.html">Pricing And Plans</a></li>
                <li><a href="error-404.html">Cookies Policy</a></li>
                <li><a href="error-404.html">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom mt-3 mt-md-5 py-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 text-center text-lg-left mb-3 mb-lg-0">
              <ul class="list-unstyled mb-0 social-icon">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-github"></i></a></li>
                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fab fa-behance"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-4 text-center text-lg-right">
              <p class="mb-0">©Copyright 2021 <a href="index.html">Lilium Info Tech</a> All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--=================================
    footer-->
    <!--=================================
    Back To Top-->
    <div id="back-to-top" class="back-to-top">up</div>
    <!--=================================
    Back To Top-->

  
      <!--=================================
      Javascript -->
  
      <!-- JS Global Compulsory (Do not remove)-->
      <script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
      <script src="{{asset('frontend/js/popper/popper.min.js')}}"></script>
      <script src="{{asset('frontend/js/bootstrap/bootstrap.min.js')}}"></script>
  
      <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
      <script src="{{asset('frontend/js/jquery.appear.js')}}"></script>
      <script src="{{asset('frontend/js/swiper/swiper.min.js')}}"></script>
      <script src="{{asset('frontend/js/swiperanimation/SwiperAnimation.min.js')}}"></script>
      <script src="{{asset('frontend/js/counter/jquery.countTo.js')}}"></script>
      <script src="{{asset('frontend/js/owl-carousel/owl.carousel.min.js')}}"></script>
      <script src="{{asset('frontend/js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
  
      <!-- Template Scripts (Do not remove)-->
      <script src="{{asset('frontend/js/custom.js')}}"></script>

      @stack('js')
  
    </body>
  
  <!-- Mirrored from themes.potenzaglobalsolutions.com/html/hi-soft/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2021 20:00:51 GMT -->
  </html>
  