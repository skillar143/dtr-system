<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Designation;

class Employee extends Model
{
    use HasFactory;

    protected $fillable =['employee_id','firstname','lastname','middlename','dob','age','address','designation'];

    public function getFullname(){  return $this->firstname.' '.$this->middlename.' '.$this->lastname;  }
    
    public function getDesignation(){  
        
       if($designations = Designation::where('id','=',$this->designation)->first()){
        return $designations->designation;  
       }
       return "Unassigned";  
       
    }

    
}
