<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HowItWork extends Model
{
    protected $fillable = [
        'icon',
        'title',
        'description',
        'sort_order',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean',
        'sort_order' => 'integer'
    ];

    // Scope for active records
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    // Scope for ordering
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc');
    }
}
