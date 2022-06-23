<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function fetchEmployees(){
        return view('admin-side.employees.list-employees');
    }
    public function addEmployee(){
        $companyData = DB::table('companies')->get();
        $departmentData = DB::table('departments')->select('*')->get();
        $designationData = DB::table('designations')->select('*')->get();
        return view('admin-side.employees.add-employee', ['companyList' => $companyData,'departmentList' => $departmentData, 'designationList' => $designationData]);
    }

    public function create(Request $request){
        $rules = [
			'name' => 'required|string|min:5|max:255',
			'employee_number' => 'required|integer|min:1|digits_between: 1,9999',
			// 'contact' => 'required|string|min:8|max:10',
			// 'email' => 'required|string',
            // 'department_id' => 'required|integer',
            // 'designation_id' => 'required|integer'
		];

        $validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('insert')
			->withInput()
			->withErrors($validator);
		}else{
        $data['name'] = $request->name;
        $data['employee_number'] = $request->employee_number;
        $data['email'] = $request->email;
        $data['contact'] = $request->contact;
        $data['designation_id'] = $request->designation;
        $data['company_id'] = $request->company;
        $data['created_at'] = date('Y-m-d H:i:s');

        $last_id = DB::table('employees')->insertGetId($data);

        // $depts = $request->department;
        // foreach($depts as $dept){
        //     $data2['department_id'] = $dept;
        //     $data2['employee_id'] = $last_id;
        //     $data2['created_at'] = $data['created_at'];
        //     DB::table('employee_departments')->insert($data2);
        // }
        }

    }

    public function fetchDesignation(){
        $employeeData = DB::table('employees')->select('*')->get();

        return view('admin-side.departments.list-departments', ['employeeList' => $employeeData]);

    }

    public function addEmployeeToCompanyDepartments($cid){
        $employee = DB::table('employees')->select('*')->where('company_id', $cid)->get();
        $department = DB::table('company_departments')->select('*')
        ->join('departments', 'company_departments.department_id', '=', 'departments.id')
        ->where('company_departments.company_id', $cid)->get();

        // echo $department;
        // die;

        return view('admin-side.company.company-department.add-employee-to-department', ['employee' => $employee, 'department' => $department]);
    }

    public function addEmployeeToCompanyDepartmentsPost(Request $request){
        // $last_id = DB::table('employees')->insertGetId($data);

        $depts = $request->department;
        
        foreach($depts as $dept){
            $data['employee_id'] = $request->employee;
            $data['department_id'] = $dept;
            $data['created_at'] = date('Y-m-d H:i:s');
            DB::table('employee_departments')->insert($data);
        }
    }
}
