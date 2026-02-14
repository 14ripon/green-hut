<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChairmanMessages extends Model
{
    protected $fillable = [
        'name',
        'designation',
        'photo',
        'message',
        'status'
    ];
}
