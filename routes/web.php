<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;


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
Route::post('dashboard/user/softdelete{id}',[UserController::class,'softdelete'])->name('user.softdelete');

Route::get('dashboard/doctor',[DoctorController::class,'index'])->name('doctor.home');
Route::get('dashboard/doctor/add',[DoctorController::class,'add'])->name('doctor.add');
Route::post('dashboard/doctor/submit',[DoctorController::class,'insert'])->name('doctor.submit');
Route::get('dashboard/doctor/view/{id}',[DoctorController::class,'view'])->name('doctor.view');
Route::get('dashboard/doctor/edit/{id}',[DoctorController::class,'edit'])->name('doctor.edit');
Route::post('dashboard/doctor/update',[DoctorController::class,'update'])->name('doctor.update');


Route::get('/dashboard/department',[DepartmentController::class,'index'])->name('department.home');
Route::get('/dashboard/department/add',[DepartmentController::class,'add'])->name('department.add');
Route::post('/dashboard/department/submit',[DepartmentController::class,'insert'])->name('department.submit');
Route::get('dashboard/department/view/{id}',[DepartmentController::class,'view'])->name('department.view');
Route::get('dashboard/department/edit/{id}',[DepartmentController::class,'edit'])->name('department.edit');
Route::post('dashboard/department/update',[DepartmentController::class,'update'])->name('department.update');
require __DIR__.'/auth.php';