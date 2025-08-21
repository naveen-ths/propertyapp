<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller {

  /**
   * Display the settings page.
   */
  public function index() {
    $settings = Setting::ordered()->get()->groupBy('group');
    return view('backend.settings.index', compact('settings'));
  }

  /**
   * Update the settings.
   */
  public function update(Request $request) {
    // Custom validation rules for different field types
    $rules = ['settings' => 'required|array'];

    // Get all settings to build dynamic validation rules
    $settings = Setting::all()->keyBy('key');

    foreach ($settings as $key => $setting) {
      if ($setting->type === 'image') {
        $rules["settings.{$key}"] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048';
      } elseif ($setting->type === 'email') {
        $rules["settings.{$key}"] = 'nullable|email|max:255';
      } elseif ($setting->type === 'url') {
        $rules["settings.{$key}"] = 'nullable|url|max:255';
      } else {
        $rules["settings.{$key}"] = 'nullable|string|max:2000';
      }
    }

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
      return redirect()->back()
                      ->withErrors($validator)
                      ->withInput();
    }

    try {
      foreach ($request->settings as $key => $value) {
        $setting = Setting::where('key', $key)->first();

        if ($setting) {
          // Handle file uploads for image type settings
          if ($setting->type === 'image' && $request->hasFile("settings.{$key}")) {
            $file = $request->file("settings.{$key}");

            // Delete old file if exists
            if ($setting->value && Storage::disk('public')->exists($setting->value)) {
              Storage::disk('public')->delete($setting->value);
            }

            // Store new file
            $path = $file->store('settings', 'public');
            $value = $path;
          } elseif ($setting->type === 'image' && !$request->hasFile("settings.{$key}")) {
            // If no new file uploaded, keep the existing value
            continue;
          }

          $setting->update(['value' => $value]);
        }
      }

      // Clear settings cache
      Setting::clearCache();

      return redirect()->route('settings.index')
                      ->with('success', 'Settings updated successfully.');
    } catch (\Exception $e) {
      return redirect()->back()
                      ->with('error', 'An error occurred while updating settings: ' . $e->getMessage())
                      ->withInput();
    }
  }

  /**
   * Initialize default settings if they don't exist.
   */
  public function initializeSettings() {
    $defaultSettings = [
        // Branding
        [
            'key' => 'site_logo',
            'value' => 'public/img/gallery/developer-logo.png',
            'type' => 'image',
            'group' => 'branding',
            'label' => 'Website Logo',
            'description' => 'Upload your website logo (recommended size: 200x70px)',
            'sort_order' => 1
        ],
        [
            'key' => 'site_name',
            'value' => 'Developers Real Estate Advisory',
            'type' => 'text',
            'group' => 'branding',
            'label' => 'Website Name',
            'description' => 'The name of your website',
            'sort_order' => 2
        ],
        [
            'key' => 'site_favicon',
            'value' => 'public/img/favicon.webp',
            'type' => 'image',
            'group' => 'branding',
            'label' => 'Website Favicon',
            'description' => 'Upload your website favicon (recommended size: 32x32px)',
            'sort_order' => 3
        ],
        // Contact Information
        [
            'key' => 'head_office_address',
            'value' => 'Test Head Office Address',
            'type' => 'textarea',
            'group' => 'contact',
            'label' => 'Head Office Address',
            'description' => 'Your main office address',
            'sort_order' => 1
        ],
        [
            'key' => 'branch_address',
            'value' => 'Test Branch Address',
            'type' => 'textarea',
            'group' => 'contact',
            'label' => 'Branch Office Address',
            'description' => 'Your branch office address',
            'sort_order' => 2
        ],
        [
            'key' => 'phone_number',
            'value' => '+91 123456789',
            'type' => 'text',
            'group' => 'contact',
            'label' => 'Phone Number',
            'description' => 'Primary contact phone number',
            'sort_order' => 3
        ],
        [
            'key' => 'email_address',
            'value' => 'info@example.com',
            'type' => 'email',
            'group' => 'contact',
            'label' => 'Email Address',
            'description' => 'Primary contact email address',
            'sort_order' => 4
        ],
        [
            'key' => 'whatsapp_number',
            'value' => '91123456789',
            'type' => 'text',
            'group' => 'contact',
            'label' => 'WhatsApp Number',
            'description' => 'WhatsApp number without + symbol',
            'sort_order' => 5
        ],
        // Social Media
        [
            'key' => 'facebook_url',
            'value' => 'https://www.facebook.com',
            'type' => 'url',
            'group' => 'social',
            'label' => 'Facebook URL',
            'description' => 'Your Facebook page URL',
            'sort_order' => 1
        ],
        [
            'key' => 'instagram_url',
            'value' => 'https://www.instagram.com',
            'type' => 'url',
            'group' => 'social',
            'label' => 'Instagram URL',
            'description' => 'Your Instagram page URL',
            'sort_order' => 2
        ],
        [
            'key' => 'twitter_url',
            'value' => 'https://x.com',
            'type' => 'url',
            'group' => 'social',
            'label' => 'Twitter URL',
            'description' => 'Your Twitter page URL',
            'sort_order' => 3
        ],
        [
            'key' => 'linkedin_url',
            'value' => 'https://in.linkedin.com',
            'type' => 'url',
            'group' => 'social',
            'label' => 'LinkedIn URL',
            'description' => 'Your LinkedIn page URL',
            'sort_order' => 4
        ],
        [
            'key' => 'youtube_url',
            'value' => 'https://www.youtube.com',
            'type' => 'url',
            'group' => 'social',
            'label' => 'YouTube URL',
            'description' => 'Your YouTube channel URL',
            'sort_order' => 5
        ],
        [
            'key' => 'pinterest_url',
            'value' => 'https://in.pinterest.com',
            'type' => 'url',
            'group' => 'social',
            'label' => 'Pinterest URL',
            'description' => 'Your Pinterest page URL',
            'sort_order' => 6
        ],
    ];

    foreach ($defaultSettings as $settingData) {
      Setting::updateOrCreate(
              ['key' => $settingData['key']],
              $settingData
      );
    }

    return redirect()->route('settings.index')
                    ->with('success', 'Default settings initialized successfully.');
  }
}
