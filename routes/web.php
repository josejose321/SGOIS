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
    ->as('admin.')
    ->controller(AdminController::class)
    ->middleware(['isAdmin','auth','prevent-back-history'])
    ->group(function (){
        //scholarships
        Route::get('/password','showChangePassword')->name('show.password');
        Route::post('/password','changePassword')->name('update.password');
        Route::get('/logout','logout')->name('logout');
        Route::get('/scholarships','showScholarships')->name('scholarhips');
        Route::post('/scholarships/{scholarship}/verify', 'verifyScholarship')->name('scholarship.approve');
        Route::get('/scholarships/{scholarship}/delete', 'scholarshipDelete')->name('scholarship.delete');
        Route::get('/scholarships/{scholarship}/requirement-download', 'downloadRequirement')->name('scholarship.requirement-download');
        Route::get('/scholarships/{scholarship}/photo-download', 'downloadPhoto')->name('scholarship.photo-download');
        Route::get('/application-view/{scholarship}','viewApplication')->name('application.view');
        Route::get('/download-report', 'downloadReport')->name('report.download');
        Route::get('/download-external-report','downloadExternalReport')->name('external.download');
        Route::post('/external-scholarships/{student}','addStudentToExternal')->name('external.apply');

        Route::get('/semesters/{semester}','deactivateSem')->name('semester.deactivate');
        Route::post('/employee', 'storeEmployee')->name('employee.store');
        Route::post('/export-grantees','exportGrants')->name('grants.export');


        Route::get('/semesters','showSemester')->name('semester');
        Route::post('/semesters','storeSemester')->name('semester.store');
        Route::post('semesters/{semester}', 'extendSem')->name('semester.extend');
        Route::get('/grantees','showGrantees')->name('grantees');
        Route::get('/reports','showReport')->name('reports');
        Route::get('programs','showPrograms')->name('programs');
        Route::post('programs','storePrograms')->name('programs.store');
        Route::post('programs/search','searchPrograms')->name('programs.search');
        Route::post('programs/{category}','updatePrograms')->name('programs.update');



        //loans
        Route::get('/loans','showLoans')->name('loans');
        Route::post('/loans/{loan}/approve', 'approveLoan')->name('aprroveLoan');
        Route::post('/loans/{loan}/decline', 'declineLoan')->name('declineLoan');
        //discounts
        Route::get('/discounts','showDiscounts')->name('discounts');

        Route::post('/import','import')->name('import');
        Route::get('/students','showStudents')->name('students');
        Route::post('/students/search','searchStudents')->name('students.search');
        Route::get('/profile','showProfile')->name('profile');
        Route::post('profile/{user}/avatar','updateAvatar')->name('update.avatar');
        Route::post('/profile/{user}','updateProfile')->name('update');


        //announcement
        Route::post('/announcements/{employee}', 'storeAnnounce')->name('announce.store');
        Route::get('/announcements', 'showAnnounce')->name('announce.show');
        Route::post('/announcements/{announcement}/update', 'updateAnnounce')->name('announce.update');
        Route::get('/announcements/{announcement}', 'deleteAnnounce')->name('announce.delete');


        Route::get('/statistics','showStats')->name('stats');
        //Route::resource('/', AdminController::class);
        //route resource
        Route::get('/{admin}', 'show')->name('show');
        Route::get('/', 'index')->name('index');
        Route::post('/', 'storeStudent')->name('student.store');



    });

Route::prefix('student')
    ->as('student.')
    ->controller(StudentController::class)
    ->middleware(['isStudent','auth','prevent-back-history'])
    ->group(function(){
        Route::get('/password','showChangePassword')->name('show.password');
        Route::post('/password','changePassword')->name('update.password');
        Route::get('/dashboard', 'index')->name('index');
        Route::post('/{student}/avatar','updateAvatar')->name('avatar.update');
        Route::post('/{student}/update','updateProfile')->name('update.profile');
        Route::get('/scholarships','showScholarships')->name('scholarships');
        Route::post('/{student}/scholarship','applyAdministrative')->name('apply.scholarship');
        Route::post('/{student}/discount','applyDiscount')->name('apply.discount');
        Route::post('/{student}/external','applyExternal')->name('apply.external');
        Route::get('/scholarship-sportsdev','showSportsDev')->name('sportsDev');
        Route::get('/scholarship-culture-arts','showCultureAndArts')->name('culture');
        Route::get('/discounts','showDiscounts')->name('discount.show');
        Route::get('/loans','showLoans')->name('loan.show');
        Route::get('/applications','showApplication')->name('applications.view');

        Route::get('/profile','edit')->name('edit');
        Route::get('/logout','logout')->name('logout');



    });


Route::prefix('employee')
->as('employee.')
->controller(EmployeeController::class)
->middleware(['isEndorser','auth','prevent-back-history'])
->group(function (){
        //scholarships
        Route::get('/password','showChangePassword')->name('show.password');
        Route::post('/password','changePassword')->name('update.password');
        Route::post('/scholarships/{scholarship}/verify', 'verifyScholarship')->name('scholarship.approve');
        Route::get('/scholarships','showScholarships')->name('scholarhips');
        Route::get('/application-view/{scholarship}','viewApplication')->name('application.view');

        Route::post('/avatar/{user}','updateAvatar')->name('avatar.update');
        //loans
        Route::post('/profile/{user}', 'updateProfile')->name('profile.update');
        Route::get('/profile', 'show')->name('show');


        Route::get('/loans','showLoans')->name('loans');
        //discounts
        Route::get('/discounts','showDiscounts')->name('discounts');
        Route::get('/categories','showCategories')->name('categories');
        ROute::get('categories/update','updateCategory')->name('categories.update');



        Route::get('/', 'index')->name('index');
        Route::get('/logout','logout')->name('logout');

    });




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
