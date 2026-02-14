<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\MeetingSection;
use Illuminate\Database\Seeder;



class MeetingSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // If already exists, do nothing
        if (MeetingSection::count() > 0) {
            return;
        }

        MeetingSection::create([
            'title'     => 'Schedule a meeting',
            'image'     => null,
            'bg_image'  => null,
            'map_embed' => null,
            'status'    => 1,
        ]);
    }
}
