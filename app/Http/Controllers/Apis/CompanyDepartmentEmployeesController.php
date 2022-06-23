<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyDepartmentEmployeesController extends Controller
{
    public function getCompanyDepartmentEmployees(){
        // ddd($id);
        $data = DB::table('employees')->select('companies.name as company_name', 'departments.name as department_name', 'employees.name as employee_name', 'employees.email', 'employees.contact')
        ->join('companies', 'companies.id', '=', 'employees.company_id')
        ->join('company_departments', 'companies.id', '=', 'employees.company_id')
        ->join('departments', 'company_departments.department_id', '=', 'departments.id')
        // ->where('employees.company_id', '=', $id)
        ->get();
        return $data;
    }
}
