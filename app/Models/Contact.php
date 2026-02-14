<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'preferred_time',
        'status',
    ];

    use SoftDeletes;

    protected $dates = ['deleted_at']; // optional in Laravel 12 but safe
}
