<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Imports\AttendanceImport;
use Maatwebsite\Excel\Facades\Excel;
use App\HumanResources\Attendance\Application\AttendanceService;

use App\Http\Controllers\AttendanceController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/uploadExcel', function(Request $request) {
    try {
        $fileImported = Excel::import(new AttendanceImport, $request->file('file')->store('temp'));
        // $fileImported =  $request->file('file')->store('temp');
        
        $allAttendance  = AttendanceService::getAllAttendance() ?? [];
        return response()->json(['success' => true, 'att' => $allAttendance , 'dd' => $fileImported]);
        //code...
    } catch (\Throwable $th) {
        return response()->json(['success' => false, 'att' => [], 'err' => $th->getMessage() ]);

    }
});

Route::get('/attendance', [AttendanceController::class, 'getAllAttendance']);

