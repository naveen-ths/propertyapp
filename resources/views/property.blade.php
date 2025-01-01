<x-pages-layout>
        <div id="loader">
            <span class="loader-text"><img src="assets/img/logo.png"  alt="lifestyle developments designed, Integrated Township, Prudent Investment, Quality Construction, 2 Swimming Pool for Kids & Adults" class="loader-logo"></span></div>
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
                background: linear-gradient(-45deg, #A88932, #A88932 ,#A88932,#A88932);
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
                <a class="navbar-brand" href="#" onclick="return false"><img src="assets/img/logo.png" alt="lifestyle developments designed, Integrated Township, Prudent Investment, Quality Construction, 2 Swimming Pool for Kids & Adults " class="logo"></a>
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
                    <div class="carousel-item">
                        <picture>
                            <source class="lazyload d-block micro-main-slider-img" media="(max-width: 750px)" data-srcset="assets/img/banner1.jpg" alt="Hubtown 25 Downtown in Tardeo, South Mumbai, Get 4 BHK & 5 BHK - Price, Location" type="image/webp">
                            <source class="lazyload d-block micro-main-slider-img" media="(min-width: 751px)" data-srcset="assets/img/banner1.jpg" alt="Hubtown 25 Downtown in Tardeo, South Mumbai, Get 4 BHK & 5 BHK - Price, Location" type="image/webp">
                            <img data-sizes="auto" class="lazyload d-block micro-main-slider-img" data-srcset="assets/img/banner1.jpg 750w,assets/img/banner1.jpg">
                        </picture>
                    </div>
                    <div class="carousel-item">
                        <picture>
                            <source class="lazyload d-block micro-main-slider-img" media="(max-width: 750px)" data-srcset="assets/img/banner2.jpg" alt="Hubtown 25 Downtown in Tardeo, South Mumbai, Get 4 BHK & 5 BHK - Price, Location" type="image/webp">
                            <source class="lazyload d-block micro-main-slider-img" media="(min-width: 751px)" data-srcset="assets/img/banner2.jpg" alt="Hubtown 25 Downtown in Tardeo, South Mumbai, Get 4 BHK & 5 BHK - Price, Location" type="image/webp">
                            <img data-sizes="auto" class="lazyload d-block micro-main-slider-img" data-srcset="assets/img/banner2.jpg 750w,assets/img/banner2.jpg">
                        </picture>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <picture>
                                <source class="lazyload d-block micro-main-slider-img" media="(max-width: 750px)" data-srcset="assets/img/banner1.jpg" alt="Hubtown 25 Downtown in Tardeo, South Mumbai, Get 4 BHK & 5 BHK, Get 1 BHK, 2 BHK & 2.5 BHK - Price, Location" type="image/webp">
                                <source class="lazyload d-block micro-main-slider-img" media="(min-width: 751px)" data-srcset="assets/img/banner1.jpg" alt="Hubtown 25 Downtown in Tardeo, South Mumbai, Get 4 BHK & 5 BHK - Price, Location" type="image/webp">
                                <img data-sizes="auto" class="lazyload d-block micro-main-slider-img" data-srcset="assets/img/banner2.5.jpg 750w,assets/img/banner3.jpg">
                            </picture>
                        </div>




                    </div>
                </div>
                <div class="info-box overflow-hidden">
                    <span class="pro-status">PRE LAUNCH OFFERS</span>
                    <span class="pro-title">25 Downtown</span>
                    <span class="pro-add">At Tardeo, South Mumbai</span>
                    <span class="pro-dev">by Hubtown Builder & Developer</span>
                    <br>
                    <!-- <ul class="pro-spec">
                            <li><span class="list-icon">&rtrif;</span>
                            <span class="heading">Avail Best Offer & Discounts</span></li>
                    <li><span class="list-icon">&rtrif;</span>
                            <span class="heading">Typology : 2, 3 BHK</li>
                    <li><span class="list-icon">&rtrif;</span>
                            <span class="heading"> World-Class Lifestyle</li>
            </ul> -->

                    <div class="offer offer-top offer-bg-animation text-white overflow-hidden mt-1 text-uppercase mx-1 mx-md-0">
                        <span class="animated bounceIn infinite d-block" style="animation-duration: 3s;"> 5.5 acress Luxurious Project
                        </span>
                    </div>
                    <span class="offer offer-top offer-bg-animation text-white overflow-hidden mt-1 text-uppercase mx-1 mx-md-0"> 4 BED & 5 BED SEA VIEW Apartments </span>

                    <div class="offer offer-top offer-bg-animation text-white overflow-hidden mt-1 text-uppercase mx-1 mx-md-0">
                        <span class="animated bounceIn infinite d-block" style="animation-duration: 3s;">  Flexible Payment Plan  </span>
                    </div>


                    <span class="offer offer-top offer-bg-animation text-white overflow-hidden mt-1 text-uppercase mx-1 mx-md-0"> Launch Benefits | Special Discount  </span>

                    <div class="offer offer-top offer-bg-animation text-white overflow-hidden mt-1 text-uppercase mx-1 mx-md-0">
                        <span class="animated bounceIn infinite d-block" style="animation-duration: 3s;"> Avail Best Offers & Discounts*    </span>
                    </div>


                    <!-- <div class="offer offer-top offer-bg-animation text-white overflow-hidden mt-1 text-uppercase mx-1 mx-md-0">
                    <span class="animated bounceIn infinite d-block" style="animation-duration: 3s;"> Under Construction – 0 Floor rise | 5% Effective GST
             </span></div> -->

                    <!-- <div class="offer offer-bottom overflow-hidden mb-1 mx-1 mx-md-0">
                            <span class="animated bounceIn infinite d-block" style="animation-duration: 3s;"> Book by Paying 25% Only
                    </span>
            </div> --><br>
                    <span class="pro-tag-line">Exclusive 4, 5 Bed Apartments </span>
                    <span class="pro-price">Starts From ₹ 27.19 Cr*</span><br>
                    <button class="btn btn-info micro-form-btn enqModal effetMoveGradient effectScale" data-form="lg" data-title="Mail me pricing details" data-btn="Send now" data-enquiry="Enquire Now" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">Enquire Now</button>
                    <span class="pro-rera"><span class="heading">Maha RERA Regd. Number.</span> :   P51900076617 !
                    </span>
                </div>
                <div class="mob-form d-sm-block d-md-none d-lg-none">
                    <span class="d-block form-heading font-weight-bold">Pre-Register here for Best Offers</span>

                    <form action="sendmail.php" onsubmit="enq_formBtn.disabled = true; return true;" method="POST" class="form-side">
                        <input type="hidden" name="lead_form_name" value="Pre-Register Mobile Form">
                        <div class="form-group">

                        </div>
                        <div class="form-group">
                            <input type="hidden" name="fullMobileNo" value="">
                            <input type="tel" id="intTelInput-mob" pattern="[0-9]+" name="mobile" class="intTelInput form-control rounded-0 micro-form-field" required placeholder="Mobile No">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control rounded-0 micro-form-field" required placeholder="E-Mail Address">
                        </div>
                        <button type="submit" name="enq_formBtn" class="btn btn-info micro-form-btn effetMoveGradient" onclick="setCookie('redirectCookie', 'enquire');">Pre-Register Now</button>
                    </form>
                    <!--more button start-->
                    <div class="mobile_button">
                        <a href="#" data-toggle="modal" data-target="#enqModal" class="btn btn-info micro-form-btn mt-2 effetMoveGradient button_dsvds" ><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i> Brochures</a>
                        <a href="#" data-toggle="modal" data-target="#enqModal" class="btn btn-info micro-form-btn mt-2 effetMoveGradient button_dsvds" ><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i> Floor Plan</a>
                        <a href="#" data-toggle="modal" data-target="#enqModal" class="btn btn-info micro-form-btn mt-2 effetMoveGradient button_dsvds" ><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i> Price List</a>
                        <a href="#" data-toggle="modal" data-target="#enqModal" class="btn btn-info micro-form-btn mt-2 effetMoveGradient button_dsvds" ><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i> Cost Sheet</a>
                        <a href="#" data-toggle="modal" data-target="#enqModal" class="btn btn-info micro-form-btn mt-2 effetMoveGradient button_dsvds" ><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i>4 BHK Floor Plan</a>
                        <a href="#" data-toggle="modal" data-target="#enqModal" class="btn btn-info micro-form-btn mt-2 effetMoveGradient button_dsvds" ><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i>5 BHK Floor Plan</a>
                        <a href="#" data-toggle="modal" data-target="#enqModal" class="btn btn-info micro-form-btn mt-2 effetMoveGradient button_dsvds" ><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i>Jodi Flats/Apartments Plan</a>
                        <a href="#" data-toggle="modal" data-target="#enqModal" class="btn btn-info micro-form-btn mt-2 effetMoveGradient button_dsvds" ><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i> Master Plan Layout</a>

                    </div>
                    <!--more button end-->

                </div>
                <section class="section shadow-sm lazyload" id="overview">
                    <span class="head text-capitalize d-none d-md-block">About Project</span>
                    <span class="d-block section-heading color-primary text-capitalize">25 Downtown </span>
                    <span class="d-block section-heading-sub color-primary text-capitalize">At Mahalaxmi, Mumbai</span>
                    <p> 25 Downtown Project by Hubtown Developers at Tardeo, Mahalaxmi, Mumbai. G + 9P + 3 Floors Amenities + 2 Floor Business Offices + 1st Floor higts is 15 & 55 Habitable Floor, Having 4 BHK, 5 BHK Apartment, Carpet Area [3400-5100] Sq.ft Get Price, Location, Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet. Book your dream home today </p>
                    <P>*Exclusive Living Spaces:* Each floor houses only two spacious apartments, available in 4 and 5 BHK configurations. The 4 BHK apartments boast an impressive 3,400 sq. ft. of carpet area, while the 5 BHK units offer a lavish 5,100 sq. ft. of carpet area. For those seeking even more space, Jodi options are available to combine apartments.</P>
                    <p>*Luxury Redefined:* Each residence features an expansive deck, perfect for relaxation and entertaining, along with a comprehensive array of both outdoor and indoor amenities designed to cater to every lifestyle need.</p>
                    <p>*Stunning Views:* The project's design maximizes natural beauty and vistas. Lower floors are surrounded by lush greenery, creating a tranquil setting, while higher floors provide breathtaking sea views, enhancing the luxury living experience.</p>
                    <p>*Sophisticated Commercial Spaces:* The commercial segment of the development is designed to accommodate high-end retail brands, ensuring a premium shopping experience. Importantly, residential and commercial entries are distinctly separate to maintain privacy and exclusivity for residents.</p>
                    <p>*Architectural Ambition:* Subject to regulatory approval, the towers are planned to rise up to the 70th floor, making them a significant architectural landmark in the area.</p>
                    <p>- *Prime Location and Amenities:* The project’s strategic location offers easy access to key city areas, while the thoughtfully designed amenities include state-of-the-art fitness centers, swimming pools, landscaped gardens, and recreational facilities, providing a holistic living experience.</p>

                    <button class="btn btn-sm btn-outline-info sectio-bro-btn overflow-hidden enqModal" data-form="md" data-title="Download brochure" data-btn="Download now" data-enquiry="Ebook Download" data-redirect="brochure" data-redirect-file="brochure.pdf" data-toggle="modal" data-target="#enqModal"><span class="d-inline-block mi mi-download mr-1 animated slideInDown infinite"></span> Download Brochure</button>

                    <hr>


                    <h3 class="blink-soft" style="text-align: center; color: #A88932;">Project Highlights</h3>
                    <div class="row">
                        <div class="col-sm-12">	 
                            <ul class="list-group rk-list">
                                <li class="list-group-item">✓ Exclusive 4 Bed & 5 Bed Apartments </li>
                                <li class="list-group-item">✅ 25 Downtown in Tardeo, South Mumbai offer 4 BHK & 5 BHK </li>
                                <li class="list-group-item">✅ However, 25 Downtown reviews are decent & mostly Site Visit Clients has given it a 4/5 score. What are the Pros / USP of Hubtown 25 Downtown </li>
                                <li class="list-group-item">✅ as per Developer Hubtown for Project 25 Downtown, available for possession in December 2030. What is the exact Hubtown 25 Downtown address? The exact address of 25 Downtown is near the Willingdon Club, Tardeo, Mumbai, Maharashtra, 400034.</li>
                                <li class="list-group-item">✅ *Base Price:* Starting at INR 80,000 per sq. ft. </li>
                                <li class="list-group-item">✅ *Floor Rise:* An additional INR 1,000 per sq. ft. for each floor above the base level, reflecting the premium value of the higher-floor sea views.
                                </li>


                            </ul>
                        </div>
                    </div><br><br>

                    <h3 style="text-align: center; color: #A88932;">25 Downtown Project Video</h3><br>
                    <video width="100%" height="330" controls>
                        <source src="assets/img/videoplayback.mp4" type="video/mp4" alt="25 Downtown in Tardeo, South Mumbai, 4 BHK & 5 BHK">


                    </video> 	    
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



                                    <tr> <td class="border border-left-0 border-top-0 border-bottom-0 price-type">4 BHK </td> <td class="border border-left-0 border-top-0 border-bottom-0 price-carpet">3400 Sq. Ft. <small class="d-inline-block d-md-none">(Carpet Area)</small></td> <td class="price-amt"><i class="mi mi-rs-light"></i> As Per Request</td> <td><button class="btn btn-sm btn-info effetGradient effectScale enqModal" data-form="lg" data-title="Send me costing details" data-btn="Send now" data-enquiry="Request Price" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">Click Here</button></td> </tr>
                                    <tr> <td class="border border-left-0 border-top-0 border-bottom-0 price-type">5 BHK </td> <td class="border border-left-0 border-top-0 border-bottom-0 price-carpet">5100 Sq. Ft. <small class="d-inline-block d-md-none">(Carpet Area)</small></td> <td class="price-amt"><i class="mi mi-rs-light"></i> As Per Request</td> <td><button class="btn btn-sm btn-info effetGradient effectScale enqModal" data-form="lg" data-title="Send me costing details" data-btn="Send now" data-enquiry="Request Price" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">Click Here</button></td> </tr>


                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="text-decoration-none enqModal" data-form="lg" data-title="Send me costing details" data-btn="Send now" data-enquiry="Costing Details" data-toggle="modal" data-target="#enqModal">
                                <div class="at-property-item shadow-sm border border-grey mt-1">
                                    <div class="at-property-img">
                                        <picture>
                                            <source class="lazyload w-100" data-srcset="assets/img/costing-details.jpg" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet" type="image/webp">
                                            <img data-sizes="auto" class="lazyload w-100" data-srcset="assets/img/costing-details.jpg" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet">
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
                <section class="section shadow-sm lazyload" data-script="assets/plugins/fancybox/jquery.fancybox.min.js" data-link="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
                    <span class="section-link" id="sitefloorplan"></span>
                    <span class="head text-capitalize">Site &amp; Floor Plan</span>
                    <div class="row">
                        <div class="col-md-4">
                            <span class="d-block section-heading-sub text-capitalize">Master Plan</span>
                            <a href="#" class="text-decoration-none enqModal" data-form="lg" data-title="Send me plan details" data-btn="Send now" data-enquiry="Floor Plan" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">

                                <div class="at-property-item mt-1">
                                    <div class="at-property-img master-plan text-center">
                                        <picture>
                                            <source class="lazyload shadow-sm border border-grey blur" data-srcset="assets/img/layout.jpg" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet" type="image/webp">
                                            <img data-sizes="auto" class="lazyload shadow-sm border border-grey blur" data-srcset="assets/img/layout.jpg" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet" width="320" height="154" >
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


                                <div class="col">
                                    <a href="#" class="text-decoration-none enqModal" data-form="lg" data-title="Send me plan details" data-btn="Send now" data-enquiry="Floor Plan" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">
                                        <div class="at-property-item shadow-sm border border-grey mt-1">
                                            <div class="at-property-img">
                                                <picture>
                                                    <source class="lazyload floor-plan-img blur" data-srcset="assets/img/1bhk.jpg" type="image/webp">
                                                    <img data-sizes="auto" class="lazyload floor-plan-img blur" data-srcset="assets/img/1bhk.jpg" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet">
                                                </picture>
                                                <div class="at-property-overlayer"></div>
                                                <span class="btn btn-default at-property-btn" role="button">Enquire Now</span>
                                            </div>
                                            <div class="at-property-dis effetGradient">
                                                <h5>4 BHK</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="#" class="text-decoration-none enqModal" data-form="lg" data-title="Send me plan details" data-btn="Send now" data-enquiry="Floor Plan" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">
                                        <div class="at-property-item shadow-sm border border-grey mt-1">
                                            <div class="at-property-img">
                                                <picture>
                                                    <source class="lazyload floor-plan-img blur" data-srcset="assets/img/1bhk.jpg" type="image/webp">
                                                    <img data-sizes="auto" class="lazyload floor-plan-img blur" data-srcset="assets/img/1bhk.jpg" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet">
                                                </picture>
                                                <div class="at-property-overlayer"></div>
                                                <span class="btn btn-default at-property-btn" role="button">Enquire Now</span>
                                            </div>
                                            <div class="at-property-dis effetGradient">
                                                <h5>5 BHK</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>




                            </div>
                        </div>
                    </div>
                </section>


                <section class="section shadow-sm lazyload">
                    <span class="section-link" id="amenities"></span>
                    <span class="head text-capitalize">Amenities</span>
                    <div id="ami-3" class="ami-3 owl-carousel owl-theme">
                        <div class="item-wrp">
                            <div>

                                <p>Swimming Pool   </p>
                            </div>
                            <div>

                                <p> Children's Play Area</p>
                            </div>
                            <div>

                                <p> Gymnasium</p>
                            </div>


                        </div>
                        <div class="item-wrp">
                            <div>

                                <p> Roof top Garden</p>
                            </div>
                            <div>

                                <p> Kids Pool</p>
                            </div>
                            <div>

                                <p> Mahalaxmi Temple</p>
                            </div>


                        </div>


                        <div class="item-wrp">
                            <div>

                                <p>  Mini Theatre</p>
                            </div>
                            <div>

                                <p> fitness centre</p>
                            </div>

                            <div>

                                <p> indoor game areas </p>
                            </div>

                        </div>





                    </div>
                </section>
                <section class="section shadow-sm lazyload">
                    <span class="section-link" id="gallery"></span>
                    <span class="head text-capitalize">Gallery</span>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
                            <a data-fancybox="gallery-0" href="assets/img/g1.jpg" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet">
                                <img data-src="assets/img/g1.jpg" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet" class="lazyload gallery-thumb">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
                            <a data-fancybox="gallery-0" href="assets/img/g2.jpg">
                                <img data-src="assets/img/g2.jpg" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet" class="lazyload gallery-thumb">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
                            <a data-fancybox="gallery-0" href="assets/img/g3.jpg" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet">
                                <img data-src="assets/img/g3.jpg" class="lazyload gallery-thumb">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
                            <a data-fancybox="gallery-0" href="assets/img/g4.jpg">
                                <img data-src="assets/img/g4.jpg" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet" class="lazyload gallery-thumb">
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
                            <a data-fancybox="gallery-0" href="assets/img/g5.jpg">
                                <img data-src="assets/img/g5.jpg" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet" class="lazyload gallery-thumb">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
                            <a data-fancybox="gallery-0" href="assets/img/g6.jpg">
                                <img data-src="assets/img/g6.jpg" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet" class="lazyload gallery-thumb">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
                            <a data-fancybox="gallery-0" href="assets/img/g7.jpg">
                                <img data-src="assets/img/g7.jpg" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet" class="lazyload gallery-thumb">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
                            <a data-fancybox="gallery-0" href="assets/img/g8.jpg">
                                <img data-src="assets/img/g8.jpg" alt="Floor Plan, Brochure, sample flat, Project reviews, complaints, Near Station, Possession Date, Payment Plan, Cost Sheet" class="lazyload gallery-thumb">
                            </a>
                        </div>


                    </div>
                </section>
                <section class="section shadow-sm lazyload" data-script="assets/plugins/fancybox/jquery.fancybox.min.js" data-link="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
                    <span class="section-link" id="location"></span>
                    <span class="head text-capitalize">Location</span>
                    <div class="row mb-3">
                        <div class=" col-sm-12">
                            <span class="d-block section-heading-sub text-capitalize">Map View</span>

                            <iframe class="lazyload lmap mb-2"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15091.90293149096!2d72.8153899!3d18.9766791!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce7aa565351b%3A0xb1c3100586cd03b!2sWillingdon%20Sports%20Club!5e0!3m2!1sen!2sin!4v1723627564006!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                        <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> 6 Mins away from Mahalaxmi Station  </div>
                        <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>  7 Mins away from Link Road & SV Road</div>
                        <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>  1 mins away from Metro Station</div> <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>  5 mins away from Fire Brigade</div>
                        <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> 1 mins away from Shree Mahalaxmi Temple </div>
                        <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> 1 mins away from Thakur International School</div>
                        <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>  1 mins away from Zenith Hospital & Sai Lee Hospital </div>







                    </div>


                </section>
                <section class="section shadow-sm lazyload">
                    <span class="section-link" id="sitevisit"></span>
                    <span class="head text-capitalize">Virtual Site Tour</span>
                    <a href="#" class="enqModal" data-form="lg" data-title="Virtual Site Visit" data-btn="Start Tour" data-enquiry="Virtual Site Tour" data-redirect="virtualtour" data-toggle="modal" data-target="#enqModal">
                        <div class="at-property-item my-2 pt-md-0">
                            <div class="at-property-img vsv-img">
                                <picture>
                                    <source class="lazyload w-100" media="(max-width: 750px)" data-srcset="assets/img/banner3.jpg" type="image/webp">
                                    <source class="lazyload w-100" media="(min-width: 751px)" data-srcset="assets/img/banner3.jpg" type="image/webp">
                                    <img data-sizes="auto" class="lazyload w-100" data-srcset="assets/img/banner3.jpg 750w,assets/img/banner3.jpg">
                                </picture>
                                <div class="vsv-text-bk">
                                    <div class="vsv-text-bg">
                                        <div class="vsv-icon lazyload"></div>
                                        <span class="text-uppercase h1 font-weight-bold mb-0 d-none d-lg-block">Virtual Tour</span>
                                        <span class="text-capitalize text-center d-none d-lg-block">25 Downtown in Tardeo, South Mumbai</span>
                                    </div>
                                </div>
                            </div>
                            <span class="d-block text-capitalize text-center d-sm-block d-md-none pt-2">25 Downtown in Tardeo, South Mumbai</span>
                        </div>
                    </a>
                </section>
                <section class="section shadow-sm lazyload" id="developer">
                    <div class="d-block pt-2 pb-1 text-center">
                        <img src="assets/img/logo.png" style="max-width: 100%;height: 70px; display: inline-block;">
                    </div>
                    <span class="d-block section-heading-sub text-capitalize">About Hubtown 25 Downtown Developers </span>
                    <p>WE Hubtown developers, Comes With New Project 25 Downtown Discover a world of sophistication and opulence like no other at the epitome of luxury called 25 Downtown in Tardeo, South Mumbai. With easy access to business districts, high-end shopping, entertainment avenues, upscale recreation, and dining, 25 Downtown is envisioned to meet your highest expectations and seamlessly blend style with substance. The incomparable resplendence spills over to the luxurious amenities. If you think it's time for you to redefine your standard of living, then simply elevate yourself to Project 25 Hubtown in Tardeo, South Mumbai, and embrace infinite happiness.</p>
                    <span class="d-block section-heading-sub text-capitalize"> VISION  </span>
                    <P>VISION To be recognised as India’s most trusted and successful brand in the affordable housing segment, driving infrastructure development and empowering India’s growth story.</P>
                    <span class="d-block section-heading-sub text-capitalize">UNHINDERED VIEW: </span>
                    <p>UNHINDERED VIEW: Avisual delight from the expanse of the balcony. Breathe ni the exuberance of freedom that exists between you and the horizon. Fresh air and bright sunlight are not just complimentary but unlimited too.</p>
                    <span class="d-block section-heading-sub text-capitalize">BE THE BEST IN BUSINESS:</span>
                    <p> BE THE BEST IN BUSINESS: With the perfect setting for growth, your business is sure to prosper at an infinite pace at Prathamesh Elite Now, no one can stop you from being the best ni the business. </p>



                </section>
                <div class="micro-side text-center">
                    <div class="og-section pb-2">
                        <ul class="nav nav-fill og-block">
                            <li class="nav-item enqModal" data-form="lg" data-title="Organize Site Visit" data-btn="Request Site Visit" data-enquiry="Organize Site Visit" data-toggle="modal" data-target="#enqModal">Organize Site Visit</li>
                            <li class="nav-item" onclick="window.open('https://api.whatsapp.com/send?phone=+919004005506&text=I want More Information About Hubtown 25 Downtown Tardeo, South Mumbai Project.', '_blank');"><span class="mi mi-whatsapp action-icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span> +91 9004005506</li>
                        </ul>
                        <button class="btn btn-sm btn-info micro-form-btn-sm effetGradient effectScale enqModal mt-1" data-form="sm" data-title="Immediate Call Back" data-btn="Request Call Now" data-enquiry="Immediate Call Back" data-toggle="modal" data-target="#enqModal"><span class="mi mi-call action-icon"></span> Request Call Back</button>
                    </div>
                    <span class="d-block form-heading font-weight-bold my-2">Pre-Register here for Best Offers</span>

                    <form action="sendmail.php" method="POST" class="form-side">
                        <input type="hidden" name="subject" value="Pre-Register Here for Best Offers">
                        <div class="form-group">
                            <input type="text" name="name" pattern="[a-zA-Z ]+" class="form-control rounded-0 micro-form-field" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="fullMobileNo" value="">
                            <input type="tel" id="intTelInput-side" pattern="[0-9]+" name="mobile" class="intTelInput form-control rounded-0 micro-form-field w-100" placeholder="Mobile No" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control rounded-0 micro-form-field" placeholder="E-Mail Address" required>
                        </div>
                        <button type="submit"  class="btn btn-info micro-form-btn mt-2 effetMoveGradient" >Pre-Register Now</button>
                    </form>


                    <!--more button start-->
                    <a href="#" data-toggle="modal" data-target="#enqModal" class="btn btn-info micro-form-btn mt-2 effetMoveGradient button_dsvds" ><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i> Brochures</a>
                    <a href="#" data-toggle="modal" data-target="#enqModal" class="btn btn-info micro-form-btn mt-2 effetMoveGradient button_dsvds" ><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i> Floor Plan</a>
                    <a href="#" data-toggle="modal" data-target="#enqModal" class="btn btn-info micro-form-btn mt-2 effetMoveGradient button_dsvds" ><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i> Price List</a>
                    <a href="#" data-toggle="modal" data-target="#enqModal" class="btn btn-info micro-form-btn mt-2 effetMoveGradient button_dsvds" ><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i> Cost Sheet</a>
                    <a href="#" data-toggle="modal" data-target="#enqModal" class="btn btn-info micro-form-btn mt-2 effetMoveGradient button_dsvds" ><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i>4 BHK Floor Plan</a>
                    <a href="#" data-toggle="modal" data-target="#enqModal" class="btn btn-info micro-form-btn mt-2 effetMoveGradient button_dsvds" ><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i>5 BHK Floor Plan</a>
                    <a href="#" data-toggle="modal" data-target="#enqModal" class="btn btn-info micro-form-btn mt-2 effetMoveGradient button_dsvds" ><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i>Jodi Flats/Apartments Plan</a>
                    <a href="#" data-toggle="modal" data-target="#enqModal" class="btn btn-info micro-form-btn mt-2 effetMoveGradient button_dsvds" ><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i> Master Plan Layout</a>
                    <!--more button end-->		
                </div>
                <ul class="mob-action nav nav-fill d-sm-block d-lg-none">
                    <li class="nav-item" onclick="javascript:location.href = 'tel:+919004005506'"><span class="mi mi-call action-icon"></span> Call</li>
                    <li class="nav-item enqModal" data-form="lg" data-title="Mail me pricing details" data-btn="Send now" data-enquiry="Enquire Now" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal"><span class="mi mi-enquire action-icon"></span> Enquire</li>
                    <li class="nav-item" onclick="window.open('https://api.whatsapp.com/send?phone=+919004005506&text=I want More Information About Hubtown 25 Downtown Tardeo, South Mumbai Project.', '_blank');"><span class="mi mi-whatsapp action-icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span> WhatsApp</li>
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
                                        <img src="assets/img/logo.png" class="modal-logo">
                                        <span class="modal-title-secondary">Register here and Avail the
                                            <span class="text-danger">Best Offers!!</span></span>
                                        <form action="sendmail.php" method="POST" class="form-modal">

                                            <div class="form-group">
                                                <input type="text" name="name" pattern="[a-zA-Z ]+" class="form-control rounded-0 micro-form-field" required placeholder="Name">
                                            </div>
                                            <input type="hidden" name="subject" value="Get Instant Call Back" class="form-control mb-3" id="" placeholder="Name">
                                            <div class="form-group">

                                                <input type="tel" id="intTelInput-popup" pattern="[0-9]+" name="mobile" class="intTelInput form-control rounded-0 micro-form-field" required placeholder="Mobile No">
                                            </div>
                                            <div class="form-group form-md">
                                                <input type="email" name="email" class="form-control rounded-0 micro-form-field" required placeholder="E-Mail Address">
                                            </div>


                                            <button type="submit" class="btn btn-info micro-form-btn effetGradient effectScale">Get Instant Call Back</button>
                                        </form>
                                    </div>
                                </div>
                                <a href="tel:+919004005506" class="modal-call-btn"><i class="mi mi-call"></i> +91 9004005506</a>
                            </div>
                        </div>
                    </div>
                </div></main>

        <script>document.addEventListener("DOMContentLoaded", function (event) {
                document.getElementById("loader").remove();
                document.querySelector('header').classList.remove('pload');
                document.querySelector('main').classList.remove('pload');
                document.querySelector('footer').classList.remove('pload')
            });
            var sitePrimaryColor = '#A88932';</script>
    </body>

</html>
</x-pages-layout>