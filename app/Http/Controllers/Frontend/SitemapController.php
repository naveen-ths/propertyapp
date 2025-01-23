<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Sitemap;

class SitemapController extends Controller
{

    public function index(Request $request)
    {
        $path = public_path('sitemap.xml');
        $properyList = Property::all('property_slug')->toArray();
        $urls = [];
        foreach ($properyList as $ls) {
            $urls[] = url('/') . '/' . $ls['property_slug'];
        }
        Sitemap::create()->add($urls)->writeToFile($path);
        echo "Sitemap Generated Successfully";
    }
}
