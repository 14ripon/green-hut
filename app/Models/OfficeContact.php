<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OfficeContact extends Model
{
    protected $fillable = [
        'title',
        'address',
        'phone',
        'email',
        'map_url',
        'status'
    ];
}
