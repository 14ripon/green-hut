<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            [
                'name'     => 'John Doe',
                'title'    => 'Managing Director',
                'status'   => 1,
            ],
            [
                'name'     => 'Jane Smith',
                'title'    => 'Project Manager',
                'status'   => 1,
            ],
            [
                'name'     => 'Alex Brown',
                'title'    => 'Senior Developer',
                'status'   => 1,
            ],
            [
                'name'     => 'ZHR pon',
                'title'    => 'Senior Developer',
                'status'   => 1,
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
