<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MeetingSection extends Model
{
    protected $fillable = [
        'title',
        'image',
        'bg_image',
        'map_embed',
        'status'
    ];
}
