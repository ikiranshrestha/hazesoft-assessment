<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    public function addDepartment(){
        return view('admin-side.departments.add-department');
    }

    public function create(Request $request){
        $rules = [
			'name' => 'required|string|min:5|max:255'
		];
        $validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('insert')
			->withInput()
			->withErrors($validator);
		}else{
        $data['name'] = $request->name;
        $data['created_at'] = date('Y-m-d H:i:s');       
        
        DB::table('departments')->insert($data);    
        }

    }

    
    public function fetchDepartments(){
        $departmentData = DB::table('departments')->select('*')->get();

        return view('admin-side.departments.list-departments', ['departmentList' => $departmentData]);

    }
}
