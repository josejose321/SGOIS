<?php

use App\Http\Controllers\AdminController;
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


Route::post('/admin/import',[AdminController::class,'import'])->name('Admin.import');
Route::get('admin/scholarships',[AdminController::class,'showScholarships'])->name('Admin.scholarhips');
Route::get('admin/loans',[AdminController::class,'showLoans'])->name('Admin.loans');
Route::get('admin/discounts',[AdminController::class,'showDiscounts'])->name('Admin.discounts');
Route::get('admin/students',[AdminController::class,'showStudents'])->name('Admin.students');
Route::get('admin/profile',[AdminController::class,'showProfile'])->name('Admin.profile');
Route::get('admin/statistics',[AdminController::class,'showStats'])->name('Admin.stats');
Route::resource('/admin', AdminController::class);




Route::post('/student/{student}/avatar',[StudentController::class,'updateAvatar'],)->name('Student.updateAvatar');
Route::post('/student/{student}/update', [StudentController::class,'updateProfile'])->name('update.student');
Route::resource('/student', StudentController::class);

Route::resource('student/scholarship', ScholarshipController::class);


//error


// Route::prefix('Admin')
//     ->as('Admin')
//     ->controller(AdminController::class)
//     ->group(function (){
//         Route::post('import','import')->name('Admin.import');
//         Route::get('scholarships','showScholarships')->name('Admin.scholarhips');
//         Route::get('loans','showLoans')->name('Admin.loans');
//         Route::get('discounts','showDiscounts')->name('Admin.discounts');
//         Route::get('students','showStudents')->name('Admin.students');
//         Route::get('profile','showProfile')->name('Admin.profile');
//         Route::get('statistics','showStats')->name('Admin.stats');

//         //route resource
//         Route::get('{Admin}', 'show')->name('Admin.show');
//         Route::get('', 'index')->name('Admin.index');
//         Route::post('', 'store')->name('Admin.store');
//         Route::post('{Admin}', 'update')->name('Admin.update');
//         //Route::resource('',AdminController::class)->except('destroy');

//     });

// Route::prefix('Student')
//     ->as('Student')
//     ->controller(StudentController::class)
//     ->group(function(){
//         // Route::post('/{Student}/avatar','updateAvatar')->name('Student.updateAvatar');
//         // Route::post('/{Student}/update','updateProfile')->name('update.student');

//         // //
//         // Route::get('/{Student}', 'show')->name('Student.show');
//         // Route::get('/', 'index')->name('Student.index');
//         // Route::post('/', 'store')->name('Student.store');
//         // Route::post('/{Student}', 'update')->name('Student.update');

//     });




