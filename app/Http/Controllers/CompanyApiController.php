<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CompanyApiController extends Controller
{
    public function getCompanies(){
        $data = Company::all();
        return $data;
    }
}
