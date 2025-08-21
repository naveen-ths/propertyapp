<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Str;

class CityController extends Controller
{

  /**
   * Display a listing of the resource.
   */
  public function index(): View
  {
    $cities = City::latest()->paginate(10);
    return view('backend.cities.index', compact('cities'))
        ->with('i', (request()->input('page', 1) - 1) * 10);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(): View
  {
    return view('backend.cities.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request): RedirectResponse
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'slug' => 'nullable|string|max:255|unique:cities,slug',
      'status' => 'boolean'
    ]);

    $data = $request->all();

    // Generate slug if not provided
    if (empty($data['slug'])) {
      $data['slug'] = Str::slug($data['title']);
    }

    // Ensure slug is unique
    $originalSlug = $data['slug'];
    $counter = 1;
    while (City::where('slug', $data['slug'])->exists()) {
      $data['slug'] = $originalSlug . '-' . $counter;
      $counter++;
    }

    $data['status'] = $request->has('status') ? 1 : 0;

    City::create($data);

    return redirect()->route('cities.index')
        ->with('success', 'City created successfully.');
  }

  /**
   * Display the specified resource.
   */
  public function show(City $city): View
  {
    return view('backend.cities.show', compact('city'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(City $city): View
  {
    return view('backend.cities.edit', compact('city'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, City $city): RedirectResponse
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'slug' => 'nullable|string|max:255|unique:cities,slug,' . $city->id,
      'status' => 'boolean'
    ]);

    $data = $request->all();

    // Generate slug if not provided
    if (empty($data['slug'])) {
      $data['slug'] = Str::slug($data['title']);
    }

    // Ensure slug is unique (excluding current record)
    $originalSlug = $data['slug'];
    $counter = 1;
    while (City::where('slug', $data['slug'])->where('id', '!=', $city->id)->exists()) {
      $data['slug'] = $originalSlug . '-' . $counter;
      $counter++;
    }

    $data['status'] = $request->has('status') ? 1 : 0;

    $city->update($data);

    return redirect()->route('cities.index')
        ->with('success', 'City updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(City $city): RedirectResponse
  {
    // Check if city has properties
    if ($city->properties()->count() > 0) {
      return redirect()->route('cities.index')
          ->with('error', 'Cannot delete city because it has associated properties.');
    }

    $city->delete();

    return redirect()->route('cities.index')
        ->with('success', 'City deleted successfully.');
  }
}
