<?php

namespace App\HumanResources\Attendance\Domain;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\HumanResources\Schedule\Schedule;
use App\CompanyOrg\Employee\Employee;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendance';

    public $fillable = ['employee_id', 'check_in_time', 'check_out_time', 'hours', 'schedule_id'];
    
    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }

    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    
}
