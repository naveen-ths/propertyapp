<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        return [
            'property_title' => ['required', 'string', 'max:255'],
            'property_slug' => ['required', 'string', 'max:255'],
//            'property_logo' => ['required', 'mimes:jpg,jpeg,png', 'max:2048'],
            'property_color' => ['required', 'string', 'max:16'],
            'banner_content' => ['required', 'string'],
            'sidebar_content' => ['required', 'string'],
            'property_footer_content' => ['required', 'string'],
            'map_embed_url' => ['required', 'string'],
            'property_short_desc' => ['required', 'string', 'max:255'],
            'property_desc' => ['required', 'string'],
            'property_highlights' => ['required', 'string'],
            'property_location' => ['required', 'string', 'max:255'],
            'property_price' => ['required', 'string', 'max:255'],
            'property_rera_no' => ['required', 'string', 'max:255'],
            'property_brochure' => ['required', 'string', 'max:255'],
            'property_video_url' => ['required', 'string', 'max:255'],
//            'property_type' => ['required', 'string', 'max:255'],
//            'master_plan_image' => ['required', 'string', 'max:255'],
//            'amenities' => ['required', 'json'],
//            'gallery_images_id' => ['required', 'string'],
            'virtual_site_tour' => ['required', 'string'],
            'builder_name' => ['required', 'string'],
            'about_developer' => ['required', 'string'],
            'latitude' => ['required', 'string'],
            'longitude' => ['required', 'string'],
            'status' => ['required', 'string'],
            'meta_title' => ['required', 'string'],
            'meta_keywords' => ['required', 'string'],
            'meta_description' => ['required', 'string'],
        ];
    }
}
