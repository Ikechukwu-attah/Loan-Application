<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/loanly/loan-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Feb 2021 08:33:38 GMT -->
<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/loanly/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Feb 2021 08:31:54 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="keywords" content="#">
	<meta name="description" content="#">
	<title>Loanly | Dashboard</title>
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('frontend/assets/images/favicon.ico') }}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('frontend/assets/images/favicon.ico') }}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('frontend/assets/images/favicon.ico') }}">
	<link rel="apple-touch-icon-precomposed" href="#">
	<link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">
	<!-- Bootstrap -->
	<link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Fontawesome -->
	<link href="{{ asset('frontend/assets/css/font-awesome.css') }}" rel="stylesheet">
	<!-- Flaticons -->
	<link href="{{ asset('frontend/assets/css/font/flaticon.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/font/flaticon.css') }}" rel="stylesheet">
	<!-- Slick Slider -->
	<link href="{{ asset('frontend/assets/css/slick.css') }}" rel="stylesheet">
	<!-- Range Slider -->
	<link href="{{ asset('frontend/assets/css/ion.rangeSlider.min.css') }}" rel="stylesheet">
	<!-- Datepicker -->
	<link href="{{ asset('frontend/assets/css/datepicker.css') }}" rel="stylesheet">
	<!-- magnific popup -->
	<link href="{{ asset('frontend/assets/css/magnific-popup.css') }}" rel="stylesheet">
	<!-- Nice Select -->
	<link href="{{ asset('frontend/assets/css/nice-select.css') }}" rel="stylesheet">
	<!-- Animate -->
	<link href="{{ asset('frontend/assets/css/animate.css') }}" rel="stylesheet">
	<!-- Custom Stylesheet -->
	<link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
	<!-- Custom Responsive -->
	<link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- place -->
</head>


