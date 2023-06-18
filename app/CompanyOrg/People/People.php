<?php

namespace App\CompanyOrg\People;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\CompanyOrg\Managers\Managers;
use App\CompanyOrg\Employee\Employee;

class People extends Model
{
    use HasFactory;

    protected $table = 'people';
    
    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    public function managers(){
        return $this->belongsTo(Managers::class);
    }
    
}
