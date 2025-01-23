<?php

namespace App\Http\Controllers\Backend\Property;

use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Property;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\PropertySliderImages;
use App\Models\PropertyGalleryImages;
use App\Models\PropertyFloorPlan;
use App\Http\Helpers\UploadFile;
use Illuminate\Support\Facades\DB;


class PropertyController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        $properties = Property::latest()->paginate(10);
        return view('backend.property.index', compact('properties'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('backend.property.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePropertyRequest $request): RedirectResponse
    {

//        echo "<pre>";
//        print_r($request->property_color);
//        echo "</pre>";
//        die;
        $validated = $request->validated();
        $validated['property_slug'] = Str::slug($request->property_slug);

        $location_text = implode(', ', $request->location_text);
        $validated['location_text'] = $location_text;
//        $request['property_amenities'] = json_encode($request->property_amenities);
//        if ($request->hasFile('property_logo')) {
//            $filePath = Storage::disk('public')->put('uploads', request()->file('property_logo'), 'public');
//            $validated['property_logo'] = $filePath;
//        }
        if (request()->hasFile('property_logo')) {
            $validated['property_logo'] = UploadFile::store(public_path('assets/img/property/propertylogo'), $request->property_logo);
        }
        if (request()->hasFile('property_favicon')) {
            $validated['property_favicon'] = UploadFile::store(public_path('assets/img/property/propertyfavicon'), $request->property_favicon);
        }
        if (request()->hasFile('virtual_site_tour')) {
            $validated['virtual_site_tour'] = UploadFile::store(public_path('assets/img/property/virtualsitetour'), $request->virtual_site_tour);
        }

        if ($request->hasFile('complete_costing_details')) {
            $validated['complete_costing_details'] = UploadFile::store(public_path('assets/img/property/costimage'), $request->complete_costing_details);
        }

        if ($request->hasFile('master_plan_image')) {
            $validated['master_plan_image'] = UploadFile::store(public_path('assets/img/property/masterplanimage'), $request->master_plan_image);
        }

        $p_id = Property::create($validated);

        $files = [];
        if ($request->hasFile('banners')) {
            $allowedfileExtension = ['jpg', 'png'];
            $files = $request->file('banners');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);
                //dd($check);
                if ($check) {
                    $filename = UploadFile::store(public_path('assets/img/property/banners'), $file);
//                    $filename = $file->store('banners');
                    PropertySliderImages::create([
                      'property_id' => $p_id->id,
                      'image' => $filename
                    ]);
                    // echo "Upload Successfully";
                } else {
                    // echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
                }
            }
        }

        // Saving slider Images
        $sliderImges = [];
        if ($request->hasFile('gallery')) {
            $allowedfileExtension = ['jpg', 'png'];
            $sliderImges = $request->file('gallery');
            foreach ($sliderImges as $slide) {
                $filename = $slide->getClientOriginalName();
                $extension = $slide->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);
                //dd($check);
                if ($check) {
                    $filename = UploadFile::store(public_path('assets/img/property/gallery'), $file);
//                    $filename = $slide->store('gallery');
                    PropertyGalleryImages::create([
                      'property_id' => $p_id->id,
                      'image' => $filename
                    ]);
//                    echo "Upload Successfully";
                } else {
//                    echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
                }
            }
        }

        $flat_type_count = count($request->flat_type);
        $flat_type = $request->flat_type;
        $carpet_area = $request->carpet_area;
        $flat_price = $request->flat_price;
        if ($flat_type_count > 0) {
            for ($i = 0; $i < $flat_type_count; $i++) {
                $file = "";
                if ($request->hasFile('floor_image')) {
                    $allowedfileExtension = ['jpg', 'png'];
                    $sliderImges = $request->file('floor_image');
                    $filename = $sliderImges[$i]->getClientOriginalName();
                    $extension = $sliderImges[$i]->getClientOriginalExtension();
                    $isValid = in_array($extension, $allowedfileExtension);
                    //dd($check);
                    if ($isValid) {
                    $file = UploadFile::store(public_path('assets/img/property/floorimage'), $sliderImges[$i]);
//                        $file = $sliderImges[$i]->store('floor_image');
//                        echo "Upload Successfully";
                    } else {
//                        echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
                    }
                }

                $floorData = [
                  'property_id' => $p_id->id,
                  'image' => $file,
                  'flat_type' => $flat_type[$i],
                  'carpet_area' => $carpet_area[$i],
                  'flat_price' => $flat_price[$i],
                ];
                PropertyFloorPlan::create($floorData);
            }
        }
        return redirect()->route('property.index')
                ->with('success', 'Property created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        return view('backend.property.view', [
          'property' => Property::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $property = Property::find($id);
        $slides = Property::find($id)->slides;
        $gallery = Property::find($id)->gallery;
        $floors = Property::find($id)->floors;
        //
        return view('backend.property.edit', [
          'property' => $property,
          'slides' => $slides,
          'gallery' => $gallery,
          'floors' => $floors,
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePropertyRequest $request, Property $property): RedirectResponse
    {
        //
        $validated = $request->validated();
        $validated['property_slug'] = Str::slug($request->property_slug);
        if (!empty($request->location_text)) {
            $location_text = implode(', ', $request->location_text);
            $validated['location_text'] = $location_text;
        }

         if (!is_null($property->featured_image)) {
            @unlink(public_path('assets/img/property/featureds/' . $property->featured_image));
        }
        
        if ($request->hasFile('property_logo')) {
            if (isset($property->property_logo)) {
              @unlink(public_path('assets/img/property/propertylogo/' . $property->property_logo));
            }
            $file = request()->file('property_logo');
            $filePath = UploadFile::store(public_path('assets/img/property/propertylogo'), $file);
//            $filePath = Storage::disk('public')->put('uploads', $file, 'public');
            $validated['property_logo'] = $filePath;
        } else {
            $validated['property_logo'] = $property->property_logo;
        }
        
        if ($request->hasFile('property_favicon')) {
            if (isset($property->property_favicon)) {
              @unlink(public_path('assets/img/property/propertyfavicon/' . $property->property_favicon));
            }
            $file = request()->file('property_favicon');
            $filePathFavicon = UploadFile::store(public_path('assets/img/property/propertyfavicon'), $file);
            $validated['property_favicon'] = $filePathFavicon;
        } else {
            $validated['property_favicon'] = $property->property_favicon;
        }

        if ($request->hasFile('virtual_site_tour')) {
            if (isset($property->virtual_site_tour)) {
              @unlink(public_path('assets/img/property/virtualsitetour/' . $property->virtual_site_tour));
            }
            $file = request()->file('virtual_site_tour');
            $filePath = UploadFile::store(public_path('assets/img/property/virtualsitetour'), $file);
            $validated['virtual_site_tour'] = $filePath;
        } else {
            $validated['virtual_site_tour'] = $property->virtual_site_tour;
        }

        if ($request->hasFile('complete_costing_details')) {
            if (isset($property->complete_costing_details)) {
              @unlink(public_path('assets/img/property/costimage/' . $property->complete_costing_details));
            }
            $file = request()->file('complete_costing_details');
            $filePath = UploadFile::store(public_path('assets/img/property/costimage'), $file);
//            $filePath = Storage::disk('public')->put('uploads', $file, 'public');
            $validated['complete_costing_details'] = $filePath;
        } else {
            $validated['complete_costing_details'] = $property->complete_costing_details;
        }

        if ($request->hasFile('master_plan_image')) {
            if (isset($property->master_plan_image)) {
              @unlink(public_path('assets/img/property/masterplanimage/' . $property->masterplanimage));
            }
            $file = request()->file('master_plan_image');
            $filePath = UploadFile::store(public_path('assets/img/property/masterplanimage'), $file);
//            $filePath = Storage::disk('public')->put('uploads', $file, 'public');
            $validated['master_plan_image'] = $filePath;
        } else {
            $validated['master_plan_image'] = $property->master_plan_image;
        }

        $property->update($validated);

        $files = [];
        if ($request->hasFile('banners')) {
            $allowedfileExtension = ['jpg', 'png'];
            $files = $request->file('banners');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);
                //dd($check);
                if ($check) {
                    $filename = UploadFile::store(public_path('assets/img/property/banners'), $file);
//                    $filename = $file->store('banners');
                    \App\Models\PropertySliderImages::create([
                      'property_id' => $property->id,
                      'image' => $filename
                    ]);
                    //echo "Upload Successfully";
                } else {
                    //echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
                }
            }
        }

        // Saving slider Images
        $sliderImges = [];
        if ($request->hasFile('gallery')) {
            $allowedfileExtension = ['jpg', 'png'];
            $sliderImges = $request->file('gallery');
            foreach ($sliderImges as $slide) {
                $filename = $slide->getClientOriginalName();
                $extension = $slide->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);
                //dd($check);
                if ($check) {
                    $filename = UploadFile::store(public_path('assets/img/property/gallery'), $slide);
//                    $filename = $slide->store('gallery');
                    PropertyGalleryImages::create([
                      'property_id' => $property->id,
                      'image' => $filename
                    ]);
//                    echo "Upload Successfully";
                } else {
//                    echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
                }
            }
        }

        $flat_type_count = count($request->flat_type);
        $flat_type = $request->flat_type;
        $carpet_area = $request->carpet_area;
        $flat_price = $request->flat_price;
        if ($flat_type_count > 0) {
            for ($i = 0; $i < $flat_type_count; $i++) {
                $file = "";
                if ($request->hasFile('floor_image')) {
                    $allowedfileExtension = ['jpg', 'png'];
                    $sliderImges = $request->file('floor_image');
                    $filename = $sliderImges[$i]->getClientOriginalName();
                    $extension = $sliderImges[$i]->getClientOriginalExtension();
                    $isValid = in_array($extension, $allowedfileExtension);
                    //dd($check);
                    if ($isValid) {
                        $file = UploadFile::store(public_path('assets/img/property/floorimage'), $sliderImges[$i]);
//                        $file = $sliderImges[$i]->store('floor_image');
//                        echo "Upload Successfully";
                    } else {
//                        echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
                    }
                }

                $floorData = [
                  'property_id' => $property->id,
                  'image' => $file,
                  'flat_type' => $flat_type[$i],
                  'carpet_area' => $carpet_area[$i],
                  'flat_price' => $flat_price[$i],
                ];
                if($flat_type[$i] != ""){
                    PropertyFloorPlan::create($floorData);
                }
                
            }
        }

        return redirect()->route('property.index')
                ->with('success', 'Property updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property): RedirectResponse
    {

         if (isset($property->property_logo)) {
            @unlink(public_path('assets/img/property/propertylogo/' . $property->property_logo));
          }
         if (isset($property->property_favicon)) {
            @unlink(public_path('assets/img/property/propertyfavicon/' . $property->property_favicon));
          }
         if (isset($property->complete_costing_details)) {
             @unlink(public_path('assets/img/property/costimage/' . $property->complete_costing_details));
          }

        $property->delete();
        return redirect()->route('property.index')
                ->with('success', 'Property deleted successfully');
    }

    public function delete(Request $request)
    {
        try {
          
           $slides = Property::find($request->property_id)->slides;
            $gallery = Property::find($request->property_id)->gallery;
            $floors = Property::find($request->property_id)->floors;
            
            if(!empty($slides)) {
                foreach ($slides as $key => $slide) {
                  @unlink(public_path('assets/img/property/banners/' . $slide->image));
                }
            }
            if(!empty($gallery)) {
                foreach ($gallery as $key => $g) {
                  @unlink(public_path('assets/img/property/gallery/' . $g->image));
                }
            }
            if(!empty($floors)) {
                foreach ($floors as $key => $floor) {
                  @unlink(public_path('assets/img/property/floorimage/' . $floor->image));
                }
            }
           
        
          PropertySliderImages::where('property_id', $request->property_id)->delete();
          PropertyGalleryImages::where('property_id', $request->property_id)->delete();
          PropertyFloorPlan::where('property_id', $request->property_id)->delete();
    
            $property = Property::find($request->property_id);
            
            if (isset($property->property_logo)) {
              @unlink(public_path('assets/img/property/propertylogo/' . $property->property_logo));
            }
            if (isset($property->property_favicon)) {
              @unlink(public_path('assets/img/property/propertyfavicon/' . $property->property_favicon));
            }
            if (isset($property->complete_costing_details)) {
               @unlink(public_path('assets/img/property/costimage/' . $property->complete_costing_details));
            }

            $property->delete();
        } catch (\Exception $e) {
            $request->session()->flash('warning', 'Something went wrong!');
            return redirect()->back();
        }
        return redirect()->route('property.index')->with('status', 'property-deleted');
    }
    
    public function deleteBanner($id)
    {
     $banner = PropertySliderImages::find($id);
      if (isset($banner->image)) {
          @unlink(public_path('assets/img/property/banners/' . $banner->image));
        }
        $banner->delete();

        return response()->json(['success' => 'Image Deleted Successfully!']);
    }
    public function deleteGallery($id)
    {
     $gallery = PropertyGalleryImages::find($id);
      if (isset($gallery->image)) {
          @unlink(public_path('assets/img/property/gallery/' . $gallery->image));
        }
        $gallery->delete();

        return response()->json(['success' => 'Image Deleted Successfully!']);
    }
    
    public function locationDelete(Request $request, Property $property)
  {
    $removeLocation = $request->location;
    $property = Property::find($request->p_id);

    $locationText = $property->location_text;
    $locationTextArray = [];
    if (!empty($locationText)) {
      $locationTextArray = explode(",", $locationText);
    }
    $filteredArray = array_filter($locationTextArray, fn($value) => !is_null($value) && $value !== ' ');

    if (($key = array_search($removeLocation, $filteredArray)) !== false) {
      unset($filteredArray[$key]);
    }
    
    $location_text = implode(', ', $filteredArray);
    DB::table('properties')
            ->where('id', $request->p_id)
            ->update(['location_text' => $location_text]);

    return response()->json(['success' => 'Location Deleted Successfully!']);
  }
}