<body>
    
    <div class="main-body">
        <!-- Start Header -->
        <header class="header-style-1">
            <!-- Start Topbar -->
            <div class="topbar-style-1">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="left-side">
                                <div class="language-box">
                                    <div class="language p-relative">
                                        <img src="{{ asset('frontend/assets/images/flag.png') }}" alt="flag">
                                        <select>
                                            <option>English</option>
                                            <option>German</option>
                                            <option>Japanese</option>
                                        </select>
                                    </div>
                                </div>
                                <p class="text-custom-white no-margin">9000 Regency Parkway, Suite 400 Cary</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="right-side">
                                <ul class="custom">
                                    <li><a href="#" class="text-custom-white fs-14"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#" class="text-custom-white fs-14"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="text-custom-white fs-14"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                    <li><a href="#" class="text-custom-white fs-14"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li class="search"><a href="javascript:void(0)" class="text-custom-white fs-14"><i class="fas fa-search"></i></a>
                                    </li>
                                    <li class="topbar-search">
                                        <form method="get">
                                            <input type="search" class="form-control form-control-custom" name="search" placeholder="Search..." value="">
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Topbar -->
            <!-- Start Navigation -->
            <div class="main-navigation-style-1">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="navigation">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="{{ asset('frontend/assets/images/logo.png') }}" class="img-fluid image-fit" alt="Logo">
                                    </a>
                                </div>
                                <div class="main-menu">
                                    <div class="mobile-logo">
                                        <a href="index.html">
                                            <img src="{{ asset('frontend/assets/images/logo.png') }}" class="img-fluid image-fit" alt="Logo">
                                        </a>
                                    </div>
                                    <nav>
                                        <ul class="custom">
                                            <li class="menu-item"> <a href="{{ route('home') }}" class="text-custom-white">Home</a>
                                            </li>
                                            <li class="menu-item "> <a href="{{ route('basic-info', [Auth::user()->id]) }}" class="text-custom-white">Basic Info</a>
                                            </li>
                                            <li class="menu-item "> <a href="{{ route('personal-info', [Auth::user()->id]) }}" class="text-custom-white">Personal Info</a>
                                            </li>
                                            <li class="menu-item  "> <a href="{{ route('emergency-address', [Auth::user()->id]) }}" class="text-custom-white">Emergency Contact</a>
                                            </li>
                                            <li class="menu-item "> <a href="{{ route('bank-detail', [Auth::user()->id]) }}" class="text-custom-white">Bank Details</a>
                                            </li>
                                            <li class="menu-item "> <a href="{{ route('card', [Auth::user()->id]) }}" class="text-custom-white">My Cards</a>
                                                
                                            </li>
                                            
                                        </ul>
                                    </nav>
                                    <div class="right-side">
                                        <div class="cta-btn"> <a href="{{ route('userinfo') }}" class="btn-first btn-submit">
                        Apply Today
                      </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="hamburger-menu">
                                    <div class="menu-btn"> <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navigation -->
        </header>
        <!-- End Header -->
        <!-- Start Subheader -->
        <div class="sub-header p-relative">
            <div class="overlay overlay-bg-black"></div>
            <div class="pattern"></div>
            <div class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="sub-header-content p-relative">
                                <h1 class="text-custom-white lh-default fw-600">Dashboard</h1>
                                <ul class="custom">
                                    <li> <a href="{{ route('home') }}" class="text-custom-white">Home</a>
                                    </li>
                                     @if(Auth::user()->subscriber == 1)
                                     <li> <a href="{{ route('admin-db') }}" class="text-custom-white">Admin Panel</a>
                                     </li>  
                                     @endif
                                      <li>
                                        <a class="text-custom-white" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                                     </a>
 
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                         @csrf
                                     </form>
                                      </li>
                                    <li class="text-custom-white active">Dashboard</li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subheader -->
        <!-- Start User Dashboard -->
        {{-- <section class="section-padding user-dashboard-sec bg-gray">
            <div class="container">
                 <div class="row">
                    <div class="col-12">
                        <div class="dashboard-first-sec">
                             <div class="row">
                                <div class="col-lg-6 align-self-center">
                                    <div class="left-side mb-md-80">
                                        <h3><a href="#" class="text-custom-black" target="_blank">www.companyname.com</a></h3>
                                        <h5 class="no-margin fw-600" data-toggle="collapse" data-target="#user-profile"><a href="#" class="text-custom-blue">Your Loan Profile</a></h5>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="right-side">
                                        <ul class="custom">
                                            <li>
                                                <div class="icon-box">
                                                    <img src="{{ asset('frontend/assets/images/more.png') }}" alt="icon">
                                                </div>
                                                <p class="text-custom-black">Get more out of <br>Loanly</p>
                                            </li>
                                            <li>
                                                <div class="icon-box">
                                                    <img src="{{ asset('frontend/assets/images/connect.png') }}" alt="icon">
                                                </div>
                                                <p class="text-custom-black">Connect with the <br>best</p>
                                            </li>
                                            <li>
                                                <div class="icon-box">
                                                    <img src="{{ asset('frontend/assets/images/move.png') }}" alt="icon">
                                                </div>
                                                <p class="text-custom-black">Plan your next <br>move</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div>
        </section> --}}

       @yield('content')

        <!-- End User Dashboard -->
        <!-- Start Footer -->
        {{-- <footer class="bg-black section-padding footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-box mb-md-80">
                            <div class="footer-heading">
                                <h4 class="text-custom-white no-margin">Useful Links</h4>
                            </div>
                            <ul class="custom links">
                                <li> <a href="about.html" class="text-custom-white">About Us</a>
                                </li>
                                <li> <a href="service.html" class="text-custom-white">Service</a>
                                </li>
                                <li> <a href="blog.html" class="text-custom-white">Blog</a>
                                </li>
                                <li> <a href="team.html" class="text-custom-white">Team</a>
                                </li>
                                <li> <a href="contact.html" class="text-custom-white">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-box mb-md-80">
                            <div class="footer-heading">
                                <h4 class="text-custom-white no-margin">Featured Post</h4>
                            </div>
                            <ul class="custom popular_post">
                                <li>
                                    <div class="post">
                                        <div class="post-wrapper">
                                            <div class="popular_post_img animate-img">
                                                <a href="blog-single.html">
                                                    <img src="{{ asset('frontend/assets/images/insta/insta9.jpg') }}" class="img-fluid image-fit" alt="#">
                                                </a>
                                            </div>
                                            <div class="popular_post_title">
                                                <h6><a href="blog-single.html" class="text-custom-white fs-14 fw-400">8 Tips to Help You Finding New Home</a></h6>
                                                <div class="post-date">
                                                    <p class="text-white no-margin">March 20 2020</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post">
                                        <div class="post-wrapper">
                                            <div class="popular_post_img animate-img">
                                                <a href="blog-single.html">
                                                    <img src="{{ asset('frontend/assets/images/insta/insta10.jpg') }}" class="img-fluid image-fit" alt="#">
                                                </a>
                                            </div>
                                            <div class="popular_post_title">
                                                <h6><a href="blog-single.html" class="text-custom-white fs-14 fw-400">Bedroom Colors You'll Never Regret</a></h6>
                                                <div class="post-date">
                                                    <p class="text-white no-margin">09 Jan 2020</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-box mb-xs-80">
                            <div class="footer-heading">
                                <h4 class="text-custom-white no-margin">Twitter Feeds</h4>
                            </div>
                            <ul class="custom twitter-feed twitter-slider">
                                <li>
                                    <p class="tweet">Do you work with video? Help us improve our video offering by taking this quick 2 minute survey. <a href="#">demo.com</a>
                                    </p>
                                    <p class="timePosted"><a href="#">Posted on Dec 18, 2017</a>
                                    </p>
                                </li>
                                <li>
                                    <p class="tweet">Do you work with video? Help us improve our video offering by taking this quick 2 minute survey. <a href="#">demo.com</a>
                                    </p>
                                    <p class="timePosted"><a href="#">Posted on Dec 18, 2017</a>
                                    </p>
                                </li>
                                <li>
                                    <p class="tweet">Do you work with video? Help us improve our video offering by taking this quick 2 minute survey. <a href="#">demo.com</a>
                                    </p>
                                    <p class="timePosted"><a href="#">Posted on Dec 18, 2017</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-box">
                            <div class="footer-heading">
                                <h4 class="text-custom-white no-margin">News Letter</h4>
                            </div>
                            <div class="newsletter">
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-custom" placeholder="Email Id">
                                    </div>
                                    <button class="btn-first btn-submit-fill btn-height full-width" type="submit">Subscribe</button>
                                </form>
                            </div>
                            <div class="social-media">
                                <ul class="custom social-media">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fab fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </footer> --}}
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="payment-logo mb-md-20"> <span class="text-custom-white fs-14 mr-3">We are accept</span>
                            <div class="payemt-icon">
                                <img src="{{ asset('frontend/assets/images/footer-bottom-img.png') }}" alt="#">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p class="text-custom-white no-margin">© Metropolitantheme - 2020 | All Right Reserved. <a href="https://themeforest.net/user/metropolitantheme/" target="_blank" class="text-custom-white">Designed By Metropolitantheme</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer -->
        <!-- back to top -->
        <div id="back-top" class="back-top"> <a href="#top"><i class="flaticon-up-arrow"></i></a>
        </div>
    </div>








<!-- End Main Body -->
<!-- Place all Scripts Here -->
<!-- jQuery -->
<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
<!-- Popper -->
<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<!-- Range Slider -->
<script src="{{ asset('frontend/assets/js/ion.rangeSlider.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
<!-- Datepicker -->
<script src="{{ asset('frontend/assets/js/datepicker.js') }}"></script>
<script src="{{ asset('frontend/assets/js/datepicker.en.js') }}"></script>
<!-- Nice Select -->
<script src="{{ asset('frontend/assets/js/jquery.nice-select.js') }}"></script>
<!-- Steps -->
<script src="{{ asset('frontend/assets/js/jquery-steps.js') }}"></script>
<!-- Nice Select -->
<script src="{{ asset('frontend/assets/js/particles.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
<!-- Isotope Gallery -->
<script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
<!-- Wow js -->
<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
<!-- /Place all Scripts Here -->
</body>


<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/loanly/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Feb 2021 08:32:18 GMT -->
</html>
























