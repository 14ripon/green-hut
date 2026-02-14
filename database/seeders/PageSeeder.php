<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;
class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::insert([
            [
                'page_name' => 'terms-and-conditions',
                'title' => 'Terms and Conditions',
                'content' => '
                    <p>By accessing this website, you agree to be bound by these terms and conditions.</p>
                    <p>We reserve the right to update these terms at any time without prior notice.</p>
                ',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_name' => 'privacy-policy',
                'title' => 'Privacy Policy',
                'content' => '
                    <p>Your privacy is important to us.</p>
                    <p>We do not share your personal information with third parties without consent.</p>
                ',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
