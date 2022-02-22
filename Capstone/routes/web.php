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

Route::get('/', function(){
    return view('unc');
});
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
    ->group(function (){
        Route::post('/import','import')->name('.import');
        Route::get('/students','showStudents')->name('.students');
        Route::get('/profile','showProfile')->name('.profile');
        Route::get('/statistics','showStats')->name('.stats');
        //Route::resource('/', AdminController::class);

        //route resource
        Route::get('{admin}', 'show')->name('.show');
        Route::get('', 'index')->name('.index');
        Route::post('', 'store')->name('.store');
        Route::post('{admin}', 'update')->name('.update');
        //Route::resource('',AdminController::class)->except('destroy');


        //scholarships
        Route::get('/scholarships','showScholarships')->name('.scholarhips');
        Route::post('/scholarships/{scholarship}/approve', 'approve')->name('.aprrove');
        Route::post('/scholarships/{scholarship}/decline', 'decline')->name('.decline');


        //loans
        Route::get('/loans','showLoans')->name('.loans');
        Route::post('/loans/{loan}/approve', 'approveLoan')->name('.aprroveLoan');
        Route::post('/loans/{loan}/decline', 'declineLoan')->name('.declineLoan');



        //discounts
        Route::get('/discounts','showDiscounts')->name('.discounts');
        Route::post('/discounts/{discount}/approve', 'approveDiscount')->name('.aprroveDiscount');
        Route::post('/discounts/{discount}/decline', 'declineDiscount')->name('.declineDiscount');
    });

Route::prefix('student')
    ->as('student')
    ->controller(StudentController::class)
    ->group(function(){
        Route::post('/{student}/avatar','updateAvatar')->name('.updateAvatar');
        Route::post('/{student}/update','updateProfile')->name('.studentUpdate');

        
        Route::get('/{student}', 'show')->name('.show');
        Route::get('/{student}/edit','edit')->name('.edit');
        Route::get('/', 'index')->name('.index');
        Route::post('/', 'store')->name('.store');

    });


Route::prefix('employee')
->as('employee')
->controller(EmployeeController::class)
->group(function (){
        Route::get('/{employee}', 'show')->name('.show');
        Route::get('/{employee}/edit','edit')->name('.edit');
        Route::get('/', 'index')->name('.index');
        Route::post('/', 'store')->name('.store');
        Route::post('/{employee}', 'update')->name('.update');
        

        //scholarships
        Route::get('/scholarships','showScholarships')->name('.scholarhips');
        Route::post('/scholarships/{scholarship}/approve', 'approve')->name('.aprrove');
        Route::post('/scholarships/{scholarship}/decline', 'decline')->name('.decline'); 

        //loans
        Route::get('/loans','showLoans')->name('.loans');
        Route::post('/loans/{loan}/approve', 'approveLoan')->name('.aprroveLoan');
        Route::post('/loans/{loan}/decline', 'declineLoan')->name('.declineLoan'); 

        //discounts
        Route::get('/discounts','showDiscounts')->name('.discounts');
        Route::post('/discounts/{discount}/approve', 'approveDiscount')->name('.aprroveDiscount');
        Route::post('/discounts/{discount}/decline', 'declineDiscount')->name('.declineDiscount');
    });




