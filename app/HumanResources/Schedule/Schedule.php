<?php

namespace App\HumanResources\Schedule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\HumanResources\Shifts\Shifts;
use App\CompanyOrg\Employee\Employee;
use App\CompanyOrg\Location\Location;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'schedule';

    protected $fillable = ['employee_id', 'location_id', 'shift_id'];

    
    public function shifts  () {
        return $this->belongsTo(Shifts::class);
    }

    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    public function location() {
        return $this->belongsTo(Location::class);
    }
}
