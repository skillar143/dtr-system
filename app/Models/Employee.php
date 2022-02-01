<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable =['firstname','lastname','middlename','dob','age','address','designation'];

    public function getFullname(){  return $this->firstname.' '.$this->middlename.' '.$this->lastname;  }

    
}
