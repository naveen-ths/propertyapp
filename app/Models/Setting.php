<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model {

  protected $fillable = [
      'key',
      'value',
      'type',
      'group',
      'label',
      'description',
      'sort_order'
  ];
  protected $casts = [
      'sort_order' => 'integer'
  ];

  // Scope for ordering
  public function scopeOrdered($query) {
    return $query->orderBy('sort_order', 'asc')->orderBy('label', 'asc');
  }

  // Scope for grouping
  public function scopeByGroup($query, $group) {
    return $query->where('group', $group);
  }

  // Get setting value by key
  public static function get($key, $default = null) {
    return Cache::rememberForever("setting.{$key}", function () use ($key, $default) {
              $setting = self::where('key', $key)->first();
              return $setting ? $setting->value : $default;
            });
  }

  // Set setting value
  public static function set($key, $value) {
    $setting = self::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
    );

    Cache::forget("setting.{$key}");
    return $setting;
  }

  // Clear all settings cache
  public static function clearCache() {
    $keys = self::pluck('key')->toArray();
    foreach ($keys as $key) {
      Cache::forget("setting.{$key}");
    }
  }

  // Boot method to clear cache when settings are updated
  protected static function boot() {
    parent::boot();

    static::saved(function ($setting) {
      Cache::forget("setting.{$setting->key}");
    });

    static::deleted(function ($setting) {
      Cache::forget("setting.{$setting->key}");
    });
  }
}
