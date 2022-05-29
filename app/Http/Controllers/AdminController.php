<?php

namespace App\Http\Controllers;

use App\Exports\SummaryReport;
use App\Http\Requests\AdminUpdateRequest;
use App\Http\Requests\AdminVerifyRequest;
use App\Http\Requests\AnnouncementRequest;
use App\Http\Requests\AvatarRequest;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ChangePassRequest;
use App\Http\Requests\SemesterRequest;
use App\Http\Requests\StudentRequest;
use App\Imports\StudentImport;
use App\Imports\StudentsImport;
use App\Mail\RegistrationMail;
use App\Mail\ScholarshipMail;
use App\Models\Announcement;
use App\Models\Category;
use App\Models\Course;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Office;
use App\Models\Scholarship;
use App\Models\Semester;
use App\Models\Student;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Prophecy\Exception\Doubler\ReturnByReferenceException;

class AdminController extends Controller
{
    private $data;
    private $countResults;
    private $scholarship;
    private  $semester;
    private $category;
    private $user;
    private $student;

    public function __construct()
    {
        // $this->middleware(['auth','isAdmin']);
        // dd($scholar->countApproved('Scholarship'));
        $this->scholarship = new Scholarship();
        $this->loan = new Scholarship();
        $this->semester = new Semester();
        $this->category = new Category();
        $this->user = new User;
        $this->student = new Student();

        $this->countResults =[
            'totalScholarships'=> $this->scholarship->approved('Scholarship')->count(),
            'totalDiscounts'=>$this->scholarship->approved('Discount')->count(),
            'totalLoans'=> $this->scholarship->approved('Loan')->count(),
            'totalOthers'=> $this->scholarship->approved('Grant')->count(),
            'chartResult' => [
                $this->scholarship->officeGrantees('UNC-SDO','Scholarship')->count(),
                $this->scholarship->officeGrantees('UNC-CULTURE&ARTS','Scholarship')->count(),
                $this->scholarship->officeGrantees('UNC-HR','Scholarship')->count(),
                $this->scholarship->approved('Discount')->count(),
                $this->scholarship->approved('Grant')->count(),
            ],
            'totalVarsity'=> $this->scholarship->officeGrantees('UNC-SDO','Scholarship')->count(),
        ];



    }



    //home
    public function home()
    {
        // return new ScholarshipMail();

        $results = [

            (object) ['title' =>'Scholarships', 'total' =>$this->scholarship->approved('Scholarship')->count()],
            (object) ['title' =>'Discounts', 'total' =>$this->scholarship->approved('Discount')->count()],
            (object) ['title' =>'Loans', 'total' =>$this->scholarship->approved('Loans')->count()],
            (object) ['title' =>'Grants', 'total' =>$this->scholarship->approved('Grant')->count()],
        ];

        return view('unc')
        // ->with($this->countResults)
        ->with('scholarshipsResults',$results);
    }

    //announcement
    public function showAnnounce()
    {
        $this->data = [
            'announcements'=>Announcement::latest()->simplePaginate(10),
        ];
        // dd(User::find(11)->employee);
        return view('Admin.announcements')
        ->with($this->data);
        //auth()->admin
    }
    public function deleteAnnounce(Announcement $announcement)
    {
        $announcement->delete();
        return back()->withSuccess('You Deleted an Announcement');
    }



    public function storeAnnounce(AnnouncementRequest $request, Employee $employee)
    {

        $employee->announcements()->create($request->validated());
        return back()->withSuccess('You Added a new Annoucement:');
    }

    public function updateAnnounce(AnnouncementRequest $request, Announcement $announcement)
    {
        $announcement->update($request->validated());
        return back()->withSuccess('You update an Annoucement:');
    }
    //Admin index // dashboard
    public function index()
    {
        //for summary Report

        // dd(Category::all());
        // return Excel::download(new SummaryReport, 'report.xlsx');

        // dd($allocations);
        // mail debug

        // return new RegistrationMail(Student::find(35));
        // return new ScholarshipMail(Scholarship::latest()->first());
        // return new AnnouncementMail(null);
        $this->data = [
            'total'=> Student::count(),
            'departments' => Department::all(),
            'courses'=> Course::all(),
            'reports' => $this->category->getSummaryReport()
        ];
        //auth()->admin


        return view('Admin.index')
        ->with($this->data)
        ->with($this->countResults);
    }
    public function showScholarships()
    {
        //auth()->admin
        $this->data =[
            'scholarships'=> $this->scholarship->admin_getPending('Scholarship')
        ];

        return view('Admin.scholarship')->with($this->data);
    }
    public function scholarshipDelete(Scholarship $scholarship)
    {
        $scholarship->delete();
        return back()->withSuccess('You Deleted Scholarship');
    }

    public function showProfile()
    {
        return view('Admin.profile')
        ->with('employee',Employee::latest()->first());
    }
    public function showLoans()
    {
        $this->data = [
            'scholarships'=> $this->scholarship->admin_getPending('Loan'),
        ];
        return view('Admin.loan')
        ->with($this->data);
    }
    public function showDiscounts()
    {
        $this->data = [
            'scholarships'=>$this->scholarship->admin_getPending('Discount')
        ];
        return view('Admin.discount')
        ->with($this->data);
    }
    public function showStudents()
    {
        // dd($this->student->searchStudent('Computer Studies')->get());
        $this->data =[
            'students'=>$this->student->getActiveStudent()->simplePaginate(15),
            'total'=>$this->user->getStudent()->count(),
            'courses'=>Course::all(),
            'departments'=> Department::all(),
        ];
        return view('Admin.student')
        ->with($this->data);
    }
    public function showGrantees()
    {
        // return $this->user->getStudent()->simplePaginate(15);
        $this->data =[
            'students'=>$this->student->getGrantees()->simplePaginate(15),
            'total'=>$this->student->getGrantees()->count(),
            'courses'=>Course::all(),
            'departments'=> Department::all(),
        ];
        return view('Admin.grantees')
        ->with($this->data);
    }
    public function searchStudent()
    {

    }
    public function show(User $user)
    {
        return view('Admin.index')
        ->with('admin', $user);//auth()->admin
    }


