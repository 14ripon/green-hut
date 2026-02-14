<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScrollingText extends Model
{
    use HasFactory;

    protected $fillable = [
        'scrolling_text',
        'status',
    ];
}
