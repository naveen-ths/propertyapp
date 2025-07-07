// Home page JavaScript functionality

// Global variables for pagination
var currentInvestmentPage = 1;
var currentLocation = 'mumbai';
var isLoadingMore = false;

$(document).ready(function() {
    // Enquiry form submission
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
        
        $.ajax({
            url: window.enquirySubmitRoute,
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
        var value = 'Our Sales team will get back to you shortly!';
        $(".print-success-msg").find("ul").append('<li>' + value + '</li>');
        setTimeout(function() {
            $(".print-success-msg").css('display', 'none');
            $(".modal").css('display', 'none');
        }, 3000);
        var a = document.getElementsByClassName('form-control');
        for (var i = 0; i < a.length; i++) {
            a[i].value = "";
        }
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
        for (var i = 0; i < a.length; i++) {
            a[i].value = "";
        }
    }

    // Deletable input functionality
    $('input.deletable').wrap('<span class="deleteicon"></span>').after($('<span>x</span>').click(
        function() {
            $(this).prev('input').val('').trigger('change').focus();
        }));

    // Load initial data on page load
    var defaultLocation = window.defaultLocation;
    changeLocation(defaultLocation);

    // View More Investment Properties button click handler
    $('#view-more-investment').click(function() {
        loadMoreInvestmentProperties();
    });
});

// Carousel initialization
function initializeCarousels() {
    $('#carousel_in_dev').owlCarousel({
        margin: 15,
        autoplay: true,
        rewind: false,
        loop: true,
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
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

    $('#carousel_in_topselling').owlCarousel({
        margin: 15,
        autoplay: false,
        rewind: false,
        loop: false,
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        stagePadding: 0,
        center: false,
        startPosition: 0,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            },
            1024: {
                items: 2
            },
            1366: {
                items: 2
            }
        }
    });

    // Set proper styling for carousel items
    setTimeout(function() {
        $('#carousel_in_topselling .owl-item').css({
            'width': 'auto',
            'min-width': '455px',
            'max-width': '455px'
        });
        $('#carousel_in_topselling .owl-stage').css({
            'display': 'flex',
            'align-items': 'center',
            'transform': 'translate3d(0px, 0px, 0px)'
        });
    }, 100);

    // Investment opportunities now use grid layout instead of carousel
}

// Search form functionality
function funSearchhome() {
    // Submit the form directly instead of redirecting
    document.getElementById('search-form-location').submit();
}

// Search input enter key handler
function initializeSearchInput() {
    var input = document.getElementById("search_str_home");
    input.addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            event.preventDefault();
            document.getElementById("sbtnh").click();
        }
    });
}

// Contact button modal handler
$(document).on("click", ".contactbtn", function() {
    var myPname = $('#pname').html($(this).data('id'));
    var project = $(this).data('pname');
    var developer = $(this).data('dname');
    $(".modal-body #pname").val(myPname);
    $(".modal-body #project").val(project);
    $(".modal-body #developer").val(developer);
});

// Count animation plugin
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

// Initialize count animation
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

// Function to change location and load dynamic data
function changeLocation(location) {
    // Reset pagination when changing location
    currentInvestmentPage = 1;
    currentLocation = location;
    
    // Update hidden input
    document.getElementById('city_str_home').value = location;
    
    // Make AJAX request to get location data
    $.ajax({
        url: window.getLocationDataRoute,
        type: 'GET',
        data: {
            'location': location,
            'page': 1
        },
        beforeSend: function() {
            // Show loading states
            $('#top-selling-title').html('Loading...');
            $('#top-investment-title').html('Loading...');
            $('#developers-title').html('Loading...');
        },
        success: function(response) {
            // Update titles
            $('#top-selling-title').html('Top Selling Projects in ' + response.location);
            $('#top-investment-title').html('Top Investment Opportunity in ' + response.location);
            $('#developers-title').html('Reputed Developers in ' + response.location);
            $('#developers-link').attr('href', '/developers-in-' + location.toLowerCase());
            
            // Update Top Selling Properties
            updateTopSellingProperties(response.topSellingProperties);
            
            // Update Top Investment Opportunities (reset grid first)
            updateTopInvestmentOpportunities(response.topInvestmentOpportunities, true);
            
            // Show/hide view more button
            if (response.hasMoreInvestmentProperties) {
                $('#view-more-investment').show();
            } else {
                $('#view-more-investment').hide();
            }
            
            // Update Developers
            updateDevelopers(response.developers);
        },
        error: function(xhr, status, error) {
            console.error('Error loading location data:', error);
            $('#top-selling-title').html('Top Selling Projects in ' + location);
            $('#top-investment-title').html('Top Investment Opportunity in ' + location);
            $('#developers-title').html('Reputed Developers in ' + location);
        }
    });
}

// Function to update top selling properties
function updateTopSellingProperties(properties) {
    var carousel = $('#carousel_in_topselling');
    carousel.trigger('destroy.owl.carousel');
    carousel.html('');
    
    var defaultImage = window.defaultImage;
    
    if (properties.length > 0) {
        properties.forEach(function(property) {
            var propertyHtml = `
                <a href="/${property.property_slug}" class="grid_item prop small">
                    <figure>
                        <img src="${property.property_logo ? '/assets/img/property/propertylogo/' + property.property_logo : defaultImage}" 
                             class="img-fluid" alt="${property.property_title}">
                        <div class="info">
                            <div class="cat_star">
                                <i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
                            </div>
                            <h3>${property.property_title}</h3>
                            <p>
                                <i class="fa-solid fa-house-chimney fa-2xs"></i> ${property.property_type}<br>
                                <i class="fa-solid fa-location-dot fa-2xs"></i> ${property.property_location}
                            </p>
                        </div>
                        <span class="pricing">${property.property_price}</span>
                        <small class="dnames">By ${property.builder_name}</small>
                    </figure>
                </a>
            `;
            carousel.append(propertyHtml);
        });
    } else {
        carousel.html('<div class="col-12 text-center"><p>No properties found for this location</p></div>');
    }
    
    // Reinitialize carousel
    carousel.owlCarousel({
        center: false,
        items: 2,
        loop: false,
        margin: 15,
        autoplay: false,
        autoplayTimeout: 5000,
        stagePadding: 0,
        startPosition: 0,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 2 }
        }
    });
    
    // Set proper styling for carousel items after initialization
    setTimeout(function() {
        carousel.find('.owl-item').css({
            'width': 'auto',
            'min-width': '455px',
            'max-width': '455px'
        });
        carousel.find('.owl-stage').css({
            'display': 'flex',
            'align-items': 'center',
            'transform': 'translate3d(0px, 0px, 0px)'
        });
    }, 100);
}

// Function to update top investment opportunities
function updateTopInvestmentOpportunities(opportunities, resetGrid = false) {
    var grid = $('#investment-properties-grid');
    if (resetGrid) {
        grid.html('');
    }
    
    var defaultImage = window.defaultImage;
    
    if (opportunities.length > 0) {
        opportunities.forEach(function(property) {
            var propertyHtml = `
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="strip grid">
                        <figure>
                            <a href="/${property.property_slug || '#'}">
                                <img src="${property.property_logo ? '/assets/img/property/propertylogo/' + property.property_logo : defaultImage}" 
                                     class="img-fluid" alt="${property.property_title}">
                                <div class="read_more"><span>Read more</span></div>
                            </a>
                            <small>Investment: 5 / 5</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="/${property.property_slug || '#'}">${property.property_title}</a></h3>
                            <h5><a href="">by ${property.builder_name || 'Developer'}</a></h5>
                            <p>
                                <i class="icon-home"></i> ${property.property_type || 'Property'}<br>
                                <i class="icon-location"></i> ${property.property_location}
                            </p>
                            <a class="address">${property.property_price || 'Price on Request'}</a>
                        </div>
                        <ul>
                            <li>
                                <button type="button" class="contactbtn loc_open" data-toggle="modal" 
                                        data-target="#form" data-id="${property.property_title}" 
                                        data-pname="${property.property_title}" data-dname="${property.builder_name || 'Developer'}">
                                    Enquire Now
                                </button>
                            </li>
                            <li>
                                <button class="btn btn-primary whatbtn" onclick="window.open('https://api.whatsapp.com/send?phone=+919310963636&text=Hi! I\\'m Interested In ${property.property_title}, ${property.property_location}. Please Share Details.', '_blank');">
                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            `;
            grid.append(propertyHtml);
        });
    } else if (resetGrid) {
        grid.html('<div class="col-12 text-center"><p>No investment opportunities found for this location</p></div>');
    }
}

// Function to update developers
function updateDevelopers(developers) {
    var mobileCarousel = $('#carousel_in_dev');
    var desktopContainer = $('#developers-desktop');
    
    // Clear existing content
    mobileCarousel.trigger('destroy.owl.carousel');
    mobileCarousel.html('');
    desktopContainer.html('');
    
    if (developers.length > 0) {
        developers.forEach(function(developer) {
            var developerHtml = `
                <div class="blocks">
                    <ul class="menu_list">
                        <li>
                            <div class="thumb">
                                ${developer.logo_url ? 
                                    `<img src="${developer.logo_url}" alt="${developer.name}" width="100" height="100">` :
                                    `<div class="placeholder-logo" style="width: 100px; height: 100px; background: #f0f0f0; display: flex; align-items: center; justify-content: center; border-radius: 50%;"><span style="font-size: 12px; color: #666;">No Logo</span></div>`
                                }
                            </div>
                            <h6>${developer.name}</h6>
                            <h6>${developer.star_rating || ''}</h6>
                            <p>${developer.projects_count} Projects</p>
                        </li>
                    </ul>
                </div>
            `;
            
            var wrappedHtml = developer.website_url ? 
                `<a href="${developer.website_url}" target="_blank">${developerHtml}</a>` : 
                `<div>${developerHtml}</div>`;
            
            // Add to mobile carousel
            mobileCarousel.append(wrappedHtml);
            
            // Add to desktop grid (limit to 8)
            if (desktopContainer.children().length < 8) {
                desktopContainer.append(`<div class="col-md-3">${wrappedHtml}</div>`);
            }
        });
    } else {
        mobileCarousel.html('<div class="text-center"><p>No developers found</p></div>');
        desktopContainer.html('<div class="col-12 text-center"><p>No developers found</p></div>');
    }
    
    // Reinitialize mobile carousel
    mobileCarousel.owlCarousel({
        center: false,
        items: 3,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 3 }
        }
    });
}

// Function to load more investment properties
function loadMoreInvestmentProperties() {
    if (isLoadingMore) return;
    
    isLoadingMore = true;
    currentInvestmentPage++;
    
    $('#view-more-investment').hide();
    $('#loading-investment').show();
    
    $.ajax({
        url: window.getLocationDataRoute,
        type: 'GET',
        data: {
            'location': currentLocation,
            'page': currentInvestmentPage
        },
        success: function(response) {
            // Append new properties to existing grid
            updateTopInvestmentOpportunities(response.topInvestmentOpportunities, false);
            
            // Show/hide view more button
            if (response.hasMoreInvestmentProperties) {
                $('#view-more-investment').show();
            } else {
                $('#view-more-investment').hide();
            }
            
            $('#loading-investment').hide();
            isLoadingMore = false;
        },
        error: function(xhr, status, error) {
            console.error('Error loading more properties:', error);
            currentInvestmentPage--; // Revert page increment
            $('#view-more-investment').show();
            $('#loading-investment').hide();
            isLoadingMore = false;
        }
    });
}

// Initialize everything when DOM is ready
$(document).ready(function() {
    initializeCarousels();
    initializeSearchInput();
});
