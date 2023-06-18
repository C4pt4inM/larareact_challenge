<?php

namespace App\CompanyOrg\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\HumanResources\Schedule\Schedule;
use App\CompanyOrg\Employee\Employee;
use App\HumanResources\Attendance\Domain\Attendance;
use App\HumanResources\Attendance\Domain\AttendanceFaults;
use App\Models\User;



class Employee extends Model
{
    use HasFactory;

    protected $table = 'employee';


    public function schedule() {
        return $this->hasMany(Schedule::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
    
    public function people() {
        return $this->hasMany(Person::class);
    }

    public function companyGroups() {
        return $this->hasMany(CompanyGroup::class);
    }
    public function companyGroup() {
        return $this->belongsTo(CompanyGroup::class);
    }

    public function attendance() {
        return $this->hasMany(Attendance::class);
    }

    public function attendanceFaults() {
        return $this->hasMany(AttendanceFaults::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
