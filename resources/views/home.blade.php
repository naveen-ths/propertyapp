<!DOCTYPE html>
<html lang="en">

<head>
    <title>Buy Properties, Flats, House, Appartments and Villas in India - Keystone Real Estate Advisory</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Search over 200+ properties in India on Keystone Real Estate Advisory & Buy best houses, villa's, properties and flats. Contact us to check prices of properties, new arrivals & more. " />
    <meta name="keywords" content="">

    <meta property="og:title"
        content="Buy Properties, Flats, House, Appartments and Villas in India - Keystone Real Estate Advisory">
    <meta property="og:site_name" content="Keystone Real Estate Advisory">
    <meta property="og:url" content="http://localhost:8000">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ url('public/img/gallery/ks-logo-new.png') }}">

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ url('public/img/favicon.webp') }}" type="image/x-icon">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    
    <!-- BASE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Owl Carousel v2.2.1 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">

    <link href="{{ asset('css/vendors.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="canonical" href="{{ url()->current() }}" />
</head>

<body>
    <div id="page" class="theia-exception">
        <header class="header_in">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <div id="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('public/img/gallery/ks-logo.webp') }}" alt="{{ config('app.name') }}"
                                    class="logo_sticky">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-12">

                        <!-- /top_menu -->
                        <a href="#menu" class="btn_mobile" aria-label="Mobile Menu">
                            <div class="hamburger hamburger--spin" id="hamburger">
                                <div class="hamburger-box">
                                    <div class="hamburger-inner"></div>
                                </div>
                            </div>
                        </a>
                        <nav id="menu" class="main-menu">
                            <ul>
                                <li>
                                    <span>
                                        <a target="_blank" rel="noreferrer"
                                            href="https://api.whatsapp.com/send?phone=917045670457&amp;text=Hello, Need assistance with home buying"
                                            style="background: rgb(250 167 10); border-radius: 5px; color: rgb(255, 255, 255);     margin-left: 15px;">
                                            CHAT NOW
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
            <!-- search_mobile -->
            <div class="layer"></div>
            <div id="search_mobile">
                <a href="#" class="side_panel"><i class="icon_close"></i></a>
                <div class="custom-search-input-2">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="What are you looking..">
                        <i class="icon_search"></i>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Where">
                        <i class="icon_pin_alt"></i>
                    </div>
                    <select class="wide" style="display: none;">
                        <option>All Categories</option>
                        <option>Shops</option>
                        <option>Hotels</option>
                        <option>Restaurants</option>
                        <option>Bars</option>
                        <option>Events</option>
                        <option>Fitness</option>
                    </select>
                    <div class="nice-select wide" tabindex="0"><span class="current">All Categories</span>
                        <ul class="list">
                            <li data-value="All Categories" class="option selected">All Categories</li>
                            <li data-value="Shops" class="option">Shops</li>
                            <li data-value="Hotels" class="option">Hotels</li>
                            <li data-value="Restaurants" class="option">Restaurants</li>
                            <li data-value="Bars" class="option">Bars</li>
                            <li data-value="Events" class="option">Events</li>
                            <li data-value="Fitness" class="option">Fitness</li>
                        </ul>
                    </div>
                    <input type="submit">
                </div>
            </div>
            <!-- /search_mobile -->
        </header>

        <!-- /header -->
        <main class="homepage">
            <section class="hero_single version_4">
                <div class="wrapper">
                    <div class="container smallc">
                        <h1><span class="color2">Find Your <br> Perfect Dream Home</span></h1>

                        <p></p>
                        <form method="GET" action="{{ route('search.results') }}" id="search-form-location">
                            <div class="row g-0 custom-search-input-2">

                                <div class="col-lg-3 col-md-3 col-3 cityb form-group">
                                    <select class="wide nice-select wide" id="location-selector" name="location" onchange="changeLocation(this.value)">
                                        <option value="mumbai" {{ $defaultLocation == 'mumbai' ? 'selected' : '' }}>Mumbai</option>
                                        <option value="pune" {{ $defaultLocation == 'pune' ? 'selected' : '' }}>Pune</option>
                                        <option value="bangalore" {{ $defaultLocation == 'bangalore' ? 'selected' : '' }}>Bangalore</option>
                                    </select>
                                </div>
                                <div class="col-lg-7 col-md-7 col-7 bright">
                                    <div class="form-group">
                                        <input class="form-control city" type="hidden" id="city_str_home"
                                            value="{{ $defaultLocation }}" placeholder="Enter Location, Project"
                                            name="city_str_home">
                                        <input type="text" name="search_str_home"
                                            placeholder="Enter Location, Project" id="search_str_home"
                                            class="form-control str search_str_home" autocomplete="off">

                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-2 srchb pz">
                                    <button type="submit" class="sbtn" id="sbtnh">
                                        <i class="ti-search"></i>
                                    </button>
                                </div>

                            </div>

                        </form>
                        <div id="product_list"></div>
                    </div>
                </div>
            </section>
            <div class="main_categories">
                <div class="container">

                    <ul class="clearfix">
                        <li>
                            <a href="">
                                <h2 class="timer count-title count-number" data-to="10" data-speed="1500"></h2>
                                <h3>YEARS OF EXPERIENCE</h3>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <h2 class="timer count-title count-number" data-to="30000" data-speed="1500"></h2>
                                <h3>SITE VISITS</h3>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <h2 class="timer count-title count-number" data-to="5000" data-speed="1500"></h2>
                                <h3>UNITS BOOKED</h3>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <h2 class="timer count-title count-number" data-to="15000" data-speed="1500"></h2>
                                <h3>HAPPY FACES </h3>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /container -->
            </div>



            <div class="container margin_60_35">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2 id="top-selling-title">Top Selling Projects in {{ ucfirst($defaultLocation) }}</h2>
                    <p>Exclusive deals on Residential Projects</p>
                </div>
                <div id="carousel_in_topselling" class="owl-carousel owl-theme">
                    <!-- Top selling properties will be loaded here dynamically -->
                </div>
            </div>

            <div class="container margin_60_35">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2 id="top-investment-title">Top Investment Opportunity in {{ ucfirst($defaultLocation) }}</h2>
                    <p>Exclusive deals on Residential Projects</p>
                </div>
                <div id="carousel_in" class="owl-carousel owl-theme">
                    <!-- Top investment properties will be loaded here dynamically -->
                </div>
            </div>

            <!-- Banner Section Start -->
            @if ($banner && $banner->status)
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center wow" data-wow-offset="150">
                            <figure class="block-reveal d-inline-block">
                                <div class="block-horizzontal"></div>
                                @if ($banner->image_url)
                                    <img src="{{ $banner->image_url }}" class="img-fluid"
                                        alt="{{ $banner->title }}">
                                @endif
                            </figure>
                            @if ($banner->button_text && $banner->button_url)
                                <div class="text-center mt-3">
                                    <a href="{{ $banner->button_url }}" class="btn_1 rounded loan">
                                        {{ $banner->button_text }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!--/row-->
                </div>
            @endif
            <!-- Banner Section End -->
            <!--/container-->
            <div class="call_section hide-mobile">
                <div class="wrapper">
                    <div class="container margin_60_35">
                        <div class="main_title_2">
                            <span><em></em></span>
                            <h2>How it Works</h2>
                            <p>Your Hassle-Free Property Buying Process</p>
                        </div>
                        <div class="row">
                            @foreach ($howItWorks as $item)
                                <div class="col-md-3">
                                    <div class="box_how">
                                        <i class="{{ $item->icon }}"></i>
                                        <h3>{{ $item->title }}</h3>
                                        <p class="text-center">{{ $item->description }}</p>
                                        <span></span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- /row -->
                        <p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5s"
                            style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">
                            <a href="{{ url('/contact') }}" class="btn_1 rounded">Contact Us
                                Now
                            </a>
                        </p>
                    </div>
                    <canvas id="hero-canvas" width="1920" height="1080"></canvas>
                </div>
                <!-- /wrapper -->
            </div>

            <div class="newbg">
                <div class="container margin_60_35">
                    <div class="main_title_3">
                        <span><em></em></span>
                        <h2 id="developers-title">Reputed Developers in {{ ucfirst($defaultLocation) }}</h2>
                        <a href="{{ url('/developers-in-' . $defaultLocation) }}" id="developers-link">See all</a>
                    </div>
                    <div id="carousel_in_dev" class="owl-carousel owl-theme hide-desktop">
                        <!-- Developers will be loaded here dynamically -->
                    </div>
                    <div class="row hide-mobile" id="developers-desktop">
                        <!-- Developers will be loaded here dynamically -->
                    </div>
                </div>
            </div>
        </main>
        <!-- /main -->
        <div class="modal fade zoom-anim-dialog" id="form" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-body">

                    <div class="small-dialog-header">
                        <h3>Enquire For <div id='pname'></div>
                        </h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="sign-in-wrapper">
                        <div class="alert alert-danger print-error-msg" style="display:none">
                            <ul></ul>
                        </div>
                        <div class="alert alert-success print-success-msg" style="display:none">
                            <ul></ul>
                        </div>
                        <form>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <input type="hidden" id="developer" name="developer" value=""
                                class="form-control">
                            <input type="hidden" id="project" name="project" value=""
                                class="form-control">
                            <input type="hidden" name="source" value="Property Search Page" class="form-control">
                            <input type="hidden" name="url" value="{{ url()->current() }}"
                                class="form-control">
                            <div class="form-group">
                                <input type="text" name="full_name" class="form-control" placeholder="Full Name">
                            </div>

                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Phone">
                            </div>

                            <div class="form-group">
                                <input type="text" name="emailid" class="form-control" placeholder="Email">
                            </div>

                            <div class="form-group form">

                                <div class="input-group date-time">
                                    <input class="form-control" id="datetimepicker" name="datetime"
                                        class="form-control" placeholder="Date and Time" />
                                </div>
                            </div>

                            <div class="form-group">
                                <button class=" add_top_30 btn_1 full-width purchase btn-submit">Submit</button>
                            </div>
                        </form>

                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--/main-->

        <footer class="plus_border">
            <div class="container margin_25_10">
                <div class="row">
                    <div class="col-lg-5 col-md-4 col-sm-12">
                        <h3 data-bs-target="#collapse_ft_3">Contact Us</h3>
                        <div class="collapse dont-collapse-sm" id="collapse_ft_3">
                            <ul class="contacts">
                                <li><i class="ti-home"></i>Mumbai Headquarter:
                                    A 401, New India chambers, E-6, kali mata, MIDC Cross Road A, Andheri East, Mumbai
                                    400 093</li>
                                <li><i class="ti-home"></i>Pune Branch:
                                    509,Suratwala Mark Plazzo,Wakad Hinjewadi road Hinjewadi Pune 411057.</li>
                                <li><i class="ti-headphone-alt"></i><a href="tel:7045670457">+91 70456 70457</a></li>
                                <li><i class="ti-email"></i><a
                                        href="mailto:info@keystonerealestateadvisory.com">info@keystonerealestateadvisory.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div id="">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('public/img/gallery/ks-logo.webp') }}"
                                    width="200" height="70" alt="{{ config('app.name') }}"
                                    class="footerlogo">
                            </a>
                            <p class="whitte">Since 2014, Keystone Real Estate Advisory is committed to navigate your
                                real estate experience. Being a trusted partner, we focus on clear communication and
                                transparent transactions at each step.</p>
                        </div><br>

                        <h3 data-bs-target="#collapse_ft_4">Keep in touch</h3>
                        <div class="collapse dont-collapse-sm" id="collapse_ft_4">

                            <div class="follow_us">
                                <!--<h5>Follow Us</h5>-->
                                <div class="shareArticle">
                                    <div class="shareSocial">
                                        <ul class="socialList">
                                            <li><a href="https://www.facebook.com/keystonerealestateadvisorypvtltd/"
                                                    aria-label="Facebook"><i class="ti-facebook"></i></a></li>
                                            <li><a href="https://www.instagram.com/keystonerealestateadvisory/"
                                                    aria-label="Instagram"><i class="ti-instagram"></i></a></li>
                                            <li><a href="https://x.com/keystone_rea" aria-label="Twitter"><i
                                                        class="ti-twitter"></i></a></li>
                                            <li><a href="https://in.pinterest.com/keystonerealestateadvisory/"
                                                    aria-label="Pinterest"><i class="ti-pinterest"></i></a></li>
                                            <li><a href="https://www.youtube.com/@keystone_real_estate_advisory"
                                                    aria-label="YouTube"><i class="ti-youtube"></i></a></li>
                                            <li><a href="https://in.linkedin.com/company/keystone-realestate-advisory"
                                                    aria-label="Linkedin"><i class="ti-linkedin"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                                <span>© 2024 Keystone Real Estate Advisory Pvt. Ltd</span>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- /row-->

            </div>
        </footer>
    </div>

    <div id="toTop"></div><!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
    <script src="{{ asset('js/common_scripts.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="{{ asset('assets/validate.js') }}"></script>

    <!-- Owl Carousel v2.2.1 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>

    <!-- Configuration variables for home.js -->
    <script>
        // Global configuration for home.js
        window.enquirySubmitRoute = "{{ route('enquiry.submit') }}";
        window.getLocationDataRoute = "{{ route('get.location.data') }}";
        window.defaultLocation = "{{ $defaultLocation }}";
        window.defaultImage = "{{ asset('img/no-image.jpeg') }}";
    </script>

    <!-- Home page JavaScript -->
    <script src="{{ asset('js/home.js') }}"></script>
</body>

</html>
