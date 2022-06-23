<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DesignationController extends Controller
{
    public function addDesignation(){
        return view('admin-side.designation.add-designation');
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
        
        DB::table('designations')->insert($data);    
        }

    }

    
    public function fetchDesignation(){
        $departmentData = DB::table('departments')->select('*')->get();

        return view('admin-side.departments.list-departments', ['departmentList' => $departmentData]);

    }
}
