<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePropertyRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->route('property')->id;
        return [
          'property_title' => ['required', 'string', 'max:255'],
          'property_slug' => ['required', Rule::unique('properties')->ignore($id)],
          'property_color' => [],
          'property_logo' => [],
          'property_favicon' => [],
          'banner_content' => [],
          'mobile_no' => [],
          'social_meta_tags' => [],
          'property_highlights' => [],
          'property_footer_content' => [],
          'map_embed_url' => [],
          'sidebar_content' => [],
          'property_brochure' => [],
          'property_video_url' => [],
          'virtual_site_tour' => [],
          'property_short_desc' => [],
          'property_desc' => [],
          'property_location' => [],
          'property_desc' => [],
          'property_price' => [],
          'property_exclusive_text' => [],
          'complete_costing_details' => [],
          'property_amenities' => [],
          'location_text' => [],
          'property_rera_no' => [],
          'builder_name' => [],
          'about_developer' => [],
          'master_plan_image' => [],
          'by_developer_text' => [],
          'pre_launch_text' => [],
          'sidebar_content' => [],
          'property_rera_no' => [],
          'meta_title' => [],
          'meta_keywords' => [],
          'meta_description' => [],
          'status' => ['required', 'string'],
        ];
    }
}
