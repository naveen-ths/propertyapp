<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display the banner management page.
     */
    public function index()
    {
        // Get the single banner or create an empty instance if none exists
        $banner = Banner::first();
        
        if (!$banner) {
            // Create an empty banner instance with default values for the form
            $banner = new Banner([
                'title' => '',
                'description' => '',
                'image_url' => null,
                'button_text' => '',
                'button_url' => '',
                'section_position' => 'hero',
                'sort_order' => 1,
                'status' => true
            ]);
        }
        
        return view('backend.banners.edit', compact('banner'));
    }

    /**
     * Update the banner in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_url' => 'nullable|url',
            'button_text' => 'nullable|string|max:100',
            'button_url' => 'nullable|url',
            'status' => 'required|boolean'
        ]);

        // Get the first banner or create one if it doesn't exist
        $banner = Banner::first();
        
        $data = $request->only([
            'title', 'description', 'button_text', 'button_url', 'status'
        ]);

        // Set default values
        $data['section_position'] = 'hero';
        $data['sort_order'] = 1;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists and banner exists
            if ($banner && $banner->image_url && str_starts_with($banner->image_url, '/storage/')) {
                $oldImagePath = str_replace('/storage/', '', $banner->image_url);
                Storage::disk('public')->delete($oldImagePath);
            }
            
            $imagePath = $request->file('image')->store('banners', 'public');
            $data['image_url'] = Storage::url($imagePath);
        } elseif ($request->filled('image_url')) {
            $data['image_url'] = $request->image_url;
        }

        if ($banner) {
            $banner->update($data);
        } else {
            $banner = Banner::create($data);
        }

        return redirect()->route('admin.banner')
            ->with('success', 'Banner updated successfully.');
    }
}