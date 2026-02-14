<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'site_name','site_tagline','logo','logo_sticky','favicon',
        'footer_logo','phone','email','map_embed',
        'whatsapp','facebook','instagram','linkedin','youtube',
        'address','copyright_text',
        'meta_title','meta_description','meta_keyword'
    ];
}
