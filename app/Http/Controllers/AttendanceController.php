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
        return $attendance;
    }
}
