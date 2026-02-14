<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OfficeContact;

class OfficeContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offices = [
            [
                'title' => 'Head Office',
                'address'     => 'Dhaka, Bangladesh',
                'phone'       => '+880 1754720343',
                'email'       => 'info@company.com',
                'map_url'    => 'https://maps.google.com',
                'status'      => 1,
            ],
            [
                'title' => 'Branch Office',
                'address'     => 'Chattogram, Bangladesh',
                'phone'       => '+880 1754720343',
                'email'       => 'chittagong@company.com',
                'map_url'    => 'https://maps.google.com',
                'status'      => 1,
            ],
        ];

        foreach ($offices as $office) {
            OfficeContact::create($office);
        }
    }
}
