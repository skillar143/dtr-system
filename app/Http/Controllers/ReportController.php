<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TimeRecord;
use App\Models\Employee;



class ReportController extends Controller
{
    //
    public function index()
    {
    
        $attendance = TimeRecord::all()->sortByDesc('doa');
        return view('admin/report.index',compact('attendance'));

    } 
    public function filter(Request $request){
        //    

       // $dayOfTheWeek = \carbon\Carbon::parse()->format("y-m-d");
       // dd($request->month, $dayOfTheWeek);


        $date = \Carbon\Carbon::now("Asia/Manila")->format("Y-m-d");
       // $attendance = TimeRecord::all()->whereMonth('doa','='$request)->sortByDesc('doa');
        
        
      $attendance = TimeRecord::select(
          db::raw("employee_id"),
          db::raw("am_status"),
          db::raw("timeIn_am"),
          db::raw("timeOut_am"),
          db::raw("pm_status"),
          db::raw("timeIn_pm"),
          db::raw("timeOut_pm"),
          db::raw("doa"),
         
      )
      ->whereMonth('doa',$request->month)
      ->get();

   // $attendance = DB::table('time_records')->whereMonth('doa','2')->get();

          //dd($attendance);  
      return view('admin/report.index',compact('attendance'));

    }
}
