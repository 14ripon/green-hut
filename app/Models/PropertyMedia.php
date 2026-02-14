<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyMedia extends Model
{
    protected $fillable = ['property_id','image','alt_text','status'];

    public function property() {
        return $this->belongsTo(Property::class);
    }
}
