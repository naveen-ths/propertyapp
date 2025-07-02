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
            $table->string('property_title')->nullable();
            $table->string('property_slug')->unique();
            $table->string('property_logo')->nullable();
            $table->string('property_favicon')->nullable();
            $table->string('complete_costing_details')->nullable();
            $table->string('property_color', 16)->nullable();
            $table->string('mobile_no', 20)->nullable();
            $table->string('pre_launch_text')->nullable();
            $table->text('banner_content')->nullable();
            $table->text('sidebar_content')->nullable();
            $table->text('property_short_desc')->nullable();
            $table->text('property_amenities')->nullable();
            $table->text('property_footer_content')->nullable();
            $table->text('property_desc')->nullable();
            $table->text('property_highlights')->nullable();
            $table->string('property_location', 256)->nullable();
            $table->string('by_developer_text')->nullable();
            $table->text('location_text')->nullable();
            $table->string('property_exclusive_text')->nullable();
            $table->string('property_price', 256)->nullable();
            $table->string('property_rera_no', 256)->nullable();
            $table->string('property_brochure', 256)->nullable();
            $table->string('property_video_url', 256)->nullable();
            $table->string('property_type', 256)->nullable();
            $table->string('master_plan_image', 128)->nullable();
            $table->longText('amenities')->nullable();
            $table->integer('gallery_images_id')->nullable();
            $table->string('virtual_site_tour', 128)->nullable();
            $table->string('builder_name')->nullable();
            $table->longText('about_developer')->nullable();
            $table->text('map_embed_url')->nullable();
            $table->boolean('status');
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->mediumText('social_meta_tags')->nullable();
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
