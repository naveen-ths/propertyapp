<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search Results - {{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Search results for properties in India on Keystone Real Estate Advisory">
    <meta name="keywords" content="property search, real estate, properties, flats, apartments">

    <meta property="og:title" content="Search Results - {{ config('app.name') }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:description" content="Search results for properties">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ url('public/img/gallery/ks-logo-new.png') }}">

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ url('public/img/favicon.webp') }}" type="image/x-icon">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- BASE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="{{ asset('css/vendors.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
                                            style="background: rgb(250 167 10); border-radius: 5px; color: rgb(255, 255, 255); margin-left: 15px;">
                                            CHAT NOW
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main content -->
        <main>
            <section class="hero_in general">
                <div class="wrapper">
                    <div class="container">
                        <h1 class="fadeInUp">
                            <span></span>Search Results
                        </h1>
                    </div>
                </div>
            </section>

            <div class="container margin_60_35">
                <!-- Search Results Header -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="search-results-header mb-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h3>Search Results</h3>
                                    @if(!empty($searchParams['search_str_home']))
                                        <p class="mb-1">
                                            <strong>Search Term:</strong> "{{ $searchParams['search_str_home'] }}"
                                        </p>
                                    @endif
                                    @if(!empty($searchParams['location']))
                                        <p class="mb-1">
                                            <strong>Location:</strong> {{ ucfirst($searchParams['location']) }}
                                        </p>
                                    @endif
                                    <p class="text-muted">
                                        Found {{ $searchParams['total_results'] }} result{{ $searchParams['total_results'] != 1 ? 's' : '' }}
                                    </p>
                                </div>
                                <div>
                                    <a href="{{ url('/') }}" class="btn btn-outline-primary">
                                        <i class="fas fa-search"></i> New Search
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if($properties->count() > 0)
                    <!-- Properties Grid -->
                    <div class="row">
                        @foreach($properties as $property)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="strip grid">
                                    <figure>
                                        <a href="{{ route('frontend.property.details', $property->property_slug) }}">
                                            @if($property->property_logo)
                                                <img src="{{ asset('storage/' . $property->property_logo) }}" 
                                                     class="img-fluid" alt="{{ $property->property_title }}">
                                            @else
                                                <img src="{{ asset('img/no-image.jpeg') }}" 
                                                     class="img-fluid" alt="{{ $property->property_title }}">
                                            @endif
                                            <div class="read_more"><span>Read more</span></div>
                                        </a>
                                        @if($property->property_price)
                                            <small>₹{{ $property->property_price }}</small>
                                        @endif
                                    </figure>
                                    <div class="wrapper">
                                        <h3>
                                            <a href="{{ route('frontend.property.details', $property->property_slug) }}">
                                                {{ $property->property_title }}
                                            </a>
                                        </h3>
                                        @if($property->builder_name)
                                            <h5>by {{ $property->builder_name }}</h5>
                                        @endif
                                        <p>
                                            @if($property->property_type)
                                                <i class="fa-solid fa-house-chimney fa-2xs"></i> {{ $property->property_type }}<br>
                                            @endif
                                            @if($property->property_location)
                                                <i class="fa-solid fa-location-dot fa-2xs"></i> {{ $property->property_location }}
                                            @endif
                                        </p>
                                        @if($property->property_price)
                                            <a class="address">₹{{ $property->property_price }}</a>
                                        @endif
                                    </div>
                                    <ul>
                                        <li>
                                            <button type="button" class="contactbtn loc_open" data-toggle="modal" 
                                                    data-target="#form" data-id="{{ $property->property_title }}" 
                                                    data-pname="{{ $property->property_title }}" 
                                                    data-dname="{{ $property->builder_name }}">
                                                Enquire Now
                                            </button>
                                        </li>
                                        <li>
                                            <button class="btn btn-primary whatbtn" onclick="window.open('https://api.whatsapp.com/send?phone=+917045670457&text=Hi! I\\'m Interested In {{ $property->property_title }}. Please Share Details.', '_blank');">
                                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-center">
                                {{ $properties->appends(request()->query())->links() }}
                            </div>
                        </div>
                    </div>
                @else
                    <!-- No Results -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center py-5">
                                <div class="mb-4">
                                    <i class="fas fa-search fa-5x text-muted"></i>
                                </div>
                                <h3>No Properties Found</h3>
                                <p class="text-muted mb-4">
                                    We couldn't find any properties matching your search criteria.
                                </p>
                                <div>
                                    <h5>Try:</h5>
                                    <ul class="list-unstyled">
                                        <li>• Checking your spelling</li>
                                        <li>• Using fewer or different keywords</li>
                                        <li>• Searching in a different location</li>
                                    </ul>
                                </div>
                                <a href="{{ url('/') }}" class="btn btn-primary mt-3">
                                    <i class="fas fa-search"></i> Start New Search
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </main>

        <!-- Enquiry Modal -->
        <div class="modal fade zoom-anim-dialog" id="form" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-body">
                    <div class="small-dialog-header">
                        <h3>Enquire For <div id='pname'></div></h3>
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
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" id="developer" name="developer" value="" class="form-control">
                            <input type="hidden" id="project" name="project" value="" class="form-control">
                            <input type="hidden" name="source" value="Search Results Page" class="form-control">
                            <input type="hidden" name="url" value="{{ url('/') }}" class="form-control">
                            
                            <div class="form-group">
                                <input type="text" name="full_name" class="form-control" placeholder="Full Name" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Phone" required>
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
                                <button class="add_top_30 btn_1 full-width purchase btn-submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="plus_border">
            <div class="container margin_25_10">
                <div class="row">
                    <div class="col-lg-5 col-md-4 col-sm-12">
                        <h3 data-bs-target="#collapse_ft_3">Contact Us</h3>
                        <div class="collapse dont-collapse-sm" id="collapse_ft_3">
                            <ul class="contacts">
                                <li><i class="ti-home"></i>Mumbai Headquarter:
                                    A 401, New India chambers, E-6, kali mata, MIDC Cross Road A, Andheri East, Mumbai 400 093</li>
                                <li><i class="ti-home"></i>Pune Branch:
                                    509,Suratwala Mark Plazzo,Wakad Hinjewadi road Hinjewadi Pune 411057.</li>
                                <li><i class="ti-headphone-alt"></i><a href="tel:7045670457">+91 70456 70457</a></li>
                                <li><i class="ti-email"></i><a href="mailto:info@keystonerealestateadvisory.com">info@keystonerealestateadvisory.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12"></div>
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
            </div>
        </footer>
    </div>

    <div id="toTop"></div>

    <!-- COMMON SCRIPTS -->
    <script src="{{ asset('public/js/common_scripts.js') }}"></script>
    <script src="{{ asset('public/js/functions.js') }}"></script>
    <script src="{{ asset('public/assets/validate.js') }}"></script>

    <!-- Enquiry Form Script -->
    <script type="text/javascript">
        $(document).ready(function() {
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
                var datetime = $("input[name='datetime']").val();
                
                $.ajax({
                    url: "{{ route('enquiry.submit') }}",
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
                        datetime: datetime
                    },
                    success: function(data) {
                        if (data.success) {
                            printSuccessMsg(data.success);
                        } else if (data.error) {
                            printErrorMsg(data.error);
                        }
                        $(".btn-submit").find(".fa-spinner").remove();
                        $(".btn-submit").removeAttr("disabled");
                    },
                    error: function(xhr, status, error) {
                        var errorMsg = [];
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            $.each(xhr.responseJSON.errors, function(key, value) {
                                errorMsg.push(value[0]);
                            });
                        } else {
                            errorMsg.push('An error occurred. Please try again.');
                        }
                        printErrorMsg(errorMsg);
                        $(".btn-submit").find(".fa-spinner").remove();
                        $(".btn-submit").removeAttr("disabled");
                    }
                });
            });

            function printSuccessMsg(msg) {
                $(".print-success-msg").find("ul").html('');
                $(".print-success-msg").css('display', 'block');
                
                if (typeof msg === 'string') {
                    $(".print-success-msg").find("ul").append('<li>' + msg + '</li>');
                } else {
                    var value = 'Our Sales team will get back to you shortly!';
                    $(".print-success-msg").find("ul").append('<li>' + value + '</li>');
                }
                
                setTimeout(function() {
                    $(".print-success-msg").css('display', 'none');
                    $(".modal").css('display', 'none');
                }, 3000);
                
                // Clear form
                var a = document.getElementsByClassName('form-control');
                for (var i = 0; i < a.length; i++) {
                    a[i].value = "";
                }
            }

            function printErrorMsg(msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display', 'block');
                
                if (Array.isArray(msg)) {
                    $.each(msg, function(key, value) {
                        $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
                    });
                } else if (typeof msg === 'object') {
                    $.each(msg, function(key, value) {
                        $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
                    });
                } else {
                    $(".print-error-msg").find("ul").append('<li>' + msg + '</li>');
                }
                
                setTimeout(function() {
                    $(".print-error-msg").css('display', 'none');
                }, 3000);
            }
        });

        // Modal functionality
        $(document).on("click", ".contactbtn", function() {
            var myPname = $('#pname').html($(this).data('id'));
            var project = $(this).data('pname');
            var developer = $(this).data('dname');
            $(".modal-body #pname").val(myPname);
            $(".modal-body #project").val(project);
            $(".modal-body #developer").val(developer);
        });
    </script>
</body>

</html>
