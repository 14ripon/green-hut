<?php


namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\PageSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\SiteSettingSeeder;
use Database\Seeders\MeetingSectionSeeder;
use Database\Seeders\ChairmanMessagesSeeder;
use Database\Seeders\LocationSeeder;
use Database\Seeders\OthersPageHeroSeeder;
use Database\Seeders\TeamsSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '11111111',
        ]);

        // Static Pages Seeder
        $this->call([
            PageSeeder::class,
            CategorySeeder::class,
            SiteSettingSeeder::class,
            MeetingSectionSeeder::class,
            ChairmanMessagesSeeder::class,
            LocationSeeder::class,
            OthersPageHeroSeeder::class,
            TeamsSeeder::class,
            OfficeContactsSeeder::class,

        ]);

    }
}
