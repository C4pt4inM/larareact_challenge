<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HumanResources\Attendance\Domain\Attendance;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function getAttendance(Request $request){
        $attendance = Attendance::where('user_id', $request->userId)->get();
        return $attendance;
    }

    public function getAllAttendance(){
        $attendance = Attendance::all();
        $jsonAtt = array();

        foreach ($attendance as $key => $entry) {
            $tempJs = [];
            $tempJs["id"] = $entry->id;
            $tempJs["employee"] = $entry->employee->user;
            $tempJs["schedule"] = $entry->schedule;
            $tempJs["check_in_time"] = $entry->check_in_time;
            $tempJs["check_out_time"] = $entry->check_out_time;
            $tempJs["hours"] = $entry->hours;
            $tempJs["created_at"] = $entry->created_at;
            $tempJs["updated_at"] = $entry->updated_at;

            $jsonAtt[] = $tempJs;
        }
        return $jsonAtt;
    }
}
