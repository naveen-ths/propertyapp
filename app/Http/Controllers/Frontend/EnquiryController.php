<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnquiryFormRequest;
use App\Models\Enquiries;

class EnquiryController extends Controller
{

  public function submit(EnquiryFormRequest $request)
  {
    // Capture the data
    $validated = $request->validated();

    Enquiries::create($validated);
    return back()->with('success', 'Thank you for your message!');
  }
}
