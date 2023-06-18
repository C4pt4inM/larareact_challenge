<?php

namespace App\HumanResources\Attendance\Domain;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\HumanResources\Company\Company;

class Assets extends Model
{
    use HasFactory;
  
    public function company() {
        return $this->belongsTo(Company::class);
    }
    
}
