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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Banner title/heading');
            $table->text('description')->nullable()->comment('Banner description/subtitle');
            $table->string('image_url')->comment('Banner image path or URL');
            $table->string('button_text')->default('Contact Us Now')->comment('Call to action button text');
            $table->string('button_url')->default('/contact')->comment('Button link URL');
            $table->string('section_position')->default('home')->comment('Where to display: home, about, etc.');
            $table->integer('sort_order')->default(0)->comment('Display order');
            $table->boolean('status')->default(true)->comment('1=active, 0=inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
