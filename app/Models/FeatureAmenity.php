<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class FeatureAmenity extends Model
{

    protected $fillable = [
        'name',
        'icon',
        'status',
    ];
}
