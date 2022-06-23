<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'contact', 'employee_number', 'designation_id'];

    public function getEmployeeDesignation(){
        return $this->belongsTo(Designation::class,'designation_id','id');
    }

    public function getEmployeeDepartments(){
        return $this->belongsToMany(Department::class,'employee_departments','employee_id','department_id');
    }
}
