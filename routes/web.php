<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ChamberController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\TopbarController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Popular_BlogController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;




Route::get('/',[FrontendController::class,'index'])->name('front.home'); 
Route::get('/about',[FrontendController::class,'about'])->name('front.about'); 
Route::get('/blog',[FrontendController::class,'blog'])->name('front.blog'); 
Route::get('/expert',[FrontendController::class,'expert'])->name('front.expert'); 
Route::get('/service',[FrontendController::class,'service'])->name('front.service'); 
Route::get('/contact',[FrontendController::class,'contact'])->name('front.contact'); 
Route::get('/login_form',[FrontendController::class,'login_form'])->name('login.form'); 
Route::get('/registration',[FrontendController::class,'registration'])->name('registration'); 

Route::middleware('auth','role:admin')->group(function(){

    Route::get('admin/dashboard',[HomeController::class,'index'])->name('home');

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
    
    Route::get('dashboard/appointment',[AppointmentController::class,'index'])->name('appointment.home');
    Route::get('dashboard/appointment/add',[AppointmentController::class,'add'])->name('appointment.add');
    Route::post('dashboard/appointment/submit',[AppointmentController::class,'insert'])->name('appointment.submit');
    Route::get('dashboard/appointment/view/{id}',[AppointmentController::class,'view'])->name('appointment.view');
    Route::get('dashboard/appointment/edit/{id}',[AppointmentController::class,'edit'])->name('appointment.edit');
    Route::post('dashboard/appointment/update',[AppointmentController::class,'update'])->name('appointment.update');
    Route::get('dashboard/appointment/softdelete/{id}',[AppointmentController::class,'softdelete'])->name('appointment.softdelete');

    Route::get('dashboard/blog',[BlogController::class,'index'])->name('blog.home');
    Route::get('dashboard/blog/add',[BlogController::class,'add'])->name('blog.add');
    Route::post('dashboard/blog/submit',[BlogController::class,'insert'])->name('blog.submit');
    Route::get('dashboard/blog/view/{id}',[BlogController::class,'view'])->name('blog.view');
    Route::get('dashboard/blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
    Route::post('dashboard/blog/update',[BlogController::class,'update'])->name('blog.update');
    Route::get('dashboard/blog/softdelete/{id}',[BlogController::class,'softdelete'])->name('blog.softdelete');

    Route::get('dashboard/popular/blog',[Popular_BlogController::class,'index'])->name('popular-blog.home');
    Route::get('dashboard/popular/blog/add',[Popular_BlogController::class,'add'])->name('popular-blog.add');
    Route::post('dashboard/popular/blog/submit',[Popular_BlogController::class,'insert'])->name('popular-blog.submit');
    Route::get('dashboard/popular/blog/view/{id}',[Popular_BlogController::class,'view'])->name('popular-blog.view');
    Route::get('dashboard/popular/blog/edit/{id}',[Popular_BlogController::class,'edit'])->name('popular-blog.edit');
    Route::post('dashboard/popular/blog/update',[Popular_BlogController::class,'update'])->name('popular-blog.update');
    Route::get('dashboard/popular/blog/softdelete/{id}',[Popular_BlogController::class,'softdelete'])->name('popular-blog.softdelete');

    Route::get('dashboard/contact',[ContactController::class,'index'])->name('contact.home');
    Route::get('dashboard/contact/add',[ContactController::class,'add'])->name('contact.add');
    Route::post('dashboard/contact/submit',[ContactController::class,'insert'])->name('contact.submit');
    Route::get('dashboard/contact/view/{id}',[ContactController::class,'view'])->name('contact.view');
    Route::get('dashboard/contact/edit/{id}',[ContactController::class,'edit'])->name('contact.edit');
    Route::post('dashboard/contact/update',[ContactController::class,'update'])->name('contact.update');
    Route::get('dashboard/contact/softdelete/{id}',[ContactController::class,'softdelete'])->name('contact.softdelete');

    Route::get('admin/dashboard/topbar',[TopbarController::class,'edit'])->name('topbar');
    Route::post('admin/dashboard/topbar/update',[TopbarController::class,'update'])->name('topbar.update');

    Route::get('admin/dashboard/social',[SocialController::class,'edit'])->name('social');
    Route::post('admin/dashboard/social/update',[SocialController::class,'update'])->name('social.update');
    
    Route::get('admin/dashboard/service',[ServiceController::class,'edit'])->name('service');
    Route::post('admin/dashboard/service/update',[ServiceController::class,'update'])->name('service.update');

    Route::get('admin/dashboard/testimonial',[TestimonialController::class,'edit'])->name('testimonial');
    Route::post('admin/dashboard/testimonial/update',[TestimonialController::class,'update'])->name('testimonial.update');

    Route::get('admin/dashboard/footer',[FooterController::class,'edit']);
    Route::post('admin/dashboard/footer/update',[FooterController::class,'update'])->name('footer.update');

    
    
     

});

Route::middleware('auth','role:doctor')->group(function(){

});
Route::middleware('auth','role:patient')->group(function(){
    Route::get('dashboard',[PatientController::class,'index']);
});

require __DIR__.'/auth.php';
