<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Developer;
use App\Models\HowItWork;
use App\Models\Banner;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller {

  public function index() {
    $howItWorks = HowItWork::active()->ordered()->get();
    $banner = Banner::active()->first();

    // Default location is Mumbai
    $defaultLocation = 'mumbai';
    $developers = Developer::active()->ordered()->limit(8)->get();

    // Get settings for the homepage
    $settings = $this->getSettings();

    return view('home', compact('howItWorks', 'banner', 'developers', 'defaultLocation', 'settings'));
  }

  private function getSettings() {
    return [
        'site_logo' => Setting::get('site_logo', 'public/img/gallery/developer-logo.png'),
        'site_name' => Setting::get('site_name', 'Developers Real Estate Advisory'),
        'site_favicon' => Setting::get('site_favicon', 'public/img/favicon.webp'),
        'head_office_address' => Setting::get('head_office_address', 'Test Head Office Address'),
        'branch_address' => Setting::get('branch_address', 'Test Branch Address'),
        'phone_number' => Setting::get('phone_number', '+91 123456789'),
        'email_address' => Setting::get('email_address', 'info@example.com'),
        'whatsapp_number' => Setting::get('whatsapp_number', '91123456789'),
        'facebook_url' => Setting::get('facebook_url', 'https://www.facebook.com'),
        'instagram_url' => Setting::get('instagram_url', 'https://www.instagram.com'),
        'twitter_url' => Setting::get('twitter_url', 'https://x.com'),
        'linkedin_url' => Setting::get('linkedin_url', 'https://in.linkedin.com'),
        'youtube_url' => Setting::get('youtube_url', 'https://www.youtube.com'),
        'pinterest_url' => Setting::get('pinterest_url', 'https://in.pinterest.com'),
    ];
  }

  public function getLocationData(Request $request) {
    $location = $request->input('location', 'mumbai');
    $page = $request->input('page', 1);
    $perPage = 4;

    // Get top selling properties by location
    $topSellingProperties = Property::where('status', true)
            ->where('top_selling', true) // Only get properties marked as top selling
            ->whereRaw('LOWER(property_location) LIKE ?', ['%' . strtolower($location) . '%'])
            ->with(['gallery' => function($query) {
                $query->orderBy('id', 'asc')->limit(1); // Get only the first gallery image
            }])
            ->orderBy('created_at', 'desc')
            ->limit(8)
            ->get()
            ->map(function($property) {
                // Add the first gallery image URL to the property
                $firstGalleryImage = $property->gallery->first();
                $property->first_gallery_image = $firstGalleryImage 
                    ? asset('assets/img/property/gallery/' . $firstGalleryImage->image)
                    : asset('img/no-image.jpeg');
                return $property;
            });

    // Get investment opportunities from properties table by location with pagination
    $investmentQuery = Property::where('status', true)
            ->whereRaw('LOWER(property_location) LIKE ?', ['%' . strtolower($location) . '%'])
            ->with(['gallery' => function($query) {
                $query->orderBy('id', 'asc')->limit(1); // Get only the first gallery image
            }])
            ->orderBy('created_at', 'desc');
            
    $totalInvestmentProperties = $investmentQuery->count();
    $topInvestmentOpportunities = $investmentQuery
            ->skip(($page - 1) * $perPage)
            ->take($perPage)
            ->get()
            ->map(function($property) {
                // Add the first gallery image URL to the property
                $firstGalleryImage = $property->gallery->first();
                $property->first_gallery_image = $firstGalleryImage 
                    ? asset('assets/img/property/gallery/' . $firstGalleryImage->image)
                    : asset('img/no-image.jpeg');
                return $property;
            });
            
    $hasMoreInvestmentProperties = $totalInvestmentProperties > ($page * $perPage);

    // Get developers from properties table by location (unique builders)
    $developers = Property::where('status', true)
            ->whereRaw('LOWER(property_location) LIKE ?', ['%' . strtolower($location) . '%'])
            ->whereNotNull('builder_name')
            ->select('builder_name', 'developer_logo', 'about_developer', 'property_location')
            ->groupBy('builder_name', 'developer_logo', 'about_developer', 'property_location')
            ->orderBy('builder_name', 'asc')
            ->limit(8)
            ->get()
            ->map(function($property) {
                $logoUrl = null;
                if ($property->developer_logo) {
                    $logoUrl = asset('assets/img/property/developer/' . $property->developer_logo);
                }
                
                return [
                    'name' => $property->builder_name,
                    'logo_url' => $logoUrl,
                    'description' => $property->about_developer ?: 'Leading real estate developer',
                    'location' => $property->property_location,
                    'star_rating' => '★★★★★',
                    'projects_count' => Property::where('builder_name', $property->builder_name)->count(),
                    'website_url' => null, // Can be added later if needed
                ];
            });

    return response()->json([
                'topSellingProperties' => $topSellingProperties,
                'topInvestmentOpportunities' => $topInvestmentOpportunities,
                'developers' => $developers,
                'location' => ucfirst($location),
                'hasMoreInvestmentProperties' => $hasMoreInvestmentProperties,
                'currentPage' => $page,
                'totalInvestmentProperties' => $totalInvestmentProperties
    ]);
  }
}
