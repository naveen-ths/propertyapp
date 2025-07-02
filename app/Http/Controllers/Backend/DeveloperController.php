<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Developer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $developers = Developer::orderBy('sort_order')->orderBy('name')->paginate(10);
        return view('backend.developers.index', compact('developers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.developers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo_url' => 'nullable|url',
            'location' => 'required|string|max:255',
            'rating' => 'required|numeric|min:0|max:5',
            'projects_count' => 'required|integer|min:0',
            'website_url' => 'nullable|url',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'sort_order' => 'required|integer|min:0',
            'status' => 'required|boolean',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string|max:500',
            'og_image' => 'nullable|url'
        ]);

        $data = $request->only([
            'name', 'description', 'location', 'rating', 'projects_count',
            'website_url', 'phone', 'email', 'sort_order', 'status',
            'meta_title', 'meta_description', 'meta_keywords',
            'og_title', 'og_description', 'og_image'
        ]);

        // Generate slug
        $data['slug'] = Str::slug($request->name);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('developers', 'public');
            $data['logo'] = $logoPath;
        } elseif ($request->filled('logo_url')) {
            $data['logo'] = $request->logo_url;
        }

        Developer::create($data);

        return redirect()->route('developers.index')
            ->with('success', 'Developer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Developer $developer)
    {
        return view('backend.developers.show', compact('developer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Developer $developer)
    {
        return view('backend.developers.edit', compact('developer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Developer $developer)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo_url' => 'nullable|url',
            'location' => 'required|string|max:255',
            'rating' => 'required|numeric|min:0|max:5',
            'projects_count' => 'required|integer|min:0',
            'website_url' => 'nullable|url',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'sort_order' => 'required|integer|min:0',
            'status' => 'required|boolean',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string|max:500',
            'og_image' => 'nullable|url'
        ]);

        $data = $request->only([
            'name', 'description', 'location', 'rating', 'projects_count',
            'website_url', 'phone', 'email', 'sort_order', 'status',
            'meta_title', 'meta_description', 'meta_keywords',
            'og_title', 'og_description', 'og_image'
        ]);

        // Update slug if name changed
        if ($request->name !== $developer->name) {
            $data['slug'] = Str::slug($request->name);
        }

        // Handle logo upload
        if ($request->hasFile('logo')) {
            // Delete old logo if exists
            if ($developer->logo && !str_starts_with($developer->logo, 'http') && Storage::disk('public')->exists($developer->logo)) {
                Storage::disk('public')->delete($developer->logo);
            }
            
            $logoPath = $request->file('logo')->store('developers', 'public');
            $data['logo'] = $logoPath;
        } elseif ($request->filled('logo_url')) {
            // Delete old uploaded logo if switching to URL
            if ($developer->logo && !str_starts_with($developer->logo, 'http') && Storage::disk('public')->exists($developer->logo)) {
                Storage::disk('public')->delete($developer->logo);
            }
            $data['logo'] = $request->logo_url;
        }

        $developer->update($data);

        return redirect()->route('developers.index')
            ->with('success', 'Developer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Developer $developer)
    {
        // Delete associated logo if exists
        if ($developer->logo && !str_starts_with($developer->logo, 'http') && Storage::disk('public')->exists($developer->logo)) {
            Storage::disk('public')->delete($developer->logo);
        }

        $developer->delete();

        return redirect()->route('developers.index')
            ->with('success', 'Developer deleted successfully.');
    }
}
