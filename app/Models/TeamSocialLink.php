<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamSocialLink extends Model
{
    use HasFactory;

    protected $table = 'team_social_links';

    protected $fillable = [
        'team_id',
        'facebook',
        'linkedin',
        'whats_app',
        'phone',
        'status',
    ];

    /**
     * Social link belongs to Team
     */
    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id', 'id');
    }
}
