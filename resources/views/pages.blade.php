<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="assets/img/favicon.png" sizes="16x16">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <meta name="description" content="25 Downtown Project by Hubtown in Tardeo, Mahalaxmi, South Mumbai.G+9P+3 Amenities Floor + 55 Sea View Habitable Floor, having 4 BHK, 5 BHK Apartment, RERA Carpet [3400–5100] sq. ft. Get Price, Location, Floor Plan, Brochure, Sample Flat, Project Reviews, Complaints, Near Station, Possession Date, Payment Plan, and Cost Sheet. Book your dream home today!">
        <meta name="author" content="25 Downtown">

        <meta name="description" content="Get Hubtown 25 Downtown Tardeo, Mumbai, location, Price list, Floor Plan, Brochure pdf, sample flat, Project reviews, complaints, Cost Sheet, Flat Price" class="yoast-seo-meta-tag" />
        <link rel="canonical" href="https://the25downtown.com/" class="yoast-seo-meta-tag" />
        <meta property="og:url" content="https://the25downtown.com/" class="yoast-seo-meta-tag" />

        <meta name="keywords" content="Hubtown 25 Downtown Tardeo, South Mumbai, 25 Downtown price, 25 Downtown floor plans, Hubtown 25 Downtown Brochure, 25 Downtown Amenities, 25 Downtown Location, 25 Downtown Reviews"/>

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

        <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
        <link rel="preload" href="{{ asset('assets/front/js/app.js') }}" as="script">
        <link rel="preload" href="{{ asset('assets/front/fonts/roboto-bold-webfont.woff2') }}" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{ asset('assets/front/fonts/roboto-regular-webfont.woff2') }}" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{ asset('assets/front/fonts/muli-variablefont_wght-webfont.woff2') }}" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{ asset('assets/front/fonts/micon.woff2') }}" as="font" type="font/woff2" crossorigin>
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="{{ asset('assets/front/js/app.js') }}" defer></script>


    </head>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'Laravel') }}</title>

            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.bunny.net">
            <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
            <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
            <link rel="preload" href="{{ asset('assets/front/js/app.js') }}" as="script">

            <!-- Scripts -->
        </head>
           <body data-spy="scroll" data-target="#navbarNav">
            <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>
        </body>
    </html>
