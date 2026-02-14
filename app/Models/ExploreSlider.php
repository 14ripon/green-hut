<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExploreSlider extends Model
{
    protected $fillable = [
        'title',
        'media_type',
        'media_path',
        'status',
        'sort_order',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
