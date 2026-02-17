<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    use HasFactory;

    protected $fillable = [
        'locality',
        'address',
        'size_in_katha',
        'road_width',
        'category',
        'facing',
        'attractive_features',
        'owner_name',
        'contact_number',
        'email',
        'status'
    ];
}
