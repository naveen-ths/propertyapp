<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_title');
            $table->string('property_slug');
            $table->string('property_short_desc');
            $table->string('property_desc');
            $table->string('property_location');
            $table->string('property_price');
            $table->string('property_rera_no');
            $table->string('property_brochure');
            $table->string('property_video_url');
            $table->string('property_type');
            $table->string('master_plan_image');
            $table->string('amenities');
            $table->string('gallery_images');
            $table->string('virtual_site_tour');
            $table->string('builder_name');
            $table->string('about_developer');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
