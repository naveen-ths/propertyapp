<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller {

    public function index(Request $request) {



        return view('frontend.property.index', []);
    }

    public function details($slug) {

        $information = [];
        $information['pageHeading'] = "Page TItle";
        $propertyContent = Property::where('property_slug', $slug)->firstOrFail();
        $information['propertyDetails'] = $propertyContent;

        return view('frontend.property.details', $information);
    }
}
