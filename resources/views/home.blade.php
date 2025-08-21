<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Buy Properties, Flats, House, Appartments and Villas in India - {{ $settings['site_name'] ?? 'Luxury Homes' }}
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description"
              content="Search over 200+ properties in India on Luxury Homes & Buy best houses, villa's, properties and flats. Contact us to check prices of properties, new arrivals & more. " />
        <meta name="keywords" content="">

        <meta property="og:title"
              content="Buy Properties, Flats, House, Appartments and Villas in India - {{ $settings['site_name'] ?? 'Luxury Homes' }}">
        <meta property="og:site_name" content="{{ $settings['site_name'] ?? 'Luxury Homes' }}">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="og:description" content="">
        <meta property="og:type" content="website">
        <meta property="og:image" content="{{ 
        str_starts_with($settings['site_logo'] ?? 'public/img/gallery/ks-logo-new.png', 'settings/') 
        ? asset('storage/' . ($settings['site_logo'] ?? 'public/img/gallery/ks-logo-new.png'))
        : asset($settings['site_logo'] ?? 'public/img/gallery/ks-logo-new.png') 
              }}">

        <!-- Favicons-->
        <link rel="shortcut icon" href="{{ 
        str_starts_with($settings['site_favicon'] ?? 'public/img/favicon.webp', 'settings/') 
        ? asset('storage/' . ($settings['site_favicon'] ?? 'public/img/favicon.webp'))
        : asset($settings['site_favicon'] ?? 'public/img/favicon.webp') 
              }}" type="image/x-icon">

        <!-- GOOGLE WEB FONT -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
              rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
              crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>

        <!-- BASE CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
              crossorigin="anonymous">

        <!-- Owl Carousel v2.2.1 CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">

        <link href="{{ asset('css/vendors.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- YOUR CUSTOM CSS -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Enhanced Logo Styles for Centered Header -->
        <style>
            /* Header container styling */
            .header_in {
                background: #ffffff;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
                border-bottom: 1px solid #f0f0f0;
                position: relative;
                z-index: 999;
            }

            .header_in .container {
                padding: 5px 15px;
            }

            .header_in .row {
                align-items: center;
                min-height: 80px;
            }

            /* Centered logo styling */
            .header_in #logo {
                padding: 15px 0;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100%;
            }

            .header_in #logo a {
                display: inline-block;
                line-height: 1;
                transition: all 0.3s ease;
            }

            .header_in #logo img.logo_sticky {
                max-width: 100%;
                height: auto;
                transition: all 0.3s ease;
                filter: brightness(1.1) contrast(1.15) saturate(1.1);
                object-fit: contain;
                border-radius: 3px;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            }

            .header_in #logo:hover img.logo_sticky {
                transform: scale(1.03);
                filter: brightness(1.25) contrast(1.3) saturate(1.2);
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
            }

            /* Mobile specific adjustments */
            @media (max-width: 767px) {
                .header_in .container {
                    padding: 3px 10px;
                }

                .header_in .row {
                    min-height: 60px;
                }

                .header_in #logo {
                    padding: 8px 0;
                }

                .header_in #logo img.logo_sticky {
                    max-height: 40px !important;
                }
            }

            /* Tablet specific adjustments */
            @media (min-width: 768px) and (max-width: 991px) {
                .header_in .row {
                    min-height: 70px;
                }

                .header_in #logo {
                    padding: 12px 0;
                }

                .header_in #logo img.logo_sticky {
                    max-height: 50px !important;
                }
            }

            /* Desktop enhancement */
            @media (min-width: 992px) {
                .header_in #logo img.logo_sticky {
                    max-height: 65px !important;
                }
            }

            /* Large desktop */
            @media (min-width: 1200px) {
                .header_in #logo img.logo_sticky {
                    max-height: 75px !important;
                }
            }

            /* Chat button styling - aligned to right */
            .main-menu {
                text-align: right;
                float: right;
                width: 100%;
            }

            .main-menu ul {
                display: block;
                margin: 0;
                padding: 0;
                list-style: none;
                text-align: right;
            }

            .main-menu ul li {
                display: inline-block;
                margin: 0;
                padding: 0;
            }

            .main-menu ul li span {
                display: inline-block;
            }

            .main-menu ul li span a {
                transition: all 0.3s ease;
                padding: 10px 18px !important;
                font-weight: 500;
                text-decoration: none;
                display: inline-block;
                margin: 0 !important;
                border-radius: 5px;
                background: rgb(250, 167, 10) !important;
                color: rgb(255, 255, 255) !important;
                font-size: 14px;
                letter-spacing: 0.5px;
            }

            .main-menu ul li span a:hover {
                background: rgb(245, 158, 11) !important;
                transform: translateY(-2px);
                box-shadow: 0 4px 12px rgba(250, 167, 10, 0.4);
                color: rgb(255, 255, 255) !important;
            }

            /* Mobile hamburger and menu alignment */
            .btn_mobile {
                display: none;
                float: right;
            }

            /* Right column alignment */
            .header_in .text-right {
                text-align: right !important;
                display: flex;
                justify-content: flex-end;
                align-items: center;
                margin-bottom: 35px;
            }

            @media (max-width: 991px) {
                .btn_mobile {
                    display: block;
                    float: right;
                    margin-right: 10px;
                }

                .main-menu {
                    text-align: right;
                    float: right;
                    clear: both;
                }

                .main-menu ul li span a {
                    padding: 8px 14px !important;
                    font-size: 13px;
                }

                .header_in .text-right {
                    justify-content: flex-end;
                    flex-direction: column;
                    align-items: flex-end;
                    margin-bottom: 35px;
                }
            }

            @media (max-width: 767px) {
                .main-menu ul li span a {
                    padding: 6px 12px !important;
                    font-size: 12px;
                }
            }
        </style>

        <link rel="canonical" href="{{ url()->current() }}" />
    </head>

    <body>
        <div id="page" class="theia-exception">
            <header class="header_in">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3 col-6 order-2 order-lg-1">
                            <!-- Left side - can be used for additional menu items if needed -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 order-1 order-lg-2">
                            <div id="logo" class="text-center">
                                <a href="{{ url('/') }}">
                                    @php
                                    $logoPath = $settings['site_logo'] ?? 'public/img/gallery/ks-logo.webp';
                                    $logoUrl = str_starts_with($logoPath, 'settings/') ? asset('storage/' . $logoPath) : asset($logoPath);
                                    @endphp
                                    <img src="{{ $logoUrl }}" alt="{{ $settings['site_name'] ?? config('app.name') }}" class="logo_sticky">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6 order-3 order-lg-3 text-right">

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
                                               href="https://api.whatsapp.com/send?phone={{ $settings['whatsapp_number'] ?? '' }}&amp;text=Hello, Need assistance with home buying">
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

                                    <div class="col-lg-3 col-md-3 col-3 cityb form-group p-0">
                                        <select class="wide nice-select wide" id="location-selector" name="city_id"
                                                onchange="changeLocation(this.value)">
                                            @foreach($cities as $city)
                                            <option value="{{ $city->id }}" {{ $defaultCity && $defaultCity->id == $city->id ? 'selected' : ''
                                                }}>
                                                {{ $city->title }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-7 bright">
                                        <div class="form-group">
                                            <input class="form-control city" type="hidden" id="city_str_home"
                                                   value="{{ $defaultCity ? $defaultCity->title : '' }}" placeholder="Enter Location, Project"
                                                   name="city_str_home">
                                            <input type="text" name="search_str_home" placeholder="Enter Location, Project" id="search_str_home"
                                                   class="form-control str search_str_home" autocomplete="off">

                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-2 srchb pz p-0">
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
                        <h2 id="top-selling-title">Top Selling Projects in {{ $defaultCity ? $defaultCity->title : 'All Cities' }}
                        </h2>
                        <p>Exclusive deals on Residential Projects</p>
                    </div>
                    <div id="carousel_in_topselling" class="owl-carousel owl-theme">
                        <!-- Top selling properties will be loaded here dynamically -->
                    </div>
                </div>

                <div class="container margin_60_35">
                    <div class="main_title_2">
                        <span><em></em></span>
                        <h2 id="top-investment-title">Top Investment Opportunity in {{ $defaultCity ? $defaultCity->title : 'All Cities' }}</h2>
                        <p>Exclusive deals on Residential Projects</p>
                    </div>
                    <div id="investment-properties-grid" class="row">
                        <!-- Top investment properties will be loaded here dynamically -->
                    </div>
                    <div class="text-center mt-4">
                        <button id="view-more-investment" class="btn btn-primary" style="display: none;">
                            View More Properties
                        </button>
                        <div id="loading-investment" style="display: none;">
                            <i class="fa fa-spinner fa-spin"></i> Loading...
                        </div>
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
                                <img src="{{ $banner->image_url }}" class="img-fluid" alt="{{ $banner->title }}">
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
                            <h2 id="developers-title">Reputed Developers in {{ $defaultCity ? $defaultCity->title : 'All Cities' }}</h2>
                            <a href="{{ url('/developers-in-' . ($defaultCity ? strtolower(str_replace(' ', '-', $defaultCity->title)) : 'all')) }}"
                               id="developers-link">See all</a>
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
            <div class="modal fade zoom-anim-dialog" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
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

                                <input type="hidden" id="developer" name="developer" value="" class="form-control">
                                <input type="hidden" id="project" name="project" value="" class="form-control">
                                <input type="hidden" name="source" value="Property Search Page" class="form-control">
                                <input type="hidden" name="url" value="{{ url()->current() }}" class="form-control">
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
                                        <input class="form-control" id="datetimepicker" name="datetime" class="form-control"
                                               placeholder="Date and Time" />
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
                                        {{ $settings['head_office_address'] ?? '' }}</li>
                                    <li><i class="ti-home"></i>Pune Branch:
                                        {{ $settings['branch_address'] ?? '' }}</li>
                                    <li><i class="ti-headphone-alt"></i><a
                                            href="tel:{{ str_replace(['+', ' ', '-'], '', $settings['phone_number'] ?? '') }}">{{ $settings['phone_number'] ?? '' }}</a></li>
                                    <li><i class="ti-email"></i><a href="mailto:{{ $settings['email_address'] ?? '' }}">{{ $settings['email_address'] ?? '' }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div id="">
                                <a href="{{ url('/') }}">
                                    @php
                                    $logoPath = $settings['site_logo'] ?? 'public/img/gallery/ks-logo.webp';
                                    $logoUrl = str_starts_with($logoPath, 'settings/') ? asset('storage/' . $logoPath) : asset($logoPath);
                                    @endphp
                                    <img src="{{ $logoUrl }}" width="200" height="70"
                                         alt="{{ $settings['site_name'] ?? config('app.name') }}" class="footerlogo">
                                </a>
                                <p class="whitte">Since 2014, {{ $settings['site_name'] ?? 'Developers' }} is committed to navigate your
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
                                                <li><a href="{{ $settings['facebook_url'] ?? 'https://www.facebook.com/' }}"
                                                       aria-label="Facebook"><i class="ti-facebook"></i></a></li>
                                                <li><a href="{{ $settings['instagram_url'] ?? 'https://www.instagram.com/' }}"
                                                       aria-label="Instagram"><i class="ti-instagram"></i></a></li>
                                                <li><a href="{{ $settings['twitter_url'] ?? 'https://x.com' }}" aria-label="Twitter"><i
                                                            class="ti-twitter"></i></a></li>
                                                <li><a href="{{ $settings['pinterest_url'] ?? 'https://in.pinterest.com' }}"
                                                       aria-label="Pinterest"><i class="ti-pinterest"></i></a></li>
                                                <li><a href="{{ $settings['youtube_url'] ?? 'https://www.youtube.com' }}" aria-label="YouTube"><i
                                                            class="ti-youtube"></i></a></li>
                                                <li><a href="{{ $settings['linkedin_url'] ?? 'https://in.linkedin.com' }}"
                                                       aria-label="Linkedin"><i class="ti-linkedin"></i></a></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <span>© 2025 {{ $settings['site_name'] ?? 'Developers' }} Pvt. Ltd</span>
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
      window.defaultCityId = "{{ $defaultCity ? $defaultCity->id : '' }}";
      window.defaultImage = "{{ asset('img/no-image.jpeg') }}";
        </script>

        <!-- Home page JavaScript -->
        <script src="{{ asset('js/home.js') }}"></script>
    </body>

</html>