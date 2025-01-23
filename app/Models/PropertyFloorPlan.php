<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyFloorPlan extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'property_id', 'image','flat_type','carpet_area','flat_price'
    ];
}
