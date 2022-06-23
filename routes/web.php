<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin-side.layout');
    // return env('ASSESSMENT_ATTEMPTED_BY');
});

//company
Route::get('/admin/list-companies', [CompanyController::class, 'fetchData'])->name('list-companies');
Route::get('/admin/add-company', [CompanyController::class, 'addCompany'])->name('add-company');
Route::post('/admin/add-company', [CompanyController::class, 'create']);

//company-department
Route::get('/admin/add-department-to-company/{id}', [CompanyController::class, 'addCompanyDepartment'])->name('add-company-dept');
Route::post('/admin/add-department-to-company/{id}', [CompanyController::class, 'createCompanyDepartment']);
Route::get('/admin/list-company-department', [CompanyController::class, 'listCompanyDepartment'])->name('list-company-dept');
Route::get('/admin/add-employee-to-department/{id}', [EmployeeController::class, 'addEmployeeToCompanyDepartments'])->name('add-employee-dept');
Route::POST('/admin/add-employee-to-department/{id}', [EmployeeController::class, 'addEmployeeToCompanyDepartmentsPost']);

//departments
Route::get('/admin/list-departments', [DepartmentController::class, 'fetchDepartments'])->name('list-departments');
Route::get('/admin/add-department', [DepartmentController::class, 'addDepartment'])->name('add-department');
Route::post('/admin/add-department', [DepartmentController::class, 'create']);


//employees
Route::get('/admin/list-employees', [EmployeeController::class, 'fetchEmployees'])->name('list-employees');
Route::get('/admin/add-employee', [EmployeeController::class, 'addEmployee'])->name('add-employee');
Route::post('/admin/add-employee', [EmployeeController::class, 'create']);


//designations
Route::get('/admin/list-designation', [DesignationController::class, 'fetchDesignation'])->name('list-designation');
Route::get('/admin/add-designation', [DesignationController::class, 'addDesignation'])->name('add-designation');
Route::post('/admin/add-designation', [DesignationController::class, 'create']);
// //add this 