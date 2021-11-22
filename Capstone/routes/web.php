<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
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
// Route::get('Student', function() {
//     return view("Student.index");
// });

Auth::routes();
Route::get('/Home',[HomeController::class,'index'])->name('Home');
Auth::routes();

Route::get('Admin', [AdminController::class, 'index'])->name('Admin');


Route::post('/Student.create',[StudentController::class, 'create'])->name('create');
Route::get('/Student',[StudentController::class, 'index'])->name('index');

Route::get('/Student.profile', [StudentController::class, 'profile'])->name('profile');
