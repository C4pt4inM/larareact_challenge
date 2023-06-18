<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\CompanyOrg\Employee\Employee;


class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i < 21 ; $i++) { 
            # code...
            Employee::create([
                'user_id' => $i,
            ]);
        }
    }
}
