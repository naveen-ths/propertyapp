<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HowItWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HowItWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $howItWorks = HowItWork::ordered()->get();
        return view('backend.how-it-works.index', compact('howItWorks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.how-it-works.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'icon' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'sort_order' => 'required|integer|min:0',
            'status' => 'boolean'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        HowItWork::create([
            'icon' => $request->icon,
            'title' => $request->title,
            'description' => $request->description,
            'sort_order' => $request->sort_order,
            'status' => $request->has('status') ? true : false
        ]);

        return redirect()->route('how-it-works.index')
            ->with('success', 'How It Works item created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(HowItWork $howItWork)
    {
        return view('backend.how-it-works.show', compact('howItWork'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HowItWork $howItWork)
    {
        return view('backend.how-it-works.edit', compact('howItWork'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HowItWork $howItWork)
    {
        $validator = Validator::make($request->all(), [
            'icon' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'sort_order' => 'required|integer|min:0',
            'status' => 'boolean'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $howItWork->update([
            'icon' => $request->icon,
            'title' => $request->title,
            'description' => $request->description,
            'sort_order' => $request->sort_order,
            'status' => $request->has('status') ? true : false
        ]);

        return redirect()->route('how-it-works.index')
            ->with('success', 'How It Works item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HowItWork $howItWork)
    {
        $howItWork->delete();
        
        return redirect()->route('how-it-works.index')
            ->with('success', 'How It Works item deleted successfully.');
    }
}
