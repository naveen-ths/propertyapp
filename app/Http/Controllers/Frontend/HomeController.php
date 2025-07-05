<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Developer;
use App\Models\HowItWork;
use App\Models\Banner;
use App\Models\InvestmentOpportunity;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $howItWorks = HowItWork::active()->ordered()->get();
        $banner = Banner::active()->first();
        
        // Default location is Mumbai
        $defaultLocation = 'mumbai';
        $developers = Developer::active()->ordered()->limit(8)->get();
        
        return view('home', compact('howItWorks', 'banner', 'developers', 'defaultLocation'));
    }
    
    public function getLocationData(Request $request)
    {
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
