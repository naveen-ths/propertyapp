<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model
{

    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'properties';
    public $timestamps = true;
    protected $fillable = [
        'property_title',
        'property_slug',
        'property_logo',
        'property_favicon',
        'complete_costing_details',
        'property_color',
        'mobile_no',
        'pre_launch_text',
        'banner_content',
        'sidebar_content',
        'property_short_desc',
        'property_amenities',
        'property_footer_content',
        'property_desc',
        'property_highlights',
        'property_location',
        'by_developer_text',
        'location_text',
        'property_exclusive_text',
        'property_price',
        'property_rera_no',
        'property_brochure',
        'property_video_url',
        'property_type',
        'master_plan_image',
        'amenities',
        'gallery_images_id',
        'virtual_site_tour',
        'builder_name',
        'developer_logo',
        'about_developer',
        'map_embed_url',
        'status',
        'top_selling',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'social_meta_tags'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'amenities' => 'array',
        'status' => 'boolean',
        'top_selling' => 'boolean',
    ];

    /**
     * Get the images for the property.
     */
    public function slides(): HasMany
    {
        return $this->hasMany(PropertySliderImages::class);
    }

    public function gallery(): HasMany
    {
        return $this->hasMany(PropertyGalleryImages::class);
    }

    public function floors(): HasMany
    {
        return $this->hasMany(PropertyFloorPlan::class);
    }
}
