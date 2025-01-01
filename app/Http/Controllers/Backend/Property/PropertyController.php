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

class PropertyController extends Controller {

    /**
     * Display a listing of the resource.
     */
    public function index(): View {

        $properties = Property::latest()->paginate(10);
        return view('backend.property.index', compact('properties'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View {
        return view('backend.property.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePropertyRequest $request): RedirectResponse {

//        echo "<pre>";
//        print_r($request);
//        die;
        $validated = $request->validated();
        $request['property_slug'] = Str::slug($request->property_title);
        if ($request->hasFile('property_logo')) {
            $filePath = Storage::disk('public')->put('uploads', request()->file('property_logo'), 'public');
            $validated['property_logo'] = $filePath;
        }
        Property::create($validated);
        return redirect()->route('property.index')
                ->with('success', 'Property created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View {
        return view('backend.property.view', [
          'property' => Property::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View {
        $slides = Property::find($id)->slides;
        $property = Property::find($id);
        //
        return view('backend.property.edit', [
          'property' => $property,
          'slides' => $slides
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePropertyRequest $request, Property $property): RedirectResponse {
        //
        $validated = $request->validated();
        if ($request->hasFile('property_logo')) {
            if (isset($property->property_logo)) {
                Storage::disk('public')->delete($property->property_logo);
            }
            $file = request()->file('property_logo');
            $filePath = Storage::disk('public')->put('uploads', request()->file('property_logo'), 'public');
            $validated['property_logo'] = $filePath;
        } else {
            $validated['property_logo'] = $property->property_logo;
        }

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
                    foreach ($request->banners as $photo) {
                        $filename = $photo->store('banners');
                        \App\Models\PropertySliderImages::create([
                          'property_id' => $property->id,
                          'image' => $filename
                        ]);
                    }
                    echo "Upload Successfully";
                } else {
                    echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
                }
            }
        }

        $property->update($validated);

        return redirect()->route('property.index')
                ->with('success', 'Property updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property): RedirectResponse {

        if (isset($property->property_logo)) {
            Storage::disk('public')->delete($property->property_logo);
        }

        $property->delete();
        return redirect()->route('property.index')
                ->with('success', 'Property deleted successfully');
    }

    public function delete(Request $request) {
        try {
            $property = Property::find($request->property_id);

            $property->delete();
        } catch (\Exception $e) {
            $request->session()->flash('warning', 'Something went wrong!');
            return redirect()->back();
        }
        return redirect()->route('property.index')->with('status', 'property-deleted');
    }
}
