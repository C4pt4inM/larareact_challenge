<?php

namespace App\Imports;

use App\HumanResources\Attendance\Domain\Attendance;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AttendanceImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        return new Attendance([
           'employee_id'     => $row['employee_id'],
           'check_in_time'    => $row['check_in_time'], 
           'check_out_time'    => $row['check_out_time'], 
           'hours'    => $row['hours'], 
           'schedule_id'    => $row['schedule_id'], 
        ]);
    }
}
