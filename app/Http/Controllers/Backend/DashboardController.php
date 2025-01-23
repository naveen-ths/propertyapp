<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Enquiries;

class DashboardController extends Controller {

    /**
     * Display a listing of the resource.
     */
    public function index(): View {

        $enquiries = Enquiries::latest()->paginate(10);
        return view('backend.admin.dashboard', compact('enquiries'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
}
