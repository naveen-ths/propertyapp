<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class InvestmentOpportunity extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'location',
        'property_type',
        'price_range',
        'investment_rating',
        'developer_name',
        'contact_phone',
        'contact_email',
        'property_url',
        'sort_order',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_title',
        'og_description',
        'og_image'
    ];

    protected $casts = [
        'status' => 'boolean',
        'investment_rating' => 'float',
        'sort_order' => 'integer'
    ];

    // Automatically generate slug when title is set
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($opportunity) {
            if (empty($opportunity->slug)) {
                $opportunity->slug = Str::slug($opportunity->title);
            }
        });
        
        static::updating(function ($opportunity) {
            if ($opportunity->isDirty('title') && empty($opportunity->slug)) {
                $opportunity->slug = Str::slug($opportunity->title);
            }
        });
    }

    // Scope for active opportunities
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    // Scope for ordering
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc')->orderBy('title', 'asc');
    }

    // Get full image URL
    public function getImageUrlAttribute()
    {
        if ($this->image) {
            if (str_starts_with($this->image, 'http')) {
                return $this->image;
            }
            return asset('storage/' . $this->image);
        }
        return asset('img/no-image.jpeg');
    }

    // Get star rating HTML
    public function getStarRatingAttribute()
    {
        $fullStars = floor($this->investment_rating);
        $halfStar = ($this->investment_rating - $fullStars) >= 0.5 ? 1 : 0;
        $emptyStars = 5 - $fullStars - $halfStar;
        
        $html = '';
        
        // Full stars
        for ($i = 0; $i < $fullStars; $i++) {
            $html .= '<i class="fa fa-star voted"></i>';
        }
        
        // Half star
        if ($halfStar) {
            $html .= '<i class="fa fa-star-half voted"></i>';
        }
        
        // Empty stars
        for ($i = 0; $i < $emptyStars; $i++) {
            $html .= '<i class="fa fa-star"></i>';
        }
        
        return $html;
    }
}
