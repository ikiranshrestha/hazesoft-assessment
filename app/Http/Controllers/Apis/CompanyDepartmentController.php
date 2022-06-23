<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\CompanyDepartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyDepartmentController extends Controller
{
    public function getCompanyDepartments(){
        $data = DB::table('company_departments')->select('companies.name as company_name', 'departments.name as department_name')
        ->join('companies', 'companies.id', '=', 'company_departments.company_id')
        ->join('departments', 'departments.id', '=', 'company_departments.department_id')
        // ->where('company_departments.company_id', '=', $id)
        ->get();
        // $send = [];
        // foreach($data as $d){
        //     $send['c_name'] = $d->company;
        // }
        return $data->toArray();
    }
}
