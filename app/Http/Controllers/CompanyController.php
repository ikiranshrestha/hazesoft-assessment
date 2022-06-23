<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function index(){
        // $companies = Company::all();
        // return view('admin-side.company-list-companies');
        return view('admin-side.company.list-companies');
    }
    public function addCompany(){
        // $companies = Company::all();
        // return view('admin-side.company-list-companies');
        return view('admin-side.company.add-company');
    }

    public function create(Request $request){
        $rules = [
			'name' => 'required|string|min:5|max:255',
			'location' => 'required|string|min:5|max:255',
			'contact' => 'required|string|min:8|max:10'
		];
        $validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('insert')
			->withInput()
			->withErrors($validator);
		}else{
        $data['name'] = $request->name;
        $data['location'] = $request->location;
        $data['contact'] = $request->contact;
        $data['created_at'] = date('Y-m-d H:i:s');       
        
        
        $createCompany = DB::table('companies')->insert($data);
        if(!$createCompany)
        {
            return redirect()->back()->with('error', 'Something went wrong!');

        }else{
            return redirect()->route('add-company')->with('success', 'Company Created!');
        }   
        }

    }

    public function fetchData(){
        $companyData = DB::table('companies')->select('*')->get();
        return view('admin-side.company.list-companies',  ['companyList' => $companyData]);
    }

    public function addCompanyDepartment($id){
        $departmentData = DB::table('departments')->select('*')->get();
        $companyData = DB::table('companies')->where('id', $id)->first();

        return view('admin-side.company.company-department.add-company-department', ['departmentList' => $departmentData, 'CompanyName' => $companyData]);
    }

    public function createCompanyDepartment(Request $request){
        $data['company_id'] = $request->company_id;
        $data['department_id'] = $request->department;
        $data['created_at'] = date('Y-m-d H:i:s');

        $createCompany = DB::table('company_departments')->insert($data);
        if(!$createCompany)
        {
            return redirect()->back()->with('error', 'Something went wrong!');

        }else{
            return redirect()->route('add-company-dept', ['id'=> $data['company_id']])->with('success', 'Department Added to company!');
        }
    }

    public function listCompanyDepartment(){
        $companyDepartmentData = DB::table('company_departments')->select('*')
        ->join('companies', 'companies.id', '=', 'company_departments.company_id')
        ->join('departments', 'departments.id', '=', 'company_departments.department_id')
        ->get();
        return view('admin-side.company.company-department.list-company-departments', ['companyDepartmentList' => $companyDepartmentData]);
    }
        
}
