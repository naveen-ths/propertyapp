<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class City extends Model
{

  use HasFactory;

  protected $fillable = [
    'title',
    'slug',
    'status'
  ];
  protected $casts = [
    'status' => 'boolean',
  ];

  /**
   * Boot the model.
   */
  protected static function boot()
  {
    parent::boot();

    static::creating(function ($city) {
      if (empty($city->slug)) {
        $city->slug = Str::slug($city->title);
      }
    });

    static::updating(function ($city) {
      if ($city->isDirty('title') && empty($city->slug)) {
        $city->slug = Str::slug($city->title);
      }
    });
  }

  /**
   * Scope to get only active cities
   */
  public function scopeActive($query)
  {
    return $query->where('status', true);
  }

  /**
   * Get properties for this city
   */
  public function properties()
  {
    return $this->hasMany(Property::class);
  }
}
