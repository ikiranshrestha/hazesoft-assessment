<?php

// use App\Http\Controllers\CompanyApiController;
// use App\Http\Controllers\CompanyApiController;

use App\Http\Controllers\Apis\CompanyController;
use App\Http\Controllers\Apis\CompanyDepartmentController;
use App\Http\Controllers\Apis\CompanyDepartmentEmployeesController;
use App\Http\Controllers\Apis\CompanyEmployeesController;
use App\Http\Controllers\Apis\EmployeeDetails;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/companies', [CompanyController::class, 'getCompanies']);
Route::get('/companyDepartments', [CompanyDepartmentController::class, 'getCompanyDepartments']);
Route::get('/companyEmployees', [CompanyEmployeesController::class, 'getCompanyEmployees']);
Route::get('/companyDepartmentEmployees', [CompanyDepartmentEmployeesController::class, 'getCompanyDepartmentEmployees']);
Route::get('/EmployeeDetails', [EmployeeDetails::class, 'getEmployeeDetails']);