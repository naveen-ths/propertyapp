<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnquiryFormRequest extends FormRequest
{

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
        'name' => 'required|string|max:255',
        'email' => [],
        'mobile' => 'required|string',
        'property_url' => [],
    ];
  }
}
