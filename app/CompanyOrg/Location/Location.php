<?php

namespace App\CompanyOrg\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\HumanResources\Shifts\Shifts;
use App\CompanyOrg\Company\Company;

class Location extends Model
{
    use HasFactory;
    
    public function shifts() {
        return $this->hasMany(Shifts::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }

}
