<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Setting;

class InitializeSettings extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'settings:initialize';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize default website settings';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Initializing default settings...');

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
                'value' => 'https://x.com/keystone_rea',
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

        $created = 0;
        $updated = 0;

        foreach ($defaultSettings as $settingData) {
            $setting = Setting::updateOrCreate(
                ['key' => $settingData['key']],
                $settingData
            );

            if ($setting->wasRecentlyCreated) {
                $created++;
            } else {
                $updated++;
            }
        }

        $this->info("Settings initialized successfully!");
        $this->info("Created: {$created} settings");
        $this->info("Updated: {$updated} settings");

        return 0;
    }
}
