<?php

namespace App\CompanyOrg\CompanyGroups;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\CompanyOrg\Company\Company;
use App\CompanyOrg\Employee\Employee;

class CompanyGroups extends Model
{
    use HasFactory;

  
    
    public function subGroups(){
        return $this->hasMany(CompanyGroup::class, 'parent_id');
    }

    public function parentGroup(){
        return $this->belongsTo(CompanyGroup::class, 'parent_id');
    }

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    
}
