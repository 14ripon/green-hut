<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'thumbnail',
        'video_url',
        'testimonial_subject',
        'testimonial_description',
        'rating',
        'status',
    ];
}
