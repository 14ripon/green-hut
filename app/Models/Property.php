<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    const STATUS_DRAFT     = 0;
    const STATUS_ACTIVE    = 1;
    const STATUS_UPCOMING  = 2;
    const STATUS_ONGOING   = 3;
    const STATUS_COMPLETED = 4;

    public static function statusLabels()
    {
        return [
            self::STATUS_DRAFT     => 'Draft',
            self::STATUS_ACTIVE    => 'Active',
            self::STATUS_UPCOMING  => 'Upcoming',
            self::STATUS_ONGOING   => 'Ongoing',
            self::STATUS_COMPLETED => 'Completed',
        ];
    }

    public function getStatusTextAttribute()
    {
        return self::statusLabels()[$this->status] ?? 'Unknown';
    }


    protected $fillable = [
        'location_id','title','land_area','no_of_floors',
        'apartment_per_floor','apartment_size','bedrooms','bathrooms',
        'launch_date_note','collection','status'
    ];

    public function location() {
        return $this->belongsTo(Location::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class, 'property_categories');
    }

    public function media() {
        return $this->hasMany(PropertyMedia::class);
    }
}
