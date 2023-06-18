<?php

namespace App\HumanResources\Shifts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\HumanResources\Schedule\Schedule;

class Shifts extends Model {
    use HasFactory;
    
    public function schedule() {
        return $this->hasMany(Schedule::class);
    }
}
