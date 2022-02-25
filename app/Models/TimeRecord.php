<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use Carbon\Carbon;
class TimeRecord extends Model
{
    use HasFactory;

    protected $fillable =['employee_id','am_status','timeIn_am','timeOut_am','pm_status','timeIn_pm','timeOut_pm','doa'];

    public function getFullname(){  

        $employee = Employee::where('employee_id','=',$this->employee_id)->select('firstname','middlename','lastname')->first();

        return $employee->firstname.' '.$employee->middlename.' '.$employee->lastname;  
    }

    public function getDay(){ 
        $weekMap = [
        0 => 'SUNDAY',
        1 => 'MONDAY',
        2 => 'TUESDAY',
        3 => 'WEDNESDAY',
        4 => 'THURSDAY',
        5 => 'FRIDAY',
        6 => 'SATURDAY',
    ];
    $dayOfTheWeek = Carbon::parse($this->doa)->dayOfWeek;
    $weekday = $weekMap[$dayOfTheWeek];

    $today = Carbon::now('Asia/Manila')->dayOfWeek;

    if($today == $dayOfTheWeek && $this->doa == Carbon::now('Asia/Manila')->format("Y-m-d")){
        return "TODAY";
    }
        return $weekday;  
    }
}
