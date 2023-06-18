<?php

namespace App\HumanResources\Attendance\Application;

use App\HumanResources\Attendance\Domain\Attendance;

class AttendanceService {
    public function checkIn($userId){
        $attendance = new Attendance();
        $attendance->employee_id = $userId;
        $attendance->check_in_time = \Carbon\Carbon::now()->timestamp;
        $attendance->save();

        return $attendance;
    }
    public function checkOut($userId){
        $attendance = Attendance::where('employee_id', $userId)->whereNotNull('check_in_time')->whereNull('check_out_time')->first();
        if($attendance) {
            $attendance->check_out_time = \Carbon\Carbon::now()->timestamp;
            $attendance->save();
        }

        return $attendance;
    }

}
