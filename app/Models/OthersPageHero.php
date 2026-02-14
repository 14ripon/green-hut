<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OthersPageHero extends Model
{
    use HasFactory;

    protected $table = 'others_page_hero';

    protected $fillable = [
        'sub_title',
        'title',
        'image',
        'page_name',
        'status',
    ];
}
