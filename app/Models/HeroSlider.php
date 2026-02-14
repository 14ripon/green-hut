<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSlider extends Model
{
    protected $fillable = [
        'title',
        'image',
        'alt_text',
        'is_active'
    ];
    protected $casts = [
        'is_active' => 'boolean',
    ];
}
