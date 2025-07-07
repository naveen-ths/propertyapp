<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HowItWork;

class HowItWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        HowItWork::truncate();

        // Create "How It Works" steps for property management system
        $howItWorksData = [
            [
                'icon' => 'fas fa-search',
                'title' => 'Search Properties',
                'description' => 'Browse through our extensive collection of properties. Use filters to find properties that match your specific requirements including location, price range, property type, and amenities.',
                'sort_order' => 1,
                'status' => true,
            ],
            [
                'icon' => 'fas fa-heart',
                'title' => 'Shortlist Favorites',
                'description' => 'Save properties you love to your favorites list. Compare different properties side by side and keep track of the ones that interest you most.',
                'sort_order' => 2,
                'status' => true,
            ],
            [
                'icon' => 'fas fa-calendar-check',
                'title' => 'Schedule Viewing',
                'description' => 'Book a property viewing at your convenience. Our agents will arrange a personal tour of the property and answer all your questions about the neighborhood and amenities.',
                'sort_order' => 3,
                'status' => true,
            ],
            [
                'icon' => 'fas fa-file-contract',
                'title' => 'Submit Application',
                'description' => 'Found your dream property? Submit your application with required documents. Our team will guide you through the entire application process step by step.',
                'sort_order' => 4,
                'status' => true,
            ],
            [
                'icon' => 'fas fa-key',
                'title' => 'Get Your Keys',
                'description' => 'Once approved, complete the final paperwork and receive your keys. Welcome to your new home! Our support team remains available for any future assistance.',
                'sort_order' => 5,
                'status' => true,
            ],
            [
                'icon' => 'fas fa-headset',
                'title' => '24/7 Support',
                'description' => 'Get round-the-clock support from our dedicated customer service team. Whether you have questions about maintenance, payments, or need assistance, we\'re here to help.',
                'sort_order' => 6,
                'status' => true,
            ],
        ];

        // Insert data into the database
        foreach ($howItWorksData as $data) {
            HowItWork::create($data);
        }

        $this->command->info('HowItWork seeder completed successfully!');
    }
}
