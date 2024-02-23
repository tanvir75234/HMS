<?php

use App\Http\Controllers\ChamberController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PharmacyController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard',[HomeController::class,'index'])->name('home');


Route::get('dashboard/user',[UserController::class,'index'])->name('user.home');
Route::get('dashboard/user/add',[UserController::class,'add'])->name('user.add');
Route::get('dashboard/user/view/{id}',[UserController::class,'view'])->name('user.view');
Route::get('dashboard/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::post('dashboard/user/submit',[UserController::class,'insert'])->name('user.submit');
Route::post('dashboard/user/update',[UserController::class,'update'])->name('user.update');
Route::get('dashboard/user/softdelete/{id}',[UserController::class,'softdelete'])->name('user.softdelete');

Route::get('dashboard/doctor',[DoctorController::class,'index'])->name('doctor.home');
Route::get('dashboard/doctor/add',[DoctorController::class,'add'])->name('doctor.add');
Route::post('dashboard/doctor/submit',[DoctorController::class,'insert'])->name('doctor.submit');
Route::get('dashboard/doctor/view/{id}',[DoctorController::class,'view'])->name('doctor.view');
Route::get('dashboard/doctor/edit/{id}',[DoctorController::class,'edit'])->name('doctor.edit');
Route::post('dashboard/doctor/update',[DoctorController::class,'update'])->name('doctor.update');
Route::get('dashboard/doctor/softdelete/{id}',[DoctorController::class,'softdelete'])->name('doctor.softdelete');


Route::get('/dashboard/department',[DepartmentController::class,'index'])->name('department.home');
Route::get('/dashboard/department/add',[DepartmentController::class,'add'])->name('department.add');
Route::post('/dashboard/department/submit',[DepartmentController::class,'insert'])->name('department.submit');
Route::get('dashboard/department/view/{id}',[DepartmentController::class,'view'])->name('department.view');
Route::get('dashboard/department/edit/{id}',[DepartmentController::class,'edit'])->name('department.edit');
Route::post('dashboard/department/update',[DepartmentController::class,'update'])->name('department.update');
Route::get('dashboard/department/softdelete/{id}',[DepartmentController::class,'softdelete'])->name('department.softdelete');

Route::get('/dashboard/staff',[StaffController::class,'index'])->name('staff.home');
Route::get('/dashboard/staff/add',[StaffController::class,'add'])->name('staff.add');
Route::post('/dashboard/staff/submit',[StaffController::class,'insert'])->name('staff.submit');
Route::get('dashboard/staff/view/{id}',[StaffController::class,'view'])->name('staff.view');
Route::get('dashboard/staff/edit/{id}',[StaffController::class,'edit'])->name('staff.edit');
Route::post('dashboard/staff/update',[StaffController::class,'update'])->name('staff.update');
Route::get('dashboard/staff/softdelete/{id}',[StaffController::class,'softdelete'])->name('staff.softdelete');

Route::get('dashboard/chamber',[ChamberController::class,'index'])->name('chamber.home');
Route::get('dashboard/chamber/add',[ChamberController::class,'add'])->name('chamber.add');
Route::post('dashboard/chamber/submit',[ChamberController::class,'insert'])->name('chamber.submit');
Route::get('dashboard/chamber/view/{id}',[ChamberController::class,'view'])->name('chamber.view');
Route::get('dashboard/chamber/edit/{id}',[ChamberController::class,'edit'])->name('chamber.edit');
Route::post('dashboard/chamber/update',[ChamberController::class,'update'])->name('chamber.update');
Route::get('dashboard/chamber/softdelete/{id}',[ChamberController::class,'softdelete'])->name('chamber.softdelete');

Route::get('dashboard/pharmacy',[PharmacyController::class,'index'])->name('pharmacy.home');
Route::get('dashboard/pharmacy/add',[PharmacyController::class,'add'])->name('pharmacy.add');
Route::post('dashboard/pharmacy/submit',[PharmacyController::class,'insert'])->name('pharmacy.submit');
Route::get('dashboard/pharmacy/view/{id}',[PharmacyController::class,'view'])->name('pharmacy.view');
Route::get('dashboard/pharmacy/edit/{id}',[PharmacyController::class,'edit'])->name('pharmacy.edit');
Route::post('dashboard/pharmacy/update',[PharmacyController::class,'update'])->name('pharmacy.update');
Route::get('dashboard/pharmacy/softdelete/{id}',[PharmacyController::class,'softdelete'])->name('pharmacy.softdelete');

require __DIR__.'/auth.php';
