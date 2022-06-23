<?php

use App\Http\Controllers\AdminController;
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

Route::get('/dashboard', function () {
    return view('admin-side.layout');
    // return env('ASSESSMENT_ATTEMPTED_BY');
})->middleware('isLoggedin');
Route::get('/', function () {
    return route('dashboard');
})->middleware('isLoggedin');

Route::get('/admin/login', [AdminController::class, 'login'])->name('login')->middleware('isLoggedin');
Route::post('/admin/login', [AdminController::class, 'loginValidate'])->name('loginValidate')->middleware('isLoggedin');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('logout');


//company
Route::get('/admin/list-companies', [CompanyController::class, 'fetchData'])->name('list-companies')->middleware('isLoggedin');
Route::get('/admin/add-company', [CompanyController::class, 'addCompany'])->name('add-company')->middleware('isLoggedin');
Route::post('/admin/add-company', [CompanyController::class, 'create'])->middleware('isLoggedin');

//company-department
Route::get('/admin/add-department-to-company/{id}', [CompanyController::class, 'addCompanyDepartment'])->name('add-company-dept')->middleware('isLoggedin');
Route::post('/admin/add-department-to-company/{id}', [CompanyController::class, 'createCompanyDepartment'])->middleware('isLoggedin');
Route::get('/admin/list-company-department/{id}', [CompanyController::class, 'listCompanyDepartment'])->name('list-company-dept')->middleware('isLoggedin');
Route::get('/admin/add-employee-to-department/{id}', [EmployeeController::class, 'addEmployeeToCompanyDepartments'])->name('add-employee-dept')->middleware('isLoggedin');
Route::POST('/admin/add-employee-to-department/{id}', [EmployeeController::class, 'addEmployeeToCompanyDepartmentsPost'])->middleware('isLoggedin');

//departments
Route::get('/admin/list-departments', [DepartmentController::class, 'fetchDepartments'])->name('list-departments')->middleware('isLoggedin');
Route::get('/admin/add-department', [DepartmentController::class, 'addDepartment'])->name('add-department')->middleware('isLoggedin');
Route::post('/admin/add-department', [DepartmentController::class, 'create'])->middleware('isLoggedin');


//employees
Route::get('/admin/list-employees', [EmployeeController::class, 'fetchEmployees'])->name('list-employees')->middleware('isLoggedin');
Route::get('/admin/add-employee', [EmployeeController::class, 'addEmployee'])->name('add-employee');
Route::post('/admin/add-employee', [EmployeeController::class, 'create']);


//designations
Route::get('/admin/list-designation', [DesignationController::class, 'fetchDesignation'])->name('list-designation')->middleware('isLoggedin');
Route::get('/admin/add-designation', [DesignationController::class, 'addDesignation'])->name('add-designation')->middleware('isLoggedin');
Route::post('/admin/add-designation', [DesignationController::class, 'create'])->middleware('isLoggedin');
