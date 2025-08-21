<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller {

    public function index(Request $request) {
        return view('frontend.property.index', []);
    }

    public function searchResults(Request $request) {
        $searchStr = $request->input('search_str_home', '');
        $location = $request->input('location', '');
        $cityStr = $request->input('city_str_home', '');
        
        // Build the query
        $query = Property::where('status', true);
        
        // Search in property title and location
        if (!empty($searchStr)) {
            $query->where(function ($q) use ($searchStr) {
                $q->whereRaw('LOWER(property_title) LIKE ?', ['%' . strtolower($searchStr) . '%'])
                  ->orWhereRaw('LOWER(property_location) LIKE ?', ['%' . strtolower($searchStr) . '%'])
                  ->orWhereRaw('LOWER(builder_name) LIKE ?', ['%' . strtolower($searchStr) . '%']);
            });
        }
        
        // Filter by location if provided
        if (!empty($location)) {
            $query->whereRaw('LOWER(property_location) LIKE ?', ['%' . strtolower($location) . '%']);
        } elseif (!empty($cityStr)) {
            $query->whereRaw('LOWER(property_location) LIKE ?', ['%' . strtolower($cityStr) . '%']);
        }
        
        // Get paginated results
        $properties = $query->orderBy('created_at', 'desc')->paginate(12);
        
        // Search parameters for display
        $searchParams = [
            'search_str_home' => $searchStr,
            'location' => $location ?: $cityStr,
            'total_results' => $properties->total()
        ];
        
        return view('frontend.property.search-results', compact('properties', 'searchParams'));
    }

    public function details($slug) {

        $information = [];
        $information['pageHeading'] = "Page Title";
        $propertyContent = Property::where('property_slug', $slug)->firstOrFail();
        $information['propertyDetails'] = $propertyContent;
        $information['slides'] = Property::find($propertyContent->id)->slides;
        $information['gallery'] = Property::find($propertyContent->id)->gallery;
        $information['floors'] = Property::find($propertyContent->id)->floors;
        //dd($information['slides']);
        return view('frontend.property.details', $information);
    }
}
