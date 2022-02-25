<?php

namespace App\Http\Controllers;

use App\Models\TimeRecord;
use App\Models\Employee;
use Illuminate\Http\Request;

class TimeRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        return view('welcome');
    }

    public function attendance()
    {
        //
        $attendance = TimeRecord::all()->sortByDesc('doa');
        return view('admin/attendance.index',compact('attendance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
     
        $hour = \Carbon\Carbon::now("Asia/Manila")->format("g:i:s a");
        $period = \Carbon\Carbon::now("Asia/Manila")->format("a");
        $date = \Carbon\Carbon::now("Asia/Manila")->format("Y-m-d");
        $employees = Employee::select('employee_id')->get();
        $attendance = TimeRecord::where([['employee_id','=',$request->employeeid],['doa','=',$date]])->select('employee_id','pm_status')->get();
        $record = TimeRecord::where([['employee_id','=',$request->employeeid],['doa','=',$date]])->first();
     
        // dd($record->pm_status);

        if($employees->contains('employee_id',$request->employeeid)){

           if($period == "am"){
               if(!$attendance->contains('employee_id',$request->employeeid)){
                    
                    TimeRecord::create([
                    'employee_id' =>$request->employeeid,
                    'am_status' =>"TimeIn",
                    'timeIn_am' =>$hour,
                    'doa' =>$date
                    ]);
                    return redirect()->back()->with('success','Time In Morning'); 

               }
               if($attendance->contains('employee_id',$request->employeeid)){


                if($record->am_status == "TimeIn"){
                    TimeRecord::where('employee_id','=',$request->employeeid)->update([
                        'am_status' =>"TimeOut",
                        'timeOut_am' =>$hour
                    ]);
                    return redirect()->back()->with('success','Time Out Morning'); 
                }  

                return redirect()->back()->with('info','Already Timeout'); 
                    
                
                }  
            }
        
            if($period == "pm"){
                if(!$attendance->contains('employee_id',$request->employeeid)){
                    
                    TimeRecord::create([
                        'employee_id' =>$request->employeeid,
                        'timeIn_am' =>"N/A",
                        'timeOut_am' =>"N/A",
                        'am_status' =>"Absent",
                        'pm_status' =>"TimeIn",
                        'timeIn_pm' =>$hour,
                        'doa' =>$date
                        ]);
                        return redirect()->back()->with('success','Time In afternoon'); 
                }

               if($attendance->contains('employee_id',$request->employeeid)){ 
                    if($record->pm_status == "TimeIn"){
                        TimeRecord::where([['employee_id','=',$request->employeeid],['pm_status','=',"TimeIn"]])->update([
                            'pm_status' =>"TimeOut",
                            'timeOut_pm' =>$hour
                        ]);
                        return redirect()->back()->with('success','Time Out Afternoon');
                    }   
                    if($record->am_status == "Absent"){
                        TimeRecord::where([['employee_id','=',$request->employeeid],['pm_status','=',"TimeIn"]])->update([
                            'pm_status' =>"TimeIn",
                            'timeIn_pm' =>$hour
                        ]);
                        return redirect()->back()->with('success','Time In Afternoon'); 
                    }     

                    return redirect()->back()->with('info','Already Timeout'); 
                }  
 
            }
            return redirect()->back()->with('error','timout');
        }

        return redirect()->back()->with('error','Not Registerd');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TimeRecord  $timeRecord
     * @return \Illuminate\Http\Response
     */
    public function show(TimeRecord $timeRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimeRecord  $timeRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(TimeRecord $timeRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimeRecord  $timeRecord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimeRecord $timeRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimeRecord  $timeRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimeRecord $timeRecord)
    {
        //
    }
}
