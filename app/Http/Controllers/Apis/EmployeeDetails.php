<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeDetails extends Controller
{
    public function getEmployeeDetails(){
        $data = DB::table('employees')->select('employees.name as employee_name', 'employees.email', 'employees.contact', 'companies.name as company_name', 'departments.name as department_name')
        ->join('companies', 'companies.id', '=', 'employees.company_id')
        ->join('company_departments', 'companies.id', '=', 'company_departments.company_id')
        ->join('departments', 'departments.id', '=', 'company_departments.department_id')
        // ->where('company_departments.company_id', '=', $id)
        ->get();
        // $send = [];
        // foreach($data as $d){
        //     $send['c_name'] = $d->company;
        // }
        return $data;
    }
}
