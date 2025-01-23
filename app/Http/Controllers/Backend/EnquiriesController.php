<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Enquiries;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class EnquiriesController extends Controller {

    /**
     * Display a listing of the resource.
     */
    public function index(): View {

        $enquiries = Enquiries::latest()->paginate(10);
        return view('backend.enquiries.index', compact('enquiries'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
     public function destroy(Enquiries $enquiry): RedirectResponse
    {
        $enquiry->delete();
        return redirect()->route('enquiries.index')
                ->with('success', 'Enquiry deleted successfully');
    }
}
