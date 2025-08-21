<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\InvestmentOpportunity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InvestmentOpportunityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $opportunities = InvestmentOpportunity::ordered()->paginate(10);
        return view('backend.investment-opportunities.index', compact('opportunities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.investment-opportunities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'price_range' => 'nullable|string|max:255',
            'property_type' => 'nullable|string|max:255',
            'developer_name' => 'nullable|string|max:255',
            'contact_phone' => 'nullable|string|max:255',
            'contact_email' => 'nullable|email|max:255',
            'property_url' => 'nullable|url|max:255',
            'investment_rating' => 'nullable|numeric|min:0|max:5',
            'sort_order' => 'nullable|integer|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'status' => 'boolean',
        ]);

        $data = $request->all();
        
        // Generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('investment-opportunities', 'public');
        }

        InvestmentOpportunity::create($data);

        return redirect()->route('investment-opportunities.index')
                        ->with('success', 'Investment opportunity created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(InvestmentOpportunity $investmentOpportunity)
    {
        $opportunity = $investmentOpportunity;
        return view('backend.investment-opportunities.show', compact('opportunity'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InvestmentOpportunity $investmentOpportunity)
    {
        $opportunity = $investmentOpportunity;
        return view('backend.investment-opportunities.edit', compact('opportunity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InvestmentOpportunity $investmentOpportunity)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'price_range' => 'nullable|string|max:255',
            'property_type' => 'nullable|string|max:255',
            'developer_name' => 'nullable|string|max:255',
            'contact_phone' => 'nullable|string|max:255',
            'contact_email' => 'nullable|email|max:255',
            'property_url' => 'nullable|url|max:255',
            'investment_rating' => 'nullable|numeric|min:0|max:5',
            'sort_order' => 'nullable|integer|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'status' => 'boolean',
        ]);

        $data = $request->all();

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($investmentOpportunity->image) {
                Storage::disk('public')->delete($investmentOpportunity->image);
            }
            $data['image'] = $request->file('image')->store('investment-opportunities', 'public');
        }

        $investmentOpportunity->update($data);

        return redirect()->route('investment-opportunities.index')
                        ->with('success', 'Investment opportunity updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InvestmentOpportunity $investmentOpportunity)
    {
        // Delete image
        if ($investmentOpportunity->image) {
            Storage::disk('public')->delete($investmentOpportunity->image);
        }

        $investmentOpportunity->delete();

        return redirect()->route('investment-opportunities.index')
                        ->with('success', 'Investment opportunity deleted successfully.');
    }
}
