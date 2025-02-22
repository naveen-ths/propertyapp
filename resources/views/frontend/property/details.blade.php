<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link rel="icon" href="assets/img/favicon.png" sizes="16x16">
        <title><?= $propertyDetails->property_title; ?></title>  
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/property/propertyfavicon/'.$propertyDetails->property_favicon); }}">

        <meta name="author" content="<?= $propertyDetails->property_title; ?>">


        <meta name="description" content="<?= $propertyDetails->meta_description; ?>">
        <link rel="canonical" href="{{ url()->current() }}" class="yoast-seo-meta-tag" />
        <meta property="og:url" content="{{ url()->current() }}" class="yoast-seo-meta-tag" />

        <meta name="keywords" content="<?= $propertyDetails->meta_keywords; ?>"/>



        <meta property="og:locale" content="en_US" class="yoast-seo-meta-tag" />
        <meta property="og:type" content="article" class="yoast-seo-meta-tag" />

       <?= $propertyDetails->social_meta_tags; ?>

        <style>:root{
                --colorPrimary: <?= $propertyDetails->property_color; ?>;
                --colorSecondary:<?= $propertyDetails->property_color; ?>;
                --colorBtn:#ffffff
            }
            #loader{
                width:100vw;
                height:100vh;
                background-color:rgba(255,255,255,1);
                position:fixed;
                top:0;
                left:0;
                z-index:1040
            }
            .loader-text{
                display:block;
                text-align:center;
                color:#d7d7d7;
                font-family:Arial,sans-serif;
                position:absolute;
                top:50%;
                left:50%;
                -webkit-transform:translate(-50%,-50%);
                -moz-transform:translate(-50%,-50%);
                -ms-transform:translate(-50%,-50%);
                -o-transform:translate(-50%,-50%);
                transform:translate(-50%,-50%)
            }
            .loading{
                height:0;
                width:0;
                padding:4vw;
                border:.8vw solid #ccc;
                border-right-color:#888;
                border-radius:6vw;
                -webkit-animation:rotate 1s infinite linear
            }
            @keyframes loader{
                0%{
                    filter:grayscale(0)
                }
                50%{
                    filter:grayscale(100%)
                }
                100%{
                    filter:grayscale(0)
                }
            }
            .loader-logo{
                width:300px;
                -webkit-animation:loader 1.3s infinite linear;
                -moz-animation:loader 1.3s infinite linear;
                -ms-animation:loader 1.3s infinite linear;
                -o-animation:loader 1.3s infinite linear;
                animation:loader 1.3s infinite linear
            }
            .pload{
                display:none
            }</style>
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
        <link rel="stylesheet" href="{{ asset('assets/pages/css/style.css') }}">
        <script src="{{ asset('assets/pages/js/app.js') }}" defer></script>


    </head>

    <body data-spy="scroll" data-target="#navbarNav">

        <div id="loader">
            <span class="loader-text"><img src="{{ asset('assets/img/property/propertylogo/'.$propertyDetails->property_logo); }}"  alt="lifestyle developments designed, Integrated Township, Prudent Investment, Quality Construction, 2 Swimming Pool for Kids & Adults" class="loader-logo"></span></div>
        <style> @media only screen and (min-width: 992px){
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
                /*background: linear-gradient(-45deg, #A88932, #A88932 ,#A88932,#A88932);*/
                background: <?= $propertyDetails->property_color; ?>;
                background-size: 400% 400%;
                -webkit-animation: Gradient 3s ease infinite;
                -moz-animation: Gradient 3s ease infinite;
                animation: Gradient 3s ease infinite;
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
                    <img src="{{ asset('assets/img/property/propertylogo/'.$propertyDetails->property_logo); }}" alt="{{$propertyDetails->property_title}}" class="logo">
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
                        <li class="nav-item overflow-hidden"><a class="nav-link enqModal" href="#" data-form="md" data-title="Download brochure" data-btn="Download now" data-enquiry="Ebook Download" data-redirect="brochure" data-redirect-file="brochure.pdf" data-toggle="modal" data-target="#enqModal"><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i> Brochure</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main class="pload">
            <div id="home" class="carousel slide micro-main-slider" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#home" data-slide-to="0" class="active"></li>
                    <li data-target="#home" data-slide-to="1"></li>
                    <!-- <li data-target="#home" data-slide-to="2"></li> -->
                </ol>
                <div class="carousel-inner">
                    @forelse ($slides as $key => $slide)
                    <div class="carousel-item">
                        <picture>
                            <source class="lazyload d-block micro-main-slider-img" media="(max-width: 750px)" data-srcset="{{ asset('assets/img/property/banners/'.$slide->image); }}" alt="Hubtown 25 Downtown in Tardeo, South Mumbai, Get 4 BHK & 5 BHK - Price, Location" type="image/webp">
                            <source class="lazyload d-block micro-main-slider-img" media="(min-width: 751px)" data-srcset="{{ asset('assets/img/property/banners/'.$slide->image); }}" alt="Hubtown 25 Downtown in Tardeo, South Mumbai, Get 4 BHK & 5 BHK - Price, Location" type="image/webp">
                            <img data-sizes="auto" class="lazyload d-block micro-main-slider-img" data-srcset="{{ asset('assets/img/property/banners/'.$slide->image); }} 750w,{{ asset('assets/img/property/banners/'.$slide->image); }}">
                        </picture>
                    </div>
                    @empty
                    <tr>
                        <td colspan="4">There are no data.</td>
                    </tr>
                    @endforelse
                </div>
                <div class="info-box overflow-hidden">
                    <span class="pro-status">{{ $propertyDetails->pre_launch_text }}</span>
                    <span class="pro-title">{{ $propertyDetails->property_title }}</span>
                    <span class="pro-add">At {{ $propertyDetails->property_location }}</span>
                    <span class="pro-dev">by {{ $propertyDetails->by_developer_text }}</span>
                    <br>
                    <?= $propertyDetails->banner_content; ?>
                    <br>
                    <span class="pro-tag-line">{{ $propertyDetails->property_exclusive_text }} </span>
                    <span class="pro-price">{{ $propertyDetails->property_price }}</span><br>
                    <button class="btn btn-info micro-form-btn enqModal effetMoveGradient effectScale" data-form="lg" data-title="Mail me pricing details" data-btn="Send now" data-enquiry="Enquire Now" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">Enquire Now</button>
                    <span class="pro-rera"><span class="heading">Maha RERA Regd. Number.</span> :   {{ $propertyDetails->property_rera_no }} !
                    </span>
                </div>
                <div class="mob-form d-sm-block d-md-none d-lg-none">
                    <span class="d-block form-heading font-weight-bold">Pre-Register here for Best Offers</span>

                    <form action="{{ route('enquiry.submit') }}" method="POST" class="form-side">
                        @csrf
                        <input type="hidden" name="lead_form_name" value="Pre-Register Mobile Form">
                        <div class="form-group">

                        </div>
                        <div class="form-group">
                            <input type="hidden" name="subject" value="Get Instant Call Back" class="form-control mb-3" id="" placeholder="Name">
                            <input type="tel" id="intTelInput-mob" pattern="[0-9]+" name="mobile" class="intTelInput form-control rounded-0 micro-form-field" required placeholder="Mobile No">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control rounded-0 micro-form-field" required placeholder="E-Mail Address">
                        </div>
                        <input type="hidden" name="property_url" value="{{ url()->current() }}" />
                        <button type="submit" name="enq_formBtn" class="btn btn-info micro-form-btn effetMoveGradient" onclick="setCookie('redirectCookie', 'enquire');">Pre-Register Now</button>
                    </form>
                    <!--more button start-->
                    <div class="mobile_button">
                        <?= $propertyDetails->sidebar_content; ?>
                    </div>
                    <!--more button end-->

                </div>
                <section class="section shadow-sm lazyload" id="overview">
                    <span class="head text-capitalize d-none d-md-block">About Project</span>
                    <span class="d-block section-heading color-primary text-capitalize">{{ $propertyDetails->property_title }} </span>
                    <span class="d-block section-heading-sub color-primary text-capitalize">At {{ $propertyDetails->property_short_desc }}</span>
                    <?= $propertyDetails->property_desc; ?>
                    
                    <button class="btn btn-sm btn-outline-info sectio-bro-btn overflow-hidden enqModal" data-form="md" data-title="Download brochure" data-btn="Download now" data-enquiry="Ebook Download" data-redirect="brochure" data-redirect-file="brochure.pdf" data-toggle="modal" data-target="#enqModal"><span class="d-inline-block mi mi-download mr-1 animated slideInDown infinite"></span> Download Brochure</button>

                    <hr>

                    <h3 class="blink-soft" style="text-align: center; color: #A88932;">Project Highlights</h3>
                    <div class="row">
                        <div class="col-sm-12">	 
                            <?= $propertyDetails->property_highlights; ?>
                        </div>
                    </div><br><br>

                    <h3 style="text-align: center; color: #A88932;">{{ $propertyDetails->property_title }} Project Video</h3><br>
                    <iframe width="100%" height="315" src="{{ $propertyDetails->property_video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <!--                    <video width="100%" height="330" controls>
                                            <source src="{{ asset('assets/pages/img/videoplayback.mp4') }}" type="video/mp4" alt="25 Downtown in Tardeo, South Mumbai, 4 BHK & 5 BHK">
                                        </video>-->
                </section>
                <section class="section shadow-sm lazyload">
                    <span class="section-link" id="pricing"></span>
                    <span class="head text-capitalize">Price</span>
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table table-striped table-borderless border micro-price-table table-pricing">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border border-bottom-0 mb-w">Type</th>
                                        <th scope="col" class="border border-bottom-0 mb-w">Carpet Area</th>
                                        <th scope="col" class="border border-bottom-0 border-right-0">Price</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($floors)) {
                                        foreach ($floors as $floor) :
                                            ?>
                                            <tr> 
                                                <td class="border border-left-0 border-top-0 border-bottom-0 price-type"><?= $floor['flat_type'] ?></td> 
                                                <td class="border border-left-0 border-top-0 border-bottom-0 price-carpet"><?= $floor['carpet_area']; ?><small class="d-inline-block d-md-none">(Carpet Area)</small></td> 
                                                <td class="price-amt"><i class="mi mi-rs-light"></i> <?= $floor['flat_price']; ?></td> <td><button class="btn btn-sm btn-info effetGradient effectScale enqModal" data-form="lg" data-title="Send me costing details" data-btn="Send now" data-enquiry="Request Price" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">Click Here</button></td> </tr>
                                            <?php
                                        endforeach;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="text-decoration-none enqModal" data-form="lg" data-title="Send me costing details" data-btn="Send now" data-enquiry="Costing Details" data-toggle="modal" data-target="#enqModal">
                                <div class="at-property-item shadow-sm border border-grey mt-1">
                                    <div class="at-property-img">
                                        <picture>
                                            <source class="lazyload w-100" data-srcset="{{ asset('assets/img/property/costimage/'.$propertyDetails->complete_costing_details); }}" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet" type="image/webp">
                                            <img data-sizes="auto" class="lazyload w-100" data-srcset="{{ asset('assets/img/property/costimage/'.$propertyDetails->complete_costing_details); }}" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet">
                                        </picture>
                                        <div class="at-property-overlayer"></div>
                                        <span class="btn btn-default at-property-btn">Enquire Now</span>
                                    </div>
                                    <div class="at-property-dis effetGradient">
                                        <h5>Complete Costing Details</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
                <section class="section shadow-sm lazyload" data-script="{{ asset('assets/pages/plugins/fancybox/jquery.fancybox.min.js') }}"
                         data-link="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
                    <span class="section-link" id="sitefloorplan"></span>
                    <span class="head text-capitalize">Site &amp; Floor Plan</span>
                    <div class="row">
                        <div class="col-md-4">
                            <span class="d-block section-heading-sub text-capitalize">Master Plan</span>
                            <a href="#" class="text-decoration-none enqModal" data-form="lg" data-title="Send me plan details" data-btn="Send now" data-enquiry="Floor Plan" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">

                                <div class="at-property-item mt-1">
                                    <div class="at-property-img master-plan text-center">
                                        <picture>
                                            <source class="lazyload shadow-sm border border-grey blur" data-srcset="{{ asset('assets/img/property/masterplanimage/'.$propertyDetails->master_plan_image); }}" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet" type="image/webp">
                                            <img data-sizes="auto" class="lazyload shadow-sm border border-grey blur" data-srcset="{{ asset('assets/img/property/masterplanimage/'.$propertyDetails->master_plan_image); }}" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet" width="320" height="154" >
                                        </picture>
                                        <div class="at-property-overlayer"></div>
                                        <span class="at-property-btn">View Master Plan</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-8">
                            <span class="d-block section-heading-sub text-capitalize ">Floor Plan</span>
                            <div class="row row-cols-1 row-cols-md-2">
                                <?php
                                if (!empty($floors)) {
                                    foreach ($floors as $floor) :
                                        ?>
                                        <div class="col">
                                            <a href="#" class="text-decoration-none enqModal" data-form="lg" data-title="Send me plan details" data-btn="Send now" data-enquiry="Floor Plan" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">
                                                <div class="at-property-item shadow-sm border border-grey mt-1">
                                                    <div class="at-property-img">
                                                        <picture>
                                                            <source class="lazyload floor-plan-img blur" data-srcset="{{ asset('assets/img/property/floorimage/'.$floor->image); }}" type="image/webp">
                                                            <img data-sizes="auto" class="lazyload floor-plan-img blur" data-srcset="{{ asset('assets/img/property/floorimage/'.$floor->image); }}" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet">
                                                        </picture>
                                                        <div class="at-property-overlayer"></div>
                                                        <span class="btn btn-default at-property-btn" role="button">Enquire Now</span>
                                                    </div>
                                                    <div class="at-property-dis effetGradient">
                                                        <h5><?= $floor['flat_type'] ?></h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <?php
                                    endforeach;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section shadow-sm lazyload">
                    <span class="section-link" id="amenities"></span>
                    <span class="head text-capitalize">Amenities</span>
                    <?php
                    $amenities = explode(",", $propertyDetails->property_amenities);
                    $ad = array_chunk($amenities, 3);
                    ?>
                    <div id="ami-3" class="ami-3 owl-carousel owl-theme">
                        <div class="item-wrp">
                            <?php
                            if (!empty($ad[0])) :
                                foreach ($ad[0] as $ame) :
                                    ?>
                                    <div>
                                        <p>{{ $ame }}</p>
                                    </div>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </div>
                        <div class="item-wrp">
                            <?php
                            if (!empty($ad[1])) :
                                foreach ($ad[1] as $ame) :
                                    ?>
                                    <div>
                                        <p>{{ $ame }}</p>
                                    </div>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </div>
                        <div class="item-wrp">
                            <?php
                            if (!empty($ad[2])) :
                                foreach ($ad[2] as $ame) :
                                    ?>
                                    <div>
                                        <p>{{ $ame }}</p>
                                    </div>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </div>
                    </div>
                </section>
                <section class="section shadow-sm lazyload">
                    <span class="section-link" id="gallery"></span>
                    <span class="head text-capitalize">Gallery</span>
                    <div class="row">
                        @forelse ($gallery as $key => $g)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
                            <a data-fancybox="gallery-0" href="{{ asset('assets/img/property/gallery/'.$g->image); }}" alt="{{ $propertyDetails->property_title }}">
                                <img data-src="{{ asset('assets/img/property/gallery/'.$g->image); }}" alt="{{ $propertyDetails->property_title }}" class="lazyload gallery-thumb">
                            </a>
                        </div>
                        @empty
                        @endforelse
                    </div>
                </section>
                <section class="section shadow-sm lazyload" data-script="{{ asset('assets/pages/plugins/fancybox/jquery.fancybox.min.js') }}" data-link="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
                    <span class="section-link" id="location"></span>
                    <span class="head text-capitalize">Location</span>
                    <div class="row mb-3">
                        <div class=" col-sm-12">
                            <span class="d-block section-heading-sub text-capitalize">Map View</span>

                            <iframe class="lazyload lmap mb-2" src="{{ $propertyDetails->map_embed_url }}" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <?php
                    $locationText = $propertyDetails->location_text;
                    $locationTextArray = [];
                    if (!empty($locationText)) {
                        $locationTextArray = explode(",", $locationText);
                    }
                    ?>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                        <?php foreach ($locationTextArray as $key => $l) { ?>
                            <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i><?= $l; ?> </div>
                        <?php } ?>

                    </div>

                </section>
                <section class="section shadow-sm lazyload">
                    <span class="section-link" id="sitevisit"></span>
                    <span class="head text-capitalize">Virtual Site Tour</span>
                    <a href="#" class="enqModal" data-form="lg" data-title="Virtual Site Visit" data-btn="Start Tour" data-enquiry="Virtual Site Tour" data-redirect="virtualtour" data-toggle="modal" data-target="#enqModal">
                        <div class="at-property-item my-2 pt-md-0">
                            <div class="at-property-img vsv-img">
                                <picture>
                                    <source class="lazyload w-100" media="(max-width: 750px)" data-srcset="{{ asset('assets/img/property/virtualsitetour/'.$propertyDetails->virtual_site_tour) }}" type="image/webp">
                                    <source class="lazyload w-100" media="(min-width: 751px)" data-srcset="{{ asset('assets/img/property/virtualsitetour/'.$propertyDetails->virtual_site_tour) }}" type="image/webp">
                                    <img data-sizes="auto" class="lazyload w-100" data-srcset="{{ asset('assets/img/property/virtualsitetour/'.$propertyDetails->virtual_site_tour) }} 750w,{{ asset('assets/img/property/virtualsitetour/'.$propertyDetails->virtual_site_tour) }}">
                                </picture>
                                <div class="vsv-text-bk">
                                    <div class="vsv-text-bg">
                                        <div class="vsv-icon lazyload"></div>
                                        <span class="text-uppercase h1 font-weight-bold mb-0 d-none d-lg-block">Virtual Tour</span>
                                        <span class="text-capitalize text-center d-none d-lg-block">{{ $propertyDetails->property_title }} in {{ $propertyDetails->property_location }}</span>
                                    </div>
                                </div>
                            </div>
                            <span class="d-block text-capitalize text-center d-sm-block d-md-none pt-2">{{ $propertyDetails->property_title }} in {{ $propertyDetails->property_location }}</span>
                        </div>
                    </a>
                </section>
                <section class="section shadow-sm lazyload" id="developer">
                    <div class="d-block pt-2 pb-1 text-center">
                        <img src="{{ asset('assets/img/property/propertylogo/'.$propertyDetails->property_logo) }}" style="max-width: 100%;height: 70px; display: inline-block;">
                    </div>
                    <span class="d-block section-heading-sub text-capitalize">{{ $propertyDetails->builder_name }}</span>
                    <?= $propertyDetails->about_developer; ?>

                </section>
                <section class="section shadow-sm lazyload" >
                    <?= $propertyDetails->property_footer_content; ?>

                </section>
                <p style="text-align:center;">Copyright &copy; 2025 | <a href="/">Terms & Conditions</a> | <a href="/">Privacy Policy</a> | <a href="/">Cookies Policy</a> </p>
                <div class="micro-side text-center">
                    <div class="og-section pb-2">
                        <ul class="nav nav-fill og-block">
                            <li class="nav-item enqModal" data-form="lg" data-title="Organize Site Visit" data-btn="Request Site Visit" data-enquiry="Organize Site Visit" data-toggle="modal" data-target="#enqModal">Organize Site Visit</li>
                            <li class="nav-item" onclick="window.open('https://api.whatsapp.com/send?phone=+91{{ $propertyDetails->mobile_no }}&text=I want More Information About Hubtown 25 Downtown Tardeo, South Mumbai Project.', '_blank');"><span class="mi mi-whatsapp action-icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span> +91 {{ $propertyDetails->mobile_no }}</li>
                        </ul>
                        <button class="btn btn-sm btn-info micro-form-btn-sm effetGradient effectScale enqModal mt-1" data-form="sm" data-title="Immediate Call Back" data-btn="Request Call Now" data-enquiry="Immediate Call Back" data-toggle="modal" data-target="#enqModal">
                            <span class="mi mi-call action-icon"></span> Request Call Back</button>
                    </div>
                    <span class="d-block form-heading font-weight-bold my-2">Pre-Register here for Best Offers</span>

                    <form action="{{ route('enquiry.submit') }}" method="POST" class="form-side">
                        @csrf
                        <input type="hidden" name="subject" value="Pre-Register Here for Best Offers">
                        <div class="form-group">
                            <input type="text" name="name" pattern="[a-zA-Z ]+" class="form-control rounded-0 micro-form-field" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="subject" value="Get Instant Call Back" class="form-control mb-3" id="" placeholder="Name">
                            <input type="tel" id="intTelInput-side" pattern="[0-9]+" name="mobile" class="intTelInput form-control rounded-0 micro-form-field w-100" placeholder="Mobile No" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control rounded-0 micro-form-field" placeholder="E-Mail Address" required>
                        </div>
                        <input type="hidden" name="property_url" value="{{ url()->current() }}" />
                        <button type="submit"  class="btn btn-info micro-form-btn mt-2 effetMoveGradient" >Pre-Register Now</button>
                    </form>


                    <!--more button start-->
                    <?= $propertyDetails->sidebar_content; ?>
                    <!--more button end-->		
                </div>
                <ul class="mob-action nav nav-fill d-sm-block d-lg-none">
                    <li class="nav-item" onclick="javascript:location.href = 'tel:+91{{ $propertyDetails->mobile_no }}'"><span class="mi mi-call action-icon"></span> Call</li>
                    <li class="nav-item enqModal" data-form="lg" data-title="Mail me pricing details" data-btn="Send now" data-enquiry="Enquire Now" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal"><span class="mi mi-enquire action-icon"></span> Enquire</li>
                    <li class="nav-item" onclick="window.open('https://api.whatsapp.com/send?phone=+91{{ $propertyDetails->mobile_no }}&text=I want More Information About Hubtown 25 Downtown Tardeo, South Mumbai Project.', '_blank');"><span class="mi mi-whatsapp action-icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span> WhatsApp</li>
                </ul>
                <div class="modal fade" id="enqModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered enq-modal" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-center">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-head d-none"><span class="modal-title">Title</span></div>
                                <div class="d-flex">
                                    <div class="flex-fill align-self-center flex-shrink-1 modal-highlight-bg d-none d-lg-block">
                                        <span class="modal-highlight-title">We Promise</span>
                                        <ul class="modal-highlight">
                                            <li><i class="mi mi-support-call"></i><span>Instant Call Back</span></li>
                                            <li><i class="mi mi-support-visit"></i><span>Free Site Visit</span></li>
                                            <li><i class="mi mi-support-price"></i><span>Unmatched Price</span></li>
                                        </ul>
                                    </div>
                                    <div class="flex-fill align-self-center">
                                        <img src="{{ asset('assets/img/property/propertylogo/'.$propertyDetails->property_logo); }}" class="modal-logo">
                                        <span class="modal-title-secondary">Register here and Avail the
                                            <span class="text-danger">Best Offers!!</span></span>
                                          <form method="POST" action="{{ route('enquiry.submit') }}" class="form-modal">
                                              @csrf
                                            <div class="form-group">
                                                <input type="text" name="name" pattern="[a-zA-Z ]+" class="form-control rounded-0 micro-form-field" required placeholder="Name">
                                            </div>
                                            <input type="hidden" name="subject" value="Get Instant Call Back" class="form-control mb-3" id="" placeholder="Name">
                                            <input type="hidden" name="property_url" value="{{ url()->current() }}" />
                                            <div class="form-group">
                                                <input type="tel" id="intTelInput-popup" pattern="[0-9]+" name="mobile" class="intTelInput form-control rounded-0 micro-form-field" required placeholder="Mobile No">
                                            </div>
                                            <div class="form-group form-md">
                                                <input type="email" name="email" class="form-control rounded-0 micro-form-field" placeholder="E-Mail Address">
                                            </div>
                                            <button type="submit" class="btn btn-info micro-form-btn effetGradient effectScale">Get Instant Call Back</button>
                                        </form>
                                    </div>
                                </div>
                                <a href="tel:+91{{ $propertyDetails->mobile_no }}" class="modal-call-btn"><i class="mi mi-call"></i> +91 {{ $propertyDetails->mobile_no }}</a>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
        <script>document.addEventListener("DOMContentLoaded", function (event) {
                document.getElementById("loader").remove();
                document.querySelector('header').classList.remove('pload');
                document.querySelector('main').classList.remove('pload');
                document.querySelector('footer').classList.remove('pload')
            });
            var sitePrimaryColor = '#A88932';</script>
    </body>
</html>