<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Enquiries;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

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

    /**
     * Export enquiries to Excel format (CSV)
     */
    public function export()
    {
        $enquiries = Enquiries::latest()->get();
        
        $filename = 'enquiries_' . date('Y-m-d_H-i-s') . '.csv';
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];
        
        $callback = function() use ($enquiries) {
            $file = fopen('php://output', 'w');
            
            // Add CSV headers
            fputcsv($file, [
                'ID',
                'Property URL',
                'Name',
                'Mobile',
                'Email',
                'Created At',
                'Updated At'
            ]);
            
            // Add data rows
            foreach ($enquiries as $enquiry) {
                fputcsv($file, [
                    $enquiry->id,
                    $enquiry->property_url,
                    $enquiry->name,
                    $enquiry->mobile,
                    $enquiry->email,
                    $enquiry->created_at ? $enquiry->created_at->format('Y-m-d H:i:s') : '',
                    $enquiry->updated_at ? $enquiry->updated_at->format('Y-m-d H:i:s') : ''
                ]);
            }
            
            fclose($file);
        };
        
        return response()->stream($callback, 200, $headers);
    }
}
