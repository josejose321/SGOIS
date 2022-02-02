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


Auth::routes();
Route::get('/Home',[HomeController::class,'index'])->name('index');
Auth::routes();


Route::resource('/Admin', AdminController::class);


Route::resource('/Student', StudentController::class);
Route::get('/Student/profile', [StudentController::class,'profile'])->name('Student.profile');
Route::resource('Student/scholarship', ScholarshipController::class);



