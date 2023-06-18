<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\CompanyOrg\Location\Location;


class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::create([
            'name' => 'Location 1',
            'company_id' => rand(1,3)
        ]);
        Location::create([
            'name' => 'Location 2',
            'company_id' => rand(1,3)
        ]);
        Location::create([
            'name' => 'Location 3',
            'company_id' => rand(1,3)
        ]);
    }
}
