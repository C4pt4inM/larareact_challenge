<?php

namespace App\CompanyOrg\Managers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\CompanyOrg\Company\Company;
use App\CompanyOrg\Person\Person;

class Managers extends Model
{
    use HasFactory;

    
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function people(){
        return $this->hasMany(Person::class);
    }
    
}
