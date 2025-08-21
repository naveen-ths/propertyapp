<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $cities = [
            ['title' => 'Mumbai', 'slug' => 'mumbai', 'status' => true],
            ['title' => 'Pune', 'slug' => 'pune', 'status' => true],
            ['title' => 'Bangalore', 'slug' => 'bangalore', 'status' => true],
            ['title' => 'Delhi', 'slug' => 'delhi', 'status' => true],
            ['title' => 'Hyderabad', 'slug' => 'hyderabad', 'status' => true],
            ['title' => 'Chennai', 'slug' => 'chennai', 'status' => true],
            ['title' => 'Kolkata', 'slug' => 'kolkata', 'status' => true],
            ['title' => 'Ahmedabad', 'slug' => 'ahmedabad', 'status' => true],
            ['title' => 'Jaipur', 'slug' => 'jaipur', 'status' => true],
            ['title' => 'Surat', 'slug' => 'surat', 'status' => true],
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
