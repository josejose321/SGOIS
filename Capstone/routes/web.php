<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [AdminController::class,'home'])->name('admin.home');
Route::get('test', function(){

    return view('test');
});

Auth::routes();
Route::get('/Home',[HomeController::class,'index'])->name('index');
Auth::routes();

//admin
// Route::post('/admin/import',[AdminController::class,'import'])->name('admin.import');
// Route::get('admin/scholarships',[AdminController::class,'showScholarships'])->name('admin.scholarhips');
// Route::get('admin/loans',[AdminController::class,'showLoans'])->name('admin.loans');
// Route::get('admin/discounts',[AdminController::class,'showDiscounts'])->name('admin.discounts');
// Route::get('admin/students',[AdminController::class,'showStudents'])->name('admin.students');
// Route::get('admin/profile',[AdminController::class,'showProfile'])->name('admin.profile');
// Route::get('admin/statistics',[AdminController::class,'showStats'])->name('admin.stats');
// Route::resource('/admin', AdminController::class);



//student
// Route::post('/student/{student}/avatar',[StudentController::class,'updateAvatar'],)->name('Student.updateAvatar');
// Route::post('/student/{student}/update', [StudentController::class,'updateProfile'])->name('update.student');
// Route::resource('/student', StudentController::class);

Route::resource('student/scholarship', ScholarshipController::class);


//error


Route::prefix('admin')
    ->as('admin')
    ->controller(AdminController::class)
    // ->middleware()
    ->group(function (){
        //scholarships
        Route::get('/scholarships','showScholarships')->name('.scholarhips');
        Route::post('/scholarships/{scholarship}/verify', 'verifyScholarship')->name('.scholarship.approve');
        Route::post('/scholarships/{scholarship}/delete', 'scholarshipDelete')->name('.scholarship.delete');

        //loans
        Route::get('/loans','showLoans')->name('.loans');
        Route::post('/loans/{loan}/approve', 'approveLoan')->name('.aprroveLoan');
        Route::post('/loans/{loan}/decline', 'declineLoan')->name('.declineLoan');
        //discounts
        Route::get('/discounts','showDiscounts')->name('.discounts');

        Route::post('/import','import')->name('.import');
        Route::get('/students','showStudents')->name('.students');
        Route::get('/profile','showProfile')->name('.profile');
        Route::post('/profile{admin}','updateProfile')->name('.update');


        //announcement
        Route::post('/announcements/{admin}', 'storeAnnounce')->name('.announce.store');
        Route::get('/announcements', 'showAnnounce')->name('.announce.show');
        Route::post('/announcements/{announcement}/update', 'updateAnnounce')->name('.announce.update');
        Route::get('/announcements/{announcement}', 'deleteAnnounce')->name('.announce.delete');


        Route::get('/statistics','showStats')->name('.stats');
        //Route::resource('/', AdminController::class);
        //route resource
        Route::get('/{admin}', 'show')->name('.show');
        Route::get('/', 'index')->name('.index');
        Route::post('/', 'store')->name('.store');
        Route::post('/', 'storeStudent')->name('.student.store');
        //Route::resource('',AdminController::class)->except('destroy');

    });

Route::prefix('student')
    ->as('student')
    ->controller(StudentController::class)
    ->group(function(){
        Route::post('/{student}/avatar','updateAvatar')->name('.updateAvatar');
        Route::post('/{student}/update','updateProfile')->name('.studentUpdate');
        Route::get('/scholarships','showScholarships')->name('.scholarships');
        Route::post('/{student}/scholarship','applyScholarship')->name('.apply.scholarship');
        Route::post('/{student}/discount','applyDiscount')->name('.apply.discount');
        Route::post('/{student}/loan','applyLoan')->name('.apply.loan');

        Route::get('/{student}', 'show')->name('.show');
        Route::get('/{student}/edit','edit')->name('.edit');
        Route::get('/', 'index')->name('.index');
        
    });


Route::prefix('employee')
->as('employee')
->controller(EmployeeController::class)
->group(function (){
        //scholarships
        Route::get('/scholarships','showScholarships')->name('.scholarhips');
        Route::post('/scholarships/{scholarship}/approve', 'approve')->name('.scholarship.aprrove');
        Route::post('/scholarships/{scholarship}/decline', 'decline')->name('.scholarship.decline');
         
        //loans
        Route::get('/loans','showLoans')->name('.loans');
        Route::post('/loans/{loan}/approve', 'approveLoan')->name('.aprroveLoan');
        Route::post('/loans/{loan}/decline', 'declineLoan')->name('.declineLoan'); 
        //discounts
        Route::get('/discounts','showDiscounts')->name('.discounts');
        
        Route::get('/profile', 'show')->name('.show');
        Route::get('/{employee}/edit','edit')->name('.edit');
        Route::get('/', 'index')->name('.index');
        Route::post('/', 'store')->name('.store');
        Route::post('/{employee}', 'update')->name('.update');  
    });





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
