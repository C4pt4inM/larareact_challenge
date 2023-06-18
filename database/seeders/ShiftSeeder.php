<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\HumanResources\Shifts\Shifts;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shifts::create([
            'name' => 'Morning',
            'start_time' => '09:00:00',
            'end_time' => '17:00:00',
            'duration' => '8 hours'
        ]);

        Shifts::create([
            'name' => 'Evening',
            'start_time' => '17:00:00',
            'end_time' => '01:00:00',
            'duration' => '8 hours'
        ]);

        Shifts::create([
            'name' => 'Night',
            'start_time' => '01:00:00',
            'end_time' => '09:00:00',
            'duration' => '8 hours'
        ]);
    }
}
