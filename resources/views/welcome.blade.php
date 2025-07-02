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
    <!--<meta name="robots" content="noindex, nofollow"/>-->
    <link rel="shortcut icon" href="{{ url('public/img/favicon.webp') }}" type="image/x-icon">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BASE CSS -->
    {{-- <link href="https://keystonerealestateadvisory.com/public/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    {{-- <link href="https://keystonerealestateadvisory.com/public/css/vendors.css" rel="stylesheet"> --}}
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
                        <form method="post" action="">
                            <div class="row g-0 custom-search-input-2">

                                <div class="col-lg-3 col-md-3 col-3 cityb form-group">
                                    <select class="wide nice-select wide open" onchange="location = this.value;">
                                        <option value="{{ url('/buy/mumbai') }}">Mumbai
                                        </option>
                                        <option value="{{ url('/buy/pune') }}">Pune</option>
                                        <option value="{{ url('/buy/bangalore') }}">Bangalore
                                        </option>
                                    </select>
                                </div>
                                <div class="col-lg-7 col-md-7 col-7 bright">
                                    <div class="form-group">
                                        <input class="form-control city" type="hidden" id="city_str_home"
                                            value="mumbai" placeholder="Enter Location, Project"
                                            name="city_str_home">
                                        <input type="text" name="search_str_home"
                                            placeholder="Enter Location, Project" id="search_str_home"
                                            class="form-control str search_str_home" autocomplete="off">

                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-2 srchb pz">
                                    <button type="button" class="sbtn" id="sbtnh"
                                        onclick="funSearchhome()"><i class="ti-search"></i></button>
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
                    <h2>Top Selling Projects in Mumbai</h2>
                    <p>Exclusive deals on Residential Projects</p>
                </div>
                <div id="carousel_in_topselling" class="owl-carousel owl-theme">

                    <a href="{{ url('/buy/new/raymond-invictus-by-gs-project-thane-west-mumbai/1829') }}"
                        class="grid_item prop small">
                        <figure>
                            <img src="{{ asset('storage/app/uploads/property/jJ2WRXecIWfbVZC47eHSrR6zK5C4IQDWsXXnR6EX.jpg') }}"
                                class="img-fluid" alt="Raymond Invictus By GS">
                            <div class="info">
                                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i
                                        class="icon_star"></i><i class="icon_star"></i></div>
                                <h3>Raymond Invictus By GS </h3>
                                <p> <i class="fa-solid fa-house-chimney fa-2xs"></i> 4 BHK Apartment<br> <i
                                        class="fa-solid fa-location-dot fa-2xs"></i> Thane
                                    West, Mumbai</p>
                            </div>
                            <span class="pricing">
                                ₹ 6.68 Cr - 7.07 Cr
                            </span>
                            <small class="dnames">By Raymond Realty</small>

                        </figure>
                    </a>
                    <!-- /item -->

                    <a href="{{ url('/buy/new/shreedham-mansion-835-project-dadar-west-mumbai/1828') }}"
                        class="grid_item prop small">
                        <figure>
                            <img src="{{ asset('storage/app/uploads/property/rPyGPWi6xaxFQArlEqPTdVx69Y1QXgtx01kw3HFi.webp') }}"
                                class="img-fluid" alt="Shreedham Mansion 835">
                            <div class="info">
                                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i
                                        class="icon_star"></i><i class="icon_star"></i></div>
                                <h3>Shreedham Mansion 835 </h3>
                                <p> <i class="fa-solid fa-house-chimney fa-2xs"></i> 2 BHK Apartment<br> <i
                                        class="fa-solid fa-location-dot fa-2xs"></i> Dadar
                                    West, Mumbai</p>
                            </div>
                            <span class="pricing">
                                ₹ 2.40 Cr
                            </span>
                            <small class="dnames">By Shreedham Group</small>

                        </figure>
                    </a>
                    <!-- /item -->

                    <a href="{{ url('/buy/new/sejal-city-project-goregaon-east-mumbai/1827') }}"
                        class="grid_item prop small">
                        <figure>
                            <img src="{{ asset('storage/app/uploads/property/StZ4ORGhP1BTxJqJUg5CxHD5PSLdOPL2KYBXmbyS.webp') }}"
                                class="img-fluid" alt="Sejal City">
                            <div class="info">
                                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i
                                        class="icon_star"></i><i class="icon_star"></i></div>
                                <h3>Sejal City </h3>
                                <p> <i class="fa-solid fa-house-chimney fa-2xs"></i> 3,4 BHK Apartment<br> <i
                                        class="fa-solid fa-location-dot fa-2xs"></i>
                                    Goregaon East, Mumbai</p>
                            </div>
                            <span class="pricing">
                                ₹ 5.06 Cr - 6.75 Cr
                            </span>
                            <small class="dnames">By </small>

                        </figure>
                    </a>
                    <!-- /item -->

                    <a href="{{ url('/buy/new/anj-ananda-anushasan-chs-project-mahim-mumbai/1826') }}"
                        class="grid_item prop small">
                        <figure>
                            <img src="{{ asset('storage/app/uploads/property/baP8kVP5tt6cF6yrRDhpQDbgvSG8UATmcDvP4KS1.webp') }}"
                                class="img-fluid" alt="ANJ Ananda Anushasan CHS">
                            <div class="info">
                                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i
                                        class="icon_star"></i><i class="icon_star"></i></div>
                                <h3>ANJ Ananda Anushasan CHS </h3>
                                <p> <i class="fa-solid fa-house-chimney fa-2xs"></i> 2,3 BHK Apartment<br> <i
                                        class="fa-solid fa-location-dot fa-2xs"></i> Mahim,
                                    Mumbai</p>
                            </div>
                            <span class="pricing">
                                ₹ 2.22 Cr - 4.21 Cr
                            </span>
                            <small class="dnames">By ANJ Recon LLP</small>

                        </figure>
                    </a>
                    <!-- /item -->

                    <a href="{{ url('/buy/new/jess-jade-wisteria-project-matunga-east-mumbai/1825') }}"
                        class="grid_item prop small">
                        <figure>
                            <img src="{{ asset('storage/app/uploads/property/ETAU8xqpgvIfhi6X9ZTcNUTygdziHXkYtmJ7ACYd.webp') }}"
                                class="img-fluid" alt="Jess Jade Wisteria">
                            <div class="info">
                                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i
                                        class="icon_star"></i><i class="icon_star"></i></div>
                                <h3>Jess Jade Wisteria </h3>
                                <p> <i class="fa-solid fa-house-chimney fa-2xs"></i> 1,2,3 BHK Apartment<br> <i
                                        class="fa-solid fa-location-dot fa-2xs"></i>
                                    Matunga East, Mumbai</p>
                            </div>
                            <span class="pricing">
                                ₹ 3.29 Cr - 9.14 Cr
                            </span>
                            <small class="dnames">By Jess Construction Private Limited</small>

                        </figure>
                    </a>
                    <!-- /item -->

                    <a href="{{ url('/buy/new/uvk-sai-akshi-project-bhandup-west-mumbai/1824') }}"
                        class="grid_item prop small">
                        <figure>
                            <img src="{{ asset('storage/app/uploads/property/dLt2MhznHzER5Mju3d14LNhybnMfSvwvjLhzRU1F.webp') }}"
                                class="img-fluid" alt="UVK Sai Akshi">
                            <div class="info">
                                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i
                                        class="icon_star"></i><i class="icon_star"></i></div>
                                <h3>UVK Sai Akshi </h3>
                                <p> <i class="fa-solid fa-house-chimney fa-2xs"></i> 1 RK,1,2,3 BHK Apartment<br> <i
                                        class="fa-solid fa-location-dot fa-2xs"></i>
                                    Bhandup West, Mumbai</p>
                            </div>
                            <span class="pricing">
                                ₹ 55.26 Lac - 2.37 Cr
                            </span>
                            <small class="dnames">By UVK Group</small>

                        </figure>
                    </a>
                    <!-- /item -->

                    <a href="{{ url('/buy/new/avant-heritage-3-project-andheri-east-mumbai/1823') }}"
                        class="grid_item prop small">
                        <figure>
                            <img src="{{ asset('storage/app/uploads/property/r4crVWHi3mH0ITQ2lud4J668b49IRL3KaXoatq17.webp') }}"
                                class="img-fluid" alt="Avant Heritage 3">
                            <div class="info">
                                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i
                                        class="icon_star"></i><i class="icon_star"></i></div>
                                <h3>Avant Heritage 3 </h3>
                                <p> <i class="fa-solid fa-house-chimney fa-2xs"></i> 1 BHK Apartment<br> <i
                                        class="fa-solid fa-location-dot fa-2xs"></i> Andheri
                                    East, Mumbai</p>
                            </div>
                            <span class="pricing">
                                ₹ 1.00 Cr - 1.20 Cr
                            </span>
                            <small class="dnames">By Avant Group</small>

                        </figure>
                    </a>
                    <!-- /item -->

                    <a href="{{ url('/buy/new/ashwin-prem-bima-chhaya-project-mulund-east-mumbai/1822') }}"
                        class="grid_item prop small">
                        <figure>
                            <img src="{{ asset('storage/app/uploads/property/gV9qyptTXa2gk1GJ7wSBb8nLSRl2HH9Hf1ZKyUca.webp') }}"
                                class="img-fluid" alt="Ashwin Prem Bima Chhaya">
                            <div class="info">
                                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i
                                        class="icon_star"></i><i class="icon_star"></i></div>
                                <h3>Ashwin Prem Bima Chhaya </h3>
                                <p> <i class="fa-solid fa-house-chimney fa-2xs"></i> 2 BHK Apartment<br> <i
                                        class="fa-solid fa-location-dot fa-2xs"></i> Mulund
                                    East, Mumbai</p>
                            </div>
                            <span class="pricing">
                                ₹ 2.30 Cr - 2.37 Cr
                            </span>
                            <small class="dnames">By Ashwin Enterprises</small>

                        </figure>
                    </a>
                    <!-- /item -->
                </div>
            </div>

            <div class="container margin_60_35">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>Top Investment Opportunity in Mumbai</h2>
                    <p>Exclusive deals on Residential Projects</p>
                </div>
                <div id="carousel_in" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="strip grid">
                            <figure>
                                <a href="{{ url('/buy/new/19-east-project-nerul-mumbai/1666') }}">
                                    <img src="{{ asset('storage/app/uploads/property/icMRI8iMQkeLv21jDjshDb0kUscPUUhcgKtDPYhz.webp') }}"
                                        class="img-fluid" alt="19 East">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <small>Investment: 5 / 5</small>
                            </figure>
                            <div class="wrapper">
                                <h3>
                                    <a href="{{ url('/buy/new/19-east-project-nerul-mumbai/1666') }}">19
                                        East </a>
                                </h3>
                                <h5><a href="">by Bhagwati Group</a></h5>
                                <p> <i class="fa-solid fa-house-chimney fa-2xs"></i> 2,3,4 BHK Apartment<br> <i
                                        class="fa-solid fa-location-dot fa-2xs"></i>
                                    Nerul, Mumbai
                                </p>
                                <a class="address">
                                    ₹ 1.97 Cr - 6.81 Cr
                                </a>
                            </div>
                            <ul>
                                <li>
                                    <button type="button" class=" contactbtn loc_open" data-toggle="modal"
                                        data-target="#form" href="#form" data-id="19 East" data-pname="19 East"
                                        data-dname="Bhagwati Group">
                                        Enquire Now
                                    </button>
                                </li>
                                <li>
                                    <button class="btn btn-primary whatbtn"
                                        onclick="window.open('https://api.whatsapp.com/send?phone=+919310963636&amp;text=Hi!%20I\'m%20Interested%20In%2019 East, Nerul.%20Please%20Share%20Details.', '_blank');">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /item -->
                    <div class="item">
                        <div class="strip grid">
                            <figure>
                                <a href="{{ url('/buy/new/varsha-balaji-park-project-kharghar-mumbai/1665') }}">
                                    <img src="{{ asset('storage/app/uploads/property/5wlSjORqQibhWCwzo6fi0YpKEtv8IiwrsYLaGaNy.webp') }}"
                                        class="img-fluid" alt="Varsha Balaji Park">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <small>Investment: 5 / 5</small>
                            </figure>
                            <div class="wrapper">
                                <h3><a href="{{ url('/buy/new/varsha-balaji-park-project-kharghar-mumbai/1665') }}">Varsha
                                        Balaji Park </a>
                                </h3>
                                <h5><a href="">by Varsha Group</a></h5>
                                <p> <i class="fa-solid fa-house-chimney fa-2xs"></i> 2,3 BHK Apartment<br> <i
                                        class="fa-solid fa-location-dot fa-2xs"></i>
                                    Kharghar, Mumbai</p>
                                <a class="address">
                                    ₹ 1.64 Cr - 2.60 Cr
                                </a>
                            </div>
                            <ul>
                                <li>
                                    <button type="button" class=" contactbtn loc_open" data-toggle="modal"
                                        data-target="#form" href="#form" data-id="Varsha Balaji Park"
                                        data-pname="Varsha Balaji Park" data-dname="Varsha Group">
                                        Enquire Now
                                    </button>
                                </li>
                                <li>
                                    <button class="btn btn-primary whatbtn"
                                        onclick="window.open('https://api.whatsapp.com/send?phone=+919310963636&amp;text=Hi!%20I\'m%20Interested%20In%20Varsha Balaji Park, Kharghar.%20Please%20Share%20Details.', '_blank');">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /item -->
                    <div class="item">
                        <div class="strip grid">
                            <figure>
                                <a href="{{ url('/buy/new/uma-ananta-project-kharghar-mumbai/1652') }}">
                                    <img src="{{ asset('storage/app/uploads/property/RCLKDJ3533XDQe5CR2KDjJBbXt3O012jZmBNOdIM.webp') }}"
                                        class="img-fluid" alt="Uma Ananta">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <small>Investment: 5 / 5</small>
                            </figure>
                            <div class="wrapper">
                                <h3>
                                    <a href="{{ url('/buy/new/uma-ananta-project-kharghar-mumbai/1652') }}">
                                        Uma Ananta </a>
                                </h3>
                                <h5><a href="">by Uma Infratech</a></h5>
                                <p> <i class="fa-solid fa-house-chimney fa-2xs"></i> 2,3 BHK Apartment<br> <i
                                        class="fa-solid fa-location-dot fa-2xs"></i>
                                    Kharghar, Mumbai</p>
                                <a class="address">
                                    ₹ 91.75 Lac - 1.42 Cr
                                </a>
                            </div>
                            <ul>
                                <li>
                                    <button type="button" class=" contactbtn loc_open" data-toggle="modal"
                                        data-target="#form" href="#form" data-id="Uma Ananta"
                                        data-pname="Uma Ananta" data-dname="Uma Infratech">
                                        Enquire Now
                                    </button>
                                </li>
                                <li> <button class="btn btn-primary whatbtn"
                                        onclick="window.open('https://api.whatsapp.com/send?phone=+919310963636&amp;text=Hi!%20I\'m%20Interested%20In%20Uma Ananta, Kharghar.%20Please%20Share%20Details.', '_blank');">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    </button></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /item -->
                    <div class="item">
                        <div class="strip grid">
                            <figure>
                                <a href="{{ url('/buy/new/neelkanth-palm-president-project-ghansoli-mumbai/1649') }}">
                                    <img src="{{ asset('storage/app/uploads/property/3xkl6edT3cuov8McrJZ7RkBpYPA9U2wxUl6h373i.webp') }}"
                                        class="img-fluid" alt="Neelkanth Palm President">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <small>Investment: 5 / 5</small>
                            </figure>
                            <div class="wrapper">
                                <h3><a
                                        href="{{ url('/buy/new/neelkanth-palm-president-project-ghansoli-mumbai/1649') }}">Neelkanth
                                        Palm President </a></h3>
                                <h5><a href="">by Neelkanth Infratech</a></h5>
                                <p> <i class="fa-solid fa-house-chimney fa-2xs"></i> 2,3 BHK Apartment<br> <i
                                        class="fa-solid fa-location-dot fa-2xs"></i>
                                    Ghansoli, Mumbai</p>
                                <a class="address">
                                    ₹ 1.73 Cr - 3.07 Cr
                                </a>
                            </div>
                            <ul>
                                <li>
                                    <button type="button" class=" contactbtn loc_open" data-toggle="modal"
                                        data-target="#form" href="#form" data-id="Neelkanth Palm President"
                                        data-pname="Neelkanth Palm President" data-dname="Neelkanth Infratech">
                                        Enquire Now
                                    </button>
                                </li>
                                <li> <button class="btn btn-primary whatbtn"
                                        onclick="window.open('https://api.whatsapp.com/send?phone=+919310963636&amp;text=Hi!%20I\'m%20Interested%20In%20Neelkanth Palm President, Ghansoli.%20Please%20Share%20Details.', '_blank');">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    </button></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /item -->
                    <div class="item">
                        <div class="strip grid">
                            <figure>
                                <a
                                    href="https://keystonerealestateadvisory.com/buy/new/queens-necklace-project-kharghar-mumbai/1647">
                                    <img src="https://keystonerealestateadvisory.com/storage/app/uploads/property/gYRLpVPavxN1LJJ9iyBHufO39FHpny1bTYNLXIUH.webp"
                                        class="img-fluid" alt="Queens Necklace">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <!--<a href="detail-restaurant.html"><img src="img/location_1.jpg" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Read more</span></div></a>-->
                                <small>Investment: 5 / 5</small>
                            </figure>
                            <div class="wrapper">
                                <h3>
                                    <a
                                        href="https://keystonerealestateadvisory.com/buy/new/queens-necklace-project-kharghar-mumbai/1647">Queens
                                        Necklace
                                    </a>
                                </h3>
                                <h5><a href="">by Satyam Developers</a></h5>
                                <p> <i class="fa-solid fa-house-chimney fa-2xs"></i> 1,2 BHK Apartment<br> <i
                                        class="fa-solid fa-location-dot fa-2xs"></i>
                                    Kharghar, Mumbai
                                </p>
                                <a class="address">
                                    ₹ 57.93 Lac - 94.59 Lac
                                </a>
                            </div>
                            <ul>
                                <li>
                                    <button type="button" class=" contactbtn loc_open" data-toggle="modal"
                                        data-target="#form" href="#form" data-id="Queens Necklace"
                                        data-pname="Queens Necklace" data-dname="Satyam Developers">
                                        Enquire Now
                                    </button>
                                </li>
                                <li> <button class="btn btn-primary whatbtn"
                                        onclick="window.open('https://api.whatsapp.com/send?phone=+919310963636&amp;text=Hi!%20I\'m%20Interested%20In%20Queens Necklace, Kharghar.%20Please%20Share%20Details.', '_blank');">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /item -->
                    <div class="item">
                        <div class="strip grid">
                            <figure>
                                <a
                                    href="https://keystonerealestateadvisory.com/buy/new/marathon-nexzone-project-new-panvel-mumbai/1646">
                                    <img src="https://keystonerealestateadvisory.com/storage/app/uploads/property/9JuzPskpux3nWjxtEW6OmE2SMokpEPo6J779Uvtq.webp"
                                        class="img-fluid" alt="Marathon Nexzone">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <!--<a href="detail-restaurant.html"><img src="img/location_1.jpg" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Read more</span></div></a>-->
                                <small>Investment: 5 / 5</small>
                            </figure>
                            <div class="wrapper">
                                <h3><a
                                        href="https://keystonerealestateadvisory.com/buy/new/marathon-nexzone-project-new-panvel-mumbai/1646">Marathon
                                        Nexzone </a></h3>
                                <h5><a href="">by Marathon Group</a></h5>
                                <p> <i class="fa-solid fa-house-chimney fa-2xs"></i> 1,2,3 BHK Apartment<br> <i
                                        class="fa-solid fa-location-dot fa-2xs"></i> New
                                    Panvel, Mumbai</p>
                                <a class="address">
                                    ₹ 55.00 Lac - 1.80 Cr
                                </a>
                            </div>
                            <ul>
                                <li>
                                    <button type="button" class=" contactbtn loc_open" data-toggle="modal"
                                        data-target="#form" href="#form" data-id="Marathon Nexzone"
                                        data-pname="Marathon Nexzone" data-dname="Marathon Group">
                                        Enquire Now
                                    </button>
                                </li>
                                <li> <button class="btn btn-primary whatbtn"
                                        onclick="window.open('https://api.whatsapp.com/send?phone=+919310963636&amp;text=Hi!%20I\'m%20Interested%20In%20Marathon Nexzone, New Panvel.%20Please%20Share%20Details.', '_blank');">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    </button></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /item -->
                    <div class="item">
                        <div class="strip grid">
                            <figure>
                                <a
                                    href="https://keystonerealestateadvisory.com/buy/new/paradise-sai-world-city-project-panvel-mumbai/1639">
                                    <img src="https://keystonerealestateadvisory.com/storage/app/uploads/property/aLR1SO6XE9DF9TNN95bvJtnZjGfA5ZdvrZKgu5uu.webp"
                                        class="img-fluid" alt="Paradise Sai World City">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <!--<a href="detail-restaurant.html"><img src="img/location_1.jpg" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Read more</span></div></a>-->
                                <small>Investment: 5 / 5</small>
                            </figure>
                            <div class="wrapper">
                                <h3><a
                                        href="https://keystonerealestateadvisory.com/buy/new/paradise-sai-world-city-project-panvel-mumbai/1639">Paradise
                                        Sai World City </a></h3>
                                <h5><a href="">by Paradise Group</a></h5>
                                <p> <i class="fa-solid fa-house-chimney fa-2xs"></i> 2,3 BHK Apartment<br> <i
                                        class="fa-solid fa-location-dot fa-2xs"></i>
                                    Panvel, Mumbai</p>
                                <a class="address">
                                    ₹ 1.60 Cr - 2.37 Cr
                                </a>
                            </div>
                            <ul>
                                <li>
                                    <button type="button" class=" contactbtn loc_open" data-toggle="modal"
                                        data-target="#form" href="#form" data-id="Paradise Sai World City"
                                        data-pname="Paradise Sai World City" data-dname="Paradise Group">
                                        Enquire Now
                                    </button>
                                </li>
                                <li> <button class="btn btn-primary whatbtn"
                                        onclick="window.open('https://api.whatsapp.com/send?phone=+919310963636&amp;text=Hi!%20I\'m%20Interested%20In%20Paradise Sai World City, Panvel.%20Please%20Share%20Details.', '_blank');">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    </button></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /item -->
                    <div class="item">
                        <div class="strip grid">
                            <figure>
                                <a
                                    href="https://keystonerealestateadvisory.com/buy/new/paradise-sai-world-empire-project-kharghar-mumbai/1629">
                                    <img src="https://keystonerealestateadvisory.com/storage/app/uploads/property/SO9sIcC3WvOgOl1IWQbpVDJmUD3kCzh8f10rhkJN.webp"
                                        class="img-fluid" alt="Paradise Sai World Empire">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <!--<a href="detail-restaurant.html"><img src="img/location_1.jpg" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Read more</span></div></a>-->
                                <small>Investment: 5 / 5</small>
                            </figure>
                            <div class="wrapper">
                                <h3><a
                                        href="https://keystonerealestateadvisory.com/buy/new/paradise-sai-world-empire-project-kharghar-mumbai/1629">Paradise
                                        Sai World Empire </a></h3>
                                <h5><a href="">by Paradise Group</a></h5>
                                <p><i class="fa-solid fa-house-chimney fa-2xs"></i> 2,3,4 BHK Apartment<br> <i
                                        class="fa-solid fa-location-dot fa-2xs"></i>
                                    Kharghar, Mumbai</p>
                                <a class="address">
                                    ₹ 1.70 Cr - 4.22 Cr
                                </a>
                            </div>
                            <ul>
                                <li>
                                    <button type="button" class=" contactbtn loc_open" data-toggle="modal"
                                        data-target="#form" href="#form" data-id="Paradise Sai World Empire"
                                        data-pname="Paradise Sai World Empire" data-dname="Paradise Group">
                                        Enquire Now
                                    </button>
                                </li>
                                <li>
                                    <button class="btn btn-primary whatbtn"
                                        onclick="window.open('https://api.whatsapp.com/send?phone=+919310963636&amp;text=Hi!%20I\'m%20Interested%20In%20Paradise Sai World Empire, Kharghar.%20Please%20Share%20Details.', '_blank');">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /item -->
                </div>
            </div>

            <!-- Banner Section Start -->
            @if ($banner && $banner->status)
                <div class="container-fluid">
                    <div class="row justify-content-between">
                        <div class="col-lg-12 wow" data-wow-offset="150">
                            <figure class="block-reveal">
                                <div class="block-horizzontal"></div>
                                @if ($banner->image_url)
                                    <img src="{{ $banner->image_url }}" class="img-fluid"
                                        alt="{{ $banner->title }}">
                                @else
                                    <img src="https://keystonerealestateadvisory.com/public/ks/images/home-loan-banner.webp"
                                        class="img-fluid" alt="{{ $banner->title }}">
                                @endif
                            </figure>
                            @if ($banner->button_text && $banner->button_url)
                                <a href="{{ $banner->button_url }}" class="btn_1 rounded loan">
                                    {{ $banner->button_text }}
                                </a>
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
                    <!-- Swiper -->

                    <div class="main_title_3">
                        <span><em></em></span>
                        <h2>Reputed Developers in Mumbai </h2>
                        <a href="{{ url('/developers-in-mumbai') }}">See all</a>
                    </div>
                    <!--<div class="swiper-container">-->
                    <div id="carousel_in_dev" class="owl-carousel owl-theme hide-desktop">
                        @forelse($developers as $developer)
                            @if($developer->website_url)
                                <a href="{{ $developer->website_url }}" target="_blank">
                            @else
                                <div>
                            @endif
                                <div class="blocks">
                                    <ul class="menu_list">
                                        <li>
                                            <div class="thumb">
                                                @if($developer->logo_url)
                                                    <img src="{{ $developer->logo_url }}" alt="{{ $developer->name }}" width="100" height="100">
                                                @else
                                                    <div class="placeholder-logo" style="width: 100px; height: 100px; background: #f0f0f0; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                                                        <span style="font-size: 12px; color: #666;">No Logo</span>
                                                    </div>
                                                @endif
                                            </div>
                                            <h6>{{ $developer->name }}</h6>
                                            <h6>{!! $developer->star_rating !!}</h6>
                                            <p>{{ $developer->projects_count }} Projects</p>
                                        </li>
                                    </ul>
                                </div>
                            @if($developer->website_url)
                                </a>
                            @else
                                </div>
                            @endif
                        @empty
                            <div class="text-center">
                                <p>No developers found</p>
                            </div>
                        @endforelse
                    </div>
                    <div class="row hide-mobile">
                        @forelse($developers->take(8) as $developer)
                            <div class="col-md-3">
                                @if($developer->website_url)
                                    <a href="{{ $developer->website_url }}" target="_blank">
                                @else
                                    <div>
                                @endif
                                    <div class="blocks">
                                        <ul class="menu_list">
                                            <li>
                                                <div class="thumb">
                                                    @if($developer->logo_url)
                                                        <img src="{{ $developer->logo_url }}" alt="{{ $developer->name }}" width="100" height="100">
                                                    @else
                                                        <div class="placeholder-logo" style="width: 100px; height: 100px; background: #f0f0f0; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                                                            <span style="font-size: 12px; color: #666;">No Logo</span>
                                                        </div>
                                                    @endif
                                                </div>
                                                <h6>{{ $developer->name }}</h6>
                                                <h6>{!! $developer->star_rating !!}</h6>
                                                <p>{{ $developer->projects_count }} Projects</p>
                                            </li>
                                        </ul>
                                    </div>
                                @if($developer->website_url)
                                    </a>
                                @else
                                    </div>
                                @endif
                            </div>
                        @empty
                            <div class="col-12 text-center">
                                <p>No developers found</p>
                            </div>
                        @endforelse
                    </div>
                    <!-- Add Pagination -->
                    <!--  <div class="swiper-pagination"></div>-->
                    <!--</div>-->

                </div>
            </div>
        </main>
        <!-- /main -->
        <!--<div class="sticky_whatsapp">-->
        <!--       <a href="https://api.whatsapp.com/send?phone=+91 93109 63636&amp;text=Hello, I am Interested in buying a New Home. Please Share The Details" target="_blank">-->
        <!--           <i class="fa-brands fa-whatsapp stickywhat"></i>-->
        <!--       </a>-->
        <!--   </div>-->
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
                        <!--<div class="cover row">-->
                        <!--	        <div class="col-md-6">-->
                        <!--	             <button class="hide">Instant Call Back</button>-->
                        <!--	        </div>-->
                        <!--	         <div class="col-md-6">-->
                        <!--	            <button class="show">Book Free Site Visit</button>-->
                        <!--	        </div>-->


                        <!--              </div>-->
                        <div class="alert alert-danger print-error-msg" style="display:none">
                            <ul></ul>
                        </div>
                        <div class="alert alert-success print-success-msg" style="display:none">
                            <ul></ul>
                        </div>
                        <form>
                            <input type="hidden" name="_token" value="EF9msFBaD2a2jfBS0Z7gUQ8Xc1Z0mCm5XxXquThd">

                            <input type="hidden" id="developer" name="developer" value=""
                                class="form-control">
                            <input type="hidden" id="project" name="project" value=""
                                class="form-control">
                            <input type="hidden" name="source" value="Property Search Page" class="form-control">
                            <input type="hidden" name="url" value="https://keystonerealestateadvisory.com"
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
                            <a href="https://keystonerealestateadvisory.com">
                                <img src="https://keystonerealestateadvisory.com/public/img/gallery/ks-logo.webp"
                                    width="200" height="70" alt="keystonerealestateadvisory.com"
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
    <script src="https://keystonerealestateadvisory.com/public/js/common_scripts.js"></script>
    <script src="https://keystonerealestateadvisory.com/public/js/functions.js"></script>
    <script src="https://keystonerealestateadvisory.com/public/assets/validate.js"></script>

    <script type="text/javascript">
        $(document).rea dy(function() {
            $(".btn-submit").click(function(e) {
                e.preventDefault();
                $(".btn-submit").prepend('<i class="fa fa-spinner fa-spin"></i>');
                $(".btn-submit").attr("disabled", 'disabled');
                var _token = $("input[name='_token']").val();
                var full_name = $("input[name='full_name']").val();
                var phone = $("input[name='phone']").val();
                var emailid = $("input[name='emailid']").val();
                var project = $("input[name='project']").val();
                var developer = $("input[name='developer']").val();
                var url = $("input[name='url']").val();
                var source = $("input[name='source']").val();
                var message = $("input[name='message']").val();
                var datetime = $("input[name='datetime']").val();
                // alert(full_name);
                $.ajax({
                    url: "https://keystonerealestateadvisory.com/my-form",
                    type: 'POST',
                    data: {
                        _token: _token,
                        full_name: full_name,
                        phone: phone,
                        emailid: emailid,
                        project: project,
                        developer: developer,
                        url: url,
                        source: source,
                        message: message,
                        datetime: datetime
                    },
                    success: function(data) {
                        if ($.isEmptyObject(data.error)) {
                            // alert(data.success);
                            printSuccessMsg(data.success);
                        } else {
                            printErrorMsg(data.error);
                        }
                        $(".btn-submit").find(".fa-spinner").remove();
                        $(".btn-submit").removeAttr("disabled");
                    }
                });
            });

            function printSuccessMsg(msg) {
                $(".print-success-msg").find("ul").html('');
                $(".print-success-msg").css('display', 'block');
                // $.each( msg, function( key, value ) {
                var value = 'Our Sales team will get back to you shortly!';
                $(".print-success-msg").find("ul").append('<li>' + value + '</li>');
                setTimeout(function() {
                    $(".print-success-msg").css('display', 'none');
                    $(".modal").css('display', 'none');
                }, 3000);
                var a = document.getElementsByClassName('form-control');
                // a = HTMLCollection
                console.log(a);
                // You can iterate over HTMLCollection.
                for (var i = 0; i < a.length; i++) {
                    // You can set the value in every item in the HTMLCollection.
                    a[i].value = "";
                }
                // });
            }

            function printErrorMsg(msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display', 'block');
                $.each(msg, function(key, value) {
                    $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
                });
                setTimeout(function() {
                    $(".print-error-msg").css('display', 'none');
                }, 3000);
                var a = document.getElementsByClassName('form-control');
                // a = HTMLCollection
                console.log(a);
                // You can iterate over HTMLCollection.
                for (var i = 0; i < a.length; i++) {
                    // You can set the value in every item in the HTMLCollection.
                    a[i].value = "";
                }
                //$(".btn-submit").reset();
            }
        });
    </script>

    <script>
        function funSearch() {
            //alert("sss");

            var str = jQuery('#search_str').val();
            var city = jQuery('#city_str').val();
            jQuery('#str').val(str);
            jQuery('#city_str').val(city);
            // alert(city); 
            // if(search_str!='' && search_str.length>3){
            window.location.href = "/buy/search/?city=" + city + "&str=" + str;
            // jQuery('#categoryFilter').submit();
            // window.location.href='/housing/buy/search/'+search_str;
            //window.location.href='/housing/buy/search?city='+city_str'&str='+search_str';
            // }
        }
    </script>
    <script></script>
    <!-- DATEPICKER  -->

    <!-- CAROUSEL -->
    <script>
        $('#carousel_in_blog').owlCarousel({
            margin: 15,
            autoplay: true,
            rewind: false,
            /* use rewind if you don't want loop */
            loop: true,
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 7000,
            smartSpeed: 800,
            //   nav: true,
            //   navText: [
            //     '<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>',
            //     '<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>'],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1024: {
                    items: 1
                },
                1366: {
                    items: 1
                }
            }
        });
        $('#carousel_in_dev').owlCarousel({
            margin: 15,
            autoplay: true,
            rewind: false,
            /* use rewind if you don't want loop */
            loop: true,
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 7000,
            smartSpeed: 800,
            //   nav: true,
            //   navText: [
            //     '<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>',
            //     '<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>'],
            responsive: {
                0: {
                    items: 1.4
                },

                600: {
                    items: 3
                },

                1024: {
                    items: 4
                },

                1366: {
                    items: 4
                }
            }
        });
        $('#carousel_in_regions').owlCarousel({
            margin: 15,
            autoplay: true,
            rewind: false,
            /* use rewind if you don't want loop */
            loop: true,
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 7000,
            smartSpeed: 800,
            //   nav: true,
            //   navText: [
            //     '<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>',
            //     '<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>'],
            responsive: {
                0: {
                    items: 1.2
                },

                600: {
                    items: 3
                },

                1024: {
                    items: 4
                },

                1366: {
                    items: 4
                }
            }
        });
        $('#carousel_in_topselling').owlCarousel({
            margin: 15,
            autoplay: true,
            rewind: false,
            /* use rewind if you don't want loop */
            loop: true,
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 7000,
            smartSpeed: 800,
            //   nav: true,
            responsive: {
                0: {
                    items: 1.2
                },

                600: {
                    items: 2
                },

                1024: {
                    items: 2.3
                },

                1366: {
                    items: 2.4
                }
            }
        });
        $('#carousel_in').owlCarousel({
            margin: 15,
            autoplay: true,
            rewind: false,
            /* use rewind if you don't want loop */
            loop: true,
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 7000,
            smartSpeed: 800,
            //   nav: true,
            //   navText: [
            //     '<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>',
            //     '<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>'],
            responsive: {
                0: {
                    items: 1.2
                },

                600: {
                    items: 3
                },

                1024: {
                    items: 4
                },

                1366: {
                    items: 4
                }
            }
        });
    </script>
    <script>
        function funSearchhome() {
            //alert("aa");
            var search_str = jQuery('.str').val();
            var city_str = jQuery('.city').val();
            //alert(search_str);
            // && search_str.length>3
            if (search_str != '') {
                window.location.href = "/buy/search/?city=" + city_str + "&str=" + search_str;
                // window.location.href='/housing/buy/search/'+search_str;
                //window.location.href='/housing/buy/search?city='+city_str'&str='+search_str';
                // jQuery('#categoryFilter').submit();
            }
        }
    </script>
    <script>
        var input = document.getElementById("search_str_home");
        //var input = document.getElementsByClassName("search_str_home")
        input.addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
                event.preventDefault();
                document.getElementById("sbtnh").click();
            }
        });
    </script>
    <script>
        $(document).on("click", ".contactbtn", function() {
            // var myBookId = $(this).data('id');
            var myPname = $('#pname').html($(this).data('id'));
            var project = $(this).data('pname');
            var developer = $(this).data('dname');
            $(".modal-body #pname").val(myPname);
            $(".modal-body #project").val(project);
            $(".modal-body #developer").val(developer);
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var city_str_home = document.getElementById("city_str_home").value;
            $('#search_str_home').on('keyup', function() {
                var query = $(this).val();
                //	 alert(city_str_home); 
                $.ajax({
                    url: 'https://keystonerealestateadvisory.com/search',
                    type: 'GET',
                    data: {
                        'search_str_home': query,
                        'city_str_home': city_str_home
                    },
                    success: function(data) {
                        $('#product_list').html(data);
                    }
                })
            });
            $(document).on('click', 'li', function() {
                var value = $(this).text();
                $('#search_str_home').val(value);
                $('#product_list').html("");
            });
        });
    </script>
    <script>
        (function($) {
            $.fn.countTo = function(options) {
                options = options || {};
                return $(this).each(function() {
                    // set options for current element
                    var settings = $.extend({},
                        $.fn.countTo.defaults, {
                            from: $(this).data("from"),
                            to: $(this).data("to"),
                            speed: $(this).data("speed"),
                            refreshInterval: $(this).data("refresh-interval"),
                            decimals: $(this).data("decimals")
                        },
                        options
                    );
                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;
                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data("countTo") || {};
                    $self.data("countTo", data);
                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);
                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;
                        render(value);
                        if (typeof settings.onUpdate == "function") {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData("countTo");
                            clearInterval(data.interval);
                            value = settings.to;
                            if (typeof settings.onComplete == "function") {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };
            $.fn.countTo.defaults = {
                from: 0, // the number the element should start at
                to: 0, // the number the element should end at
                speed: 1000, // how long it should take to count between the target numbers
                refreshInterval: 100, // how often the element should be updated
                decimals: 0, // the number of decimal places to show
                formatter: formatter, // handler for formatting the value before rendering
                onUpdate: null, // callback method for every time the element is updated
                onComplete: null // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        })(jQuery);
        jQuery(function($) {
            // custom formatting example
            $(".count-number").data("countToOptions", {
                formatter: function(value, options) {
                    return value
                        .toFixed(options.decimals)
                        .replace(/\B(?=(?:\d{3})+(?!\d))/g, ",");
                }
            });
            // start all the timers
            $(".timer").each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data("countToOptions") || {});
                $this.countTo(options);
            }
        });
    </script>

    <script type="application/ld+json">
            {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Keystone Real Estate Advisory Pvt Ltd",
            "image": "https://keystonerealestateadvisory.com/public/img/gallery/ks-logo.png",
            "@id": "",
            "url": "https://keystonerealestateadvisory.com/",
            "telephone": "+917045670457",
            "priceRange": "INR",
            "address": {
            "@type": "PostalAddress",
            "streetAddress": "A/401, New India Chamber, Cross Rd A, Chakala Industrial Area (MIDC), Andheri East",
            "addressLocality": "Mumbai",
            "postalCode": "400093",
            "addressCountry": "IN"
            },
            "geo": {
            "@type": "GeoCoordinates",
            "latitude": 19.1215536,
            "longitude": 72.8659943
            },
            "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday"
            ],
            "opens": "10:00",
            "closes": "07:00"
            },
            "sameAs": [
            "https://www.facebook.com/keystonerealestateadvisorypvtltd/",
            "https://x.com/keystone_rea",
            "https://www.youtube.com/@keystone_real_estate_advisory",
            "https://in.linkedin.com/company/keystone-realestate-advisory",
            "https://www.instagram.com/keystonerealestateadvisory/",
            "https://in.pinterest.com/keystonerealestateadvisory/"
            ] 
            }
        </script>
    <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "Keystone Real Estate Advisory",
            "url": "https://keystonerealestateadvisory.com/",
            "potentialAction": {
            "@type": "SearchAction",
            "target": "https://keystonerealestateadvisory.com/buy/search?{search_term_string}https://keystonerealestateadvisory.com/buy/search?city=mumbai",
            "query-input": "required name=search_term_string"
            }
            }
        </script>
    <script>
        $(document).ready(function() {
            $('input.deletable').wrap('<span class="deleteicon"></span>').after($('<span>x</span>').click(
                function() {
                    $(this).prev('input').val('').trigger('change').focus();
                }));
        });
    </script>
    <script>
        var input = document.getElementById("search_str");
        input.addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
                event.preventDefault();
                document.getElementById("sbtn").click();
            }
        });
    </script>
</body>

</html>
