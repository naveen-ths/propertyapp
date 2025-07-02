<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Developer extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'logo',
        'location',
        'rating',
        'projects_count',
        'website_url',
        'phone',
        'email',
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
        'rating' => 'float',
        'projects_count' => 'integer',
        'sort_order' => 'integer'
    ];

    // Automatically generate slug when name is set
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($developer) {
            if (empty($developer->slug)) {
                $developer->slug = Str::slug($developer->name);
            }
        });
        
        static::updating(function ($developer) {
            if ($developer->isDirty('name') && empty($developer->slug)) {
                $developer->slug = Str::slug($developer->name);
            }
        });
    }

    // Scope for active developers
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    // Scope for ordering
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc')->orderBy('name', 'asc');
    }

    // Get full logo URL
    public function getLogoUrlAttribute()
    {
        if ($this->logo) {
            if (str_starts_with($this->logo, 'http')) {
                return $this->logo;
            }
            return asset('storage/' . $this->logo);
        }
        return null;
    }

    // Get star rating HTML
    public function getStarRatingAttribute()
    {
        $fullStars = floor($this->rating);
        $halfStar = ($this->rating - $fullStars) >= 0.5 ? 1 : 0;
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
