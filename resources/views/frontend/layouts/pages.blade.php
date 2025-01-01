<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="25 Downtown">
        <meta name="keywords" content="@yield('metaKeywords')">
        <meta name="description" content="@yield('metaDescription')">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://the25downtown.com/" class="yoast-seo-meta-tag" />
        <meta property="og:locale" content="en_US" class="yoast-seo-meta-tag" />
        <meta property="og:type" content="article" class="yoast-seo-meta-tag" />

        <meta property="og:title" content=" 25 Downtown Tardeo, Mumbai -  Price List | Brochure | Floor Plans | Amenities | Location | Reviews | 4 BED | 5 BED | Flats - Hubtown Group " class="yoast-seo-meta-tag" />
        <meta property="og:description" content="Get 25 Downtown Tardeo, South Mumbai Project location, Price list, Floor Plan, Brochure pdf, sample flat, Project reviews, complaints, Cost Sheet, Flat Price" class="yoast-seo-meta-tag" />
        <meta property="og:site_name" content="25 Downtown Tardeo, South Mumbai" class="yoast-seo-meta-tag" />
        <meta property="article:publisher" content="https://www.facebook.com/MivanHome" class="yoast-seo-meta-tag" />
        <meta property="og:image" content="https://the25downtown.com/assets/img/g1.jpg" class="yoast-seo-meta-tag" />
        <meta property="og:image:width" content="768" class="yoast-seo-meta-tag" />
        <meta property="og:image:height" content="1024" class="yoast-seo-meta-tag" />
        <meta property="og:image:type" content="image/jpeg" class="yoast-seo-meta-tag" />
        <meta name="twitter:card" content="summary_large_image" class="yoast-seo-meta-tag" />
        <meta name="twitter:site" content="@MivanHomes" class="yoast-seo-meta-tag" />
        <meta name="twitter:label1" content="Est. reading time" class="yoast-seo-meta-tag" />
        <meta name="twitter:data1" content="4 minutes" class="yoast-seo-meta-tag" />
        @yield('og:tag')

        <link rel="icon" href="assets/img/favicon.png" sizes="16x16">
        <link rel="canonical" href="https://the25downtown.com/" class="yoast-seo-meta-tag" />

        <title>@yield('pageHeading') {{ '| ' . config('app.name', 'Login') }}</title>


        <link rel="preload" href="{{ asset('assets/pages/css/style.css') }}" as="style">
        <link rel="preload" href="{{ asset('assets/pages/js/app.js') }}" as="script">
        <link rel="preload" href="{{ asset('assets/pages/fonts/roboto-bold-webfont.woff2') }}" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{ asset('assets/pages/fonts/roboto-regular-webfont.woff2') }}" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{ asset('assets/pages/fonts/muli-variablefont_wght-webfont.woff2') }}" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{ asset('assets/pages/fonts/micon.woff2') }}" as="font" type="font/woff2" crossorigin>
        <link rel="dns-prefetch" href="http://google-analytics.com/" crossorigin>
        <link rel="dns-prefetch" href="http://googletagmanager.com/" crossorigin>
        <link rel="dns-prefetch" href="http://www.googleadservices.com/" crossorigin>
        <link rel="dns-prefetch" href="http://googleads.g.doubleclick.net/" crossorigin>
        <link rel="dns-prefetch" href="http://zopim.com/" crossorigin>
        <link rel="dns-prefetch" href="http://ipinfo.io/" crossorigin>
        <link rel="dns-prefetch" href="http://cdn.jsdelivr.net/" crossorigin>
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="{{ asset('assets/pages/js/app.js') }}" defer></script>
    </head>
    <body data-spy="scroll" data-target="#navbarNav">
        <div id="loader">
            <span class="loader-text">
                <img src="{{ asset('assets/pages/img/logo.png') }}"  
                     alt="lifestyle developments designed, Integrated Township, Prudent Investment, Quality Construction, 2 Swimming Pool for Kids & Adults" 
                     class="loader-logo">
            </span>
        </div>
        <style>
            .offer{
                display: block;
                padding: 8px;
                font-size: 13px;
                font-weight: 700;
            }
            .offer-top{
                background: #76BC4E;
                border-radius: 8px 8px 0px 0px;
            }
            .offer-bottom{
                background: #d1e9fc;
                border-radius: 0px 0px 8px 8px;
            }
            .offer-bg-animation{
                color: #ffffff;
                display: block;
                background: linear-gradient(-45deg, #A88932, #A88932 ,#A88932,#A88932);
                background-size: 400% 400%;
                -webkit-animation: Gradient 3s ease infinite;
                -moz-animation: Gradient 3s ease infinite;
                animation: Gradient 3s ease infinite;
            }
            @media only screen and (min-width: 992px){
                .info-box{
                    width: 27vw;
                    top: 8px;
                    left: 10px;
                    background-color: #fff;
                    color: #000;
                    text-align: center;
                    border-radius: 8px;
                    padding: 0 10px;
                    font-weight: 400;
                }
                .pro-status{
                    display: block;
                    text-shadow: none;
                    color: var(--colorPrimary);
                    background-color: transparent;
                    padding: .6vw 2.5vw .3vw 2vw;
                    font-weight: 700;
                }
                .pro-title, .pro-add, .pro-dev, ul.pro-spec, .info-box span.heading, .pro-tag-line, .pro-price, .pro-rera{
                    text-shadow: none;
                    color: #000;
                    font-weight: 400;
                }
                .pro-title{
                    padding: .5vw .8vw .3vw;
                }
                .pro-title, .pro-add, .pro-price{
                    font-weight: 700;
                }
                ul.pro-spec{
                    background-color: transparent;
                    margin-bottom: 0;
                }
                .info-box span.list-icon{
                    display: none;
                }
                .pro-rera{
                    font-size: .8vw;
                }
            }
        </style>
        <header class="micro-nav fixed-top pload">

            <?php if (isset($_GET['status'])) { ?>
                <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display = 'none';">&times;</span> 
                    <strong>your message has been sent successfully!</strong>
                </div>
            <?php } ?>
            <nav class="navbar navbar-expand-lg navbar-light bg-white micro-navbar">
                <a class="navbar-brand" href="#" onclick="return false">
                    <img src="{{ asset('assets/pages/img/logo.png') }}" 
                         alt="lifestyle developments designed, Integrated Township, Prudent Investment, Quality Construction, 2 Swimming Pool for Kids & Adults" 
                         class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav nav-fill">
                        <li class="nav-item"><a class="nav-link" href="#home"><i class="mi mi-home nav-icon"></i><span class="d-sm-inline d-md-none"> Home</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="#pricing"><i class="mi mi-price nav-icon"></i> Price</a></li>
                        <li class="nav-item"><a class="nav-link" href="#sitefloorplan"><i class="mi mi-siteplan nav-icon"></i> Site &amp; Floor Plan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#amenities"><i class="mi mi-ami nav-icon"></i> Amenities</a></li>
                        <li class="nav-item"><a class="nav-link" href="#gallery"><i class="mi mi-gallery nav-icon"></i> Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="#location"><i class="mi mi-location nav-icon"></i> Location</a></li>
                        <li class="nav-item"><a class="nav-link" href="#sitevisit"><i class="mi mi-sitevisit nav-icon"></i> Virtual Site Tour</a></li>
                        <li class="nav-item overflow-hidden">
                            <a class="nav-link enqModal" href="#" data-form="md" data-title="Download brochure" data-btn="Download now" 
                               data-enquiry="Ebook Download" data-redirect="brochure" data-redirect-file="brochure.pdf" 
                               data-toggle="modal" data-target="#enqModal">
                                <i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i> Brochure</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Main content -->
        @yield('content')
        	<script>document.addEventListener("DOMContentLoaded", function(event){document.getElementById("loader").remove();document.querySelector('header').classList.remove('pload');document.querySelector('main').classList.remove('pload');document.querySelector('footer').classList.remove('pload')});var sitePrimaryColor='#A88932';</script>
    </body>
</html>
