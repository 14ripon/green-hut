<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OthersPageHero;

class OthersPageHeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'page_name' => 'our-team',
                'title'     => 'Meet Our Team',
                'sub_title'  => 'The people behind our success',
                'status'    => 1,
            ],
            [
                'page_name' => 'Privacy Policy',
                'title'     => 'Privacy Policy',
                'sub_title'  => 'The technology of tomorrow.',
                'status'    => 1,
            ],
            [
                'page_name' => 'Chairmans Message',
                'title'     => "Chairman's Message",
                'sub_title'  => 'Know more about our company',
                'status'    => 1,
            ],
            [
                'page_name' => 'Blog',
                'title'     => 'Blog',
                'sub_title'  => 'Insights, updates, and stories from our journey.',
                'status'    => 1,
            ],
            [
                'page_name' => 'Photo Gallery',
                'title'     => 'Photo Gallery',
                'sub_title'  => 'Every picture tells a story',
                'status'    => 1,
            ],
            [
                'page_name' => 'Video Gallery',
                'title'     => 'Video Gallery',
                'sub_title'  => 'Every Video tells a story',
                'status'    => 1,
            ],
            [
                'page_name' => 'Career',
                'title'     => 'Build Your Future With Us',
                'sub_title'  => 'Discover roles that match your talent and ambition at Green Hut Real Estate.',
                'status'    => 1,
            ],
            [
                'page_name' => 'Contact',
                'title'     => 'Contact Us',
                'sub_title'  => 'Reach out anytime — we’d love to connect.',
                'status'    => 1,
            ],
            [
                'page_name' => 'Landowner',
                'title'     => 'Land Owner Portal',
                'sub_title'  => 'Manage, List, and Grow the Value of Your Property',
                'status'    => 1,
            ],
        ];

        foreach ($data as $item) {
            OthersPageHero::create($item);
        }
    }
}
