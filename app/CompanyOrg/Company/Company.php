<?php

namespace App\CompanyOrg\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\HumanResources\Person\Person;

class Company extends Model
{
    use HasFactory;

    protected $table = 'company';
    
    public function companyGroups(){
        return $this->hasMany(CompanyGroup::class);
    }

    public function locations(){
        return $this->hasMany(Location::class);
    }
    
}
