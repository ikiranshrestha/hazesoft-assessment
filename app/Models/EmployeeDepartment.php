<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDepartment extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id', 'department_id'];

    public function getEmployee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function getDepartment()
    {
        return $this->belongsTo(Department::class);
    }
}
