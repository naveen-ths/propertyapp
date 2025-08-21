<?php

namespace Database\Seeders;

use App\Models\Property;
use App\Models\PropertyFloorPlan;
use App\Models\PropertyGalleryImages;
use App\Models\PropertySliderImages;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        // Array of property types and categories
        $propertyTypes = ['apartment', 'house', 'villa', 'townhouse', 'studio', 'penthouse'];
        $propertyCategories = ['rent', 'sale', 'sold', 'rented'];
        $propertyStatuses = ['active', 'inactive', 'pending', 'sold'];
        $locations = [
            'Downtown', 'Uptown', 'Westside', 'Eastside', 'Northside', 'Southside',
            'City Center', 'Suburban', 'Waterfront', 'Historic District'
        ];
        
        // Create 20 properties
        for ($i = 1; $i <= 20; $i++) {
            $property = Property::create([
                'property_title' => $faker->sentence(3, true),
                'property_slug' => $faker->unique()->slug(3),
                'property_logo' => 'img/no-property-image.jpeg',
                'property_favicon' => 'img/no-property-image.jpeg',
                'complete_costing_details' => $faker->paragraph(2),
                'property_color' => $faker->hexColor(),
                'mobile_no' => $faker->phoneNumber,
                'pre_launch_text' => $faker->sentence(5),
                'banner_content' => $faker->paragraph(3),
                'sidebar_content' => $faker->paragraph(2),
                'property_short_desc' => $faker->paragraph(2),
                'property_amenities' => $faker->paragraph(4),
                'property_footer_content' => $faker->paragraph(3),
                'property_desc' => $faker->paragraph(8),
                'property_highlights' => $faker->paragraph(3),
                'property_location' => $faker->randomElement($locations) . ', ' . $faker->city,
                'by_developer_text' => $faker->sentence(4),
                'location_text' => $faker->paragraph(2),
                'property_exclusive_text' => $faker->sentence(6),
                'property_price' => '$' . number_format($faker->numberBetween(100000, 2000000)),
                'property_rera_no' => 'RERA' . $faker->numerify('######'),
                'property_brochure' => 'img/no-property-image.jpeg',
                'property_video_url' => $faker->boolean(30) ? 'https://www.youtube.com/watch?v=' . $faker->regexify('[A-Za-z0-9]{11}') : null,
                'property_type' => $faker->randomElement($propertyTypes),
                'master_plan_image' => 'img/no-property-image.jpeg',
                'amenities' => json_encode([
                    'Swimming Pool' => $faker->boolean(40),
                    'Gym' => $faker->boolean(60),
                    'Parking' => $faker->boolean(90),
                    'Security' => $faker->boolean(95),
                    'Garden' => $faker->boolean(50),
                    'Elevator' => $faker->boolean(70),
                    'Air Conditioning' => $faker->boolean(80),
                    'Balcony' => $faker->boolean(60),
                    'Internet' => $faker->boolean(85),
                    'Laundry' => $faker->boolean(75),
                ]),
                'gallery_images_id' => null,
                'virtual_site_tour' => $faker->boolean(20) ? $faker->url : null,
                'builder_name' => $faker->company,
                'about_developer' => $faker->paragraph(5),
                'map_embed_url' => $faker->paragraph(1),
                'status' => $faker->boolean(80),
                'meta_title' => $faker->sentence(4),
                'meta_keywords' => implode(', ', $faker->words(8)),
                'meta_description' => $faker->paragraph(1),
                'social_meta_tags' => json_encode([
                    'og:title' => $faker->sentence(4),
                    'og:description' => $faker->paragraph(1),
                    'og:image' => 'img/no-property-image.jpeg',
                    'twitter:card' => 'summary_large_image',
                ]),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ]);

            // Create floor plans for each property (1-3 floor plans per property)
            $floorPlanCount = $faker->numberBetween(1, 3);
            for ($j = 1; $j <= $floorPlanCount; $j++) {
                PropertyFloorPlan::create([
                    'property_id' => $property->id,
                    'flat_type' => $faker->randomElement(['1BHK', '2BHK', '3BHK', '4BHK', 'Studio', 'Penthouse']),
                    'carpet_area' => $faker->numberBetween(500, 2000) . ' sq ft',
                    'flat_price' => '$' . number_format($faker->numberBetween(80000, 500000)),
                    'image' => 'img/no-property-image.jpeg',
                    'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                    'updated_at' => now(),
                ]);
            }

            // Create gallery images for each property (3-8 images per property)
            $galleryCount = $faker->numberBetween(3, 8);
            for ($k = 1; $k <= $galleryCount; $k++) {
                PropertyGalleryImages::create([
                    'property_id' => $property->id,
                    'image' => 'img/no-property-image.jpeg',
                    'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                    'updated_at' => now(),
                ]);
            }

            // Create slider images for each property (2-5 images per property)
            $sliderCount = $faker->numberBetween(2, 5);
            for ($l = 1; $l <= $sliderCount; $l++) {
                PropertySliderImages::create([
                    'property_id' => $property->id,
                    'image' => 'img/no-property-image.jpeg',
                    'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
