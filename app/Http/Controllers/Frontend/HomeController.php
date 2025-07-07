<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Developer;
use App\Models\HowItWork;
use App\Models\Banner;
use App\Models\Setting;
use App\Models\InvestmentOpportunity;
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

    // Get properties by location - assuming location is stored in property_location field
    $topSellingProperties = Property::where('status', true)
            ->whereRaw('LOWER(property_location) LIKE ?', ['%' . strtolower($location) . '%'])
            ->orderBy('created_at', 'desc')
            ->limit(8)
            ->get();

    // Get investment opportunities by location
    $topInvestmentOpportunities = InvestmentOpportunity::where('status', true)
            ->whereRaw('LOWER(location) = ?', [strtolower($location)])
            ->orderBy('sort_order', 'asc')
            ->orderBy('created_at', 'desc')
            ->limit(8)
            ->get();

    // Get developers by location
    $developers = Developer::active()
            ->whereRaw('LOWER(location) LIKE ?', ['%' . strtolower($location) . '%'])
            ->ordered()
            ->limit(8)
            ->get();

    return response()->json([
                'topSellingProperties' => $topSellingProperties,
                'topInvestmentOpportunities' => $topInvestmentOpportunities,
                'developers' => $developers,
                'location' => ucfirst($location)
    ]);
  }
}
