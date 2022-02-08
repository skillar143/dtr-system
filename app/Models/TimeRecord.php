<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class TimeRecord extends Model
{
    use HasFactory;

    protected $fillable =['employee_id','am_status','timeIn_am','timeOut_am','pm_status','timeIn_pm','timeOut_pm','doa'];

    public function getFullname(){  
        $employee = Employee::where('id','=',$this->employee_id)->first();
        return $this->firstname.' '.$this->middlename.' '.$this->lastname;  
    }
}
