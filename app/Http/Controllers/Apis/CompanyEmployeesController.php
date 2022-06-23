<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyEmployeesController extends Controller
{
    public function getCompanyEmployees(){
        // ddd($id);
        $data = DB::table('employees')->select('companies.name as company_name', 'employees.name as employee_name', 'employees.email', 'employees.contact')
        ->join('companies', 'companies.id', '=', 'employees.company_id')
        // ->where('employees.company_id', '=', $id)
        ->get();
        // ddd($data);
        // die;
        // $res['name'] = $data->name;
        return $data;
    }
}
