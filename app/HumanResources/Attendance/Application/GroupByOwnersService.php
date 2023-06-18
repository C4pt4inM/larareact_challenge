<?php

namespace App\HumanResources\Attendance\Application;

use App\HumanResources\Attendance\Domain\Attendance;

class GroupByOwnersService {
    public function groupByOwners($array){
        $result = [];

        foreach ($array as $key => $value) {
            $result[$value][] = $key;
        }

        return $result;
    }
}