    //
    public function verifyScholarship(AdminVerifyRequest $request, Scholarship $scholarship)
    {

        //  return new ScholarshipMail;
        if($scholarship->office->officeCode != 'UNC-SGO')
        {
            if( $scholarship->officeVerification == 'Pending')
                return back()->with('error','Verify from Endorser Office first!');
        }

        $scholarship->update([
            'officeVerification' =>'Approved',
            'adminVerification'=>'Approved',
            'discount' =>$request->discount,
            'remarks'=> $request->remarks
        ]);
        Mail::to($scholarship->student->user->email)->send(new ScholarshipMail($scholarship));

        return redirect('/admin/scholarships')->withSuccess('Scholarship Application Approved!');
    }




    public function updateProfile(AdminUpdateRequest $request, User $user)
    {
        $user->update($request->validated());
        return back()->withSuccess( 'successfully update!');
    }

    public function import(Request $request)
    {
        // dd($request->file('file'));
        if($request->file != null)
        {
            try{
                Excel::import(new StudentImport, $request->file('file')->store('temp'));
                return back()->withSuccess('Import Successfully!');
            }catch(Exception $e){
                return back()->with('error','Import Error!');
            }
        }
        return back()->with('error','Select File First!');
    }


    public function updateAvatar(AvatarRequest $request, User $user)
    {
        // dd($user);
        $user->update([
            'avatar'=>$this->storeAvatar($request->file('avatar')),
        ]);
        return redirect()->back()->withSuccess("Avatar successfully updated!");
    }

    private function storeAvatar($file)//get avatarname and upload to storage
    {
        $path = $file->hashName();
        $file->storeAs('public/avatar/',$path);
        return $path;
    }
    public function storeStudent(StudentRequest $request)
    {
        // dd($request->validated());
        $student = User::create([
            'user_id'=> $request->user_id,
            'firstname'=> $request->firstname,
            'middlename'=> $request->middlename,
            'lastname'=> $request->lastname,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'password'=>Hash::make($request->user_id)
        ])
        ->student()->create([
        'courseNo'=> $request->courseNo,
        'year'=> $request->year,
        'parentName'=> $request->parentName,
       ]);
        Mail::to($student->user->email)->send(new RegistrationMail($student));
        return back()->withSuccess("student added to the database");
    }


    //application
    public function showSemester()
    {

        $this->data = [
            'semesters' => $this->semester->getALL()->simplePaginate(10),
        ];
        return view('Admin.semester')->with($this->data);
    }
    public function storeSemester(SemesterRequest $request)
    {
        try
        {
            $sem= Semester::create([
                'semesterCode' => $request->sem. '_' .$request->year  ,
                'sem' =>$request->sem,
                'year'=> $request->year,
                'deadline'=>$request->deadline,
            ]);
        }catch(Exception $e)
        {
            return redirect()->back()->with('error','Cannot Add new Semester');
        }
        return redirect()->back()->withSuccess('New Semester Added!');
    }
    public function deactivateSem(Request $request, Semester $semester)
    {
        if($semester->active === 1)
        {
            $semester->update(['active'=>0]);
            return back()->withSuccess('You Successfully Deactivate Semester');
        }
        else
        {
            $semester->update(['active'=>1]);
            return back()->withSuccess('You Successfully Activate Semester');
        }

    }
    public function showReport()
    {
        $this->data = [
            'reports'=>$this->category->getSummaryReport()
        ];
        return view('Admin.report')->with($this->data);
    }
    public function showPrograms ()
    {
        $this->data = [
            'categories'=> Category::simplePaginate(15),
            'offices'=> Office::all()
        ];
        return view('Admin.categories')
        ->with($this->data);
    }
    public function viewApplication(Scholarship $scholarship)
    {
        if($scholarship->adminVerification === "Approved" && $scholarship->adminVerification === "Approved" )
            return back()->with('error', 'Cannot open this application. \n Application Already Approved!');
        $this->data = [
            'scholarship'=>$scholarship
        ];
        return view('Admin.application-view')
        ->with($this->data);
    }

    public function downloadReport()
    {
        return Excel::download(new SummaryReport, 'SGO-SUMMARY-REPORT.xlsx');

    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
    public function changePassword(ChangePassRequest $request)
    {
        User::find(auth()->user()->userNo)->update(['password' => Hash::make($request->new_password)]);
        return redirect()->route('admin.index')->withSuccess('Password change Successfully');
    }
    public function showChangePassword()
    {
        return view('Admin.change_pass');
    }
    public function searchStudents(Request $request)
    {
        // dd($request->term);
        $this->data = [
            'students'=> $this->student->searchStudent($request->term)->simplePaginate(15),
            'total'=>$this->user->getStudent()->count(),
            'courses'=>Course::all(),
            'departments'=> Department::all(),
        ];

        return view('Admin.student')
        ->with($this->data);
    }
    public function storePrograms(CategoryRequest $request)
    {
        // dd($request->validated());
        Category::create($request->validated());
        return back()->withSuccess('New Scholarship Program Added to database');
    }

    public function searchPrograms(Request $request)
    {
        $this->data = [
            'categories'=> $this->category->searchPrograms($request->term)->simplePaginate(15),
            'offices'=> Office::all()
        ];
        return view('Admin.categories')
        ->with($this->data);
    }


}
