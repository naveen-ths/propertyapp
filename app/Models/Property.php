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
      'mobile_no',
      'property_logo',
      'property_favicon',
      'property_color',
      'banner_content',
      'property_highlights',
      'property_footer_content',
      'map_embed_url',
      'sidebar_content',
      'property_brochure',
      'property_video_url',
      'virtual_site_tour',
      'property_desc',
      'property_short_desc',
      'property_location',
      'property_price',
      'pre_launch_text',
      'by_developer_text',
      'property_exclusive_text',
      'complete_costing_details',
      'property_amenities',
      'location_text',
      'property_rera_no',
      'builder_name',
      'about_developer',
      'master_plan_image',
      'status',
      'meta_title',
      'meta_keywords',
      'meta_description',
      'social_meta_tags'
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
