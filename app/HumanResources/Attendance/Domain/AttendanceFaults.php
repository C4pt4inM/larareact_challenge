<?php

namespace App\HumanResources\Attendance\Domain;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\HumanResources\Attendance\Domain\Attendance;
use App\CompanyOrg\Employee\Employee;

class AttendanceFaults extends Model {
    use HasFactory;


    public function employees() {
        return $this->belongsTo(Employee::class);
    }

    public function attendance() {
        return $this->belongsTo(Attendance::class);
    }

}
