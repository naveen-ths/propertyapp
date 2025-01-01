<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model {

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
      'property_color',
      'banner_content',
      'property_highlights',
      'property_desc',
      'property_short_desc',
      'property_location',
      'property_price',
      'property_rera_no',
      'builder_name',
      'about_developer',
      'latitude',
      'longitude',
      'status',
      'meta_title',
      'meta_keywords',
      'meta_description',
    ];
    
    /**
     * Get the images for the property.
     */
    public function slides(): HasMany
    {
        return $this->hasMany(PropertySliderImages::class);
    }
}
