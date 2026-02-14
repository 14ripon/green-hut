<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::insert([
            [
                'city' => 'Dhaka',
                'area' => 'Gulshan',
                'state' => 'Dhaka',
                'country' => 'Bangladesh',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city' => 'Dhaka',
                'area' => 'Banani',
                'state' => 'Dhaka',
                'country' => 'Bangladesh',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
