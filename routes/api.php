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
        
       // $allAttendance  = AttendanceService::getAllAttendance() ?? [];
        return response()->json(['success' => true]);
        //code...
    } catch (\Throwable $th) {
        return response()->json(['success' => false]);

    }
});

Route::get('/attendance', [AttendanceController::class, 'getAllAttendance']);


Route::get('/challenge2', function() {
    $arraydd = [];
    $arraydd[] = array("abc", "123", "xyz", "def", "456", "ghi", "jkl", "123", "789", "abc");
    $arraydd[] = array("a1b2c3", "xyz123", "def456", "789ghi", "jklmno", "a1b2c3", "xyz123");
    $arraydd[] = array("apple", "banana", "cherry", "123", "456", "orange", "grape", "apple");
    $arraydd[] = array("php", "javascript", "html", "css", "123", "456", "php");
    $arraydd[] = array("abc", "xyz", "def", "123", "789", "mno", "pqr", "stuv", "wxyz", "xyz");
    $arraydd[] = array("12345", "67890", "abcd", "efgh", "ijkl", "mnop", "67890");
    $arraydd[] = array("alpha", "beta", "gamma", "123", "456", "789", "abc", "gamma");
    $arraydd[] = array("php", "laravel", "javascript", "123", "456", "789", "php");
    $arraydd[] = array("1a2b3c", "xyz123", "def456", "789ghi", "jklmno", "pqrstu", "vwx", "xyz123");
    $arraydd[] = array("php", "html", "css", "123", "456", "789", "abcd", "php");

    $result = [];

    foreach ($arraydd as $key => $value) {
        $result[] = array_count_values($value);
    }

    // return $result;
    return response()->json(['success' => true, 'result' => $result, 'image' => URL::to('/challenge2.png') ]);

});

Route::get('/challenge4', function (){
    $target = ["insurance.txt" => "Company A", "letter.docx" => "Company A", "Contract.docx" => "Company B"];
    $resultArray = [];

    foreach ($target as $key => $value) {
        $resultArray[$value][] = $key;
    }

    return $resultArray;
});