<?php

namespace Database\Seeders;
use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::create([
            'site_name' => 'My Website',
            'phone' => '01754720343',
            'email' => 'zhripon97@gmail.com',
            'whatsapp' => 'https://wa.me/8801754720343',
            'facebook' => 'https://www.facebook.com/ripononly',
            
        ]);
    }
}
