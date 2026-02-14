<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $fillable = [
        'name',
        'title',
        'image',
        'alt_text',
        'status',
    ];

    /**
     * One Team has one Social Link
     */
    public function social()
    {
        return $this->hasOne(TeamSocialLink::class, 'team_id', 'id');
    }
}
