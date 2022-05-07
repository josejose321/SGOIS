<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminUpdateRequest;
use App\Http\Requests\AdminVerifyRequest;
use App\Http\Requests\AnnouncementRequest;
use App\Http\Requests\AvatarRequest;
use App\Http\Requests\SemesterRequest;
use App\Http\Requests\StudentRequest;
use App\Imports\dataImport;
use App\Imports\StudentsImport;
use App\Mail\AnnouncementMail;
use App\Mail\RegistrationMail;
use App\Mail\ScholarshipMail;
use App\Mail\WelcomMail;
use App\Models\Admin;
use App\Models\Announcement;
use App\Models\Category;
use App\Models\Course;
use App\Models\Department;
use App\Models\Loan;
use App\Models\Office;
use App\Models\Scholarship;
use App\Models\Semester;
use App\Models\Student;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    private $data;
    private $countResults;
    private $scholarship;
    private  $semester;
    private $category;

    public function __construct()
    {
        // dd($scholar->countApproved('Scholarship'));
        $this->scholarship = new Scholarship();
        $this->loan = new Scholarship();
        $this->semester = new Semester();
        $this->category = new Category();

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

            (object) ['title' =>'Total Scholarships', 'total' =>$this->scholarship->approved('Scholarship')->count()],
            (object) ['title' =>'Total Discounts', 'total' =>$this->scholarship->approved('Discount')->count()],
            (object) ['title' =>'Total Loans', 'total' =>$this->scholarship->approved('Loans')->count()],
            (object) ['title' =>'Other Grants', 'total' =>$this->scholarship->approved('Grant')->count()],
        ];

        return view('unc')
        // ->with($this->countResults)
        ->with('scholarshipsResults',$results);
    }

    //announcement
    public function showAnnounce()
    {
        return view('Admin.announcements')
        ->with('announcements',Announcement::latest()->simplePaginate(10))
        ->with('admin',Admin::find('18-08925'));
        //auth()->admin
    }
    public function deleteAnnounce(Announcement $announcement)
    {
        $announcement->delete();
        return back()->with('success','You Deleted an Announcement');
    }



    public function storeAnnounce(AnnouncementRequest $request, Admin $admin)
    {
        $admin->announcements()->create($request->validated());
        return back()->with('success','You Added a new Annoucement:');
    }

    public function updateAnnounce(AnnouncementRequest $request, Announcement $announcement)
    {
        $announcement->update($request->validated());
        return back()->with('success','You update an Annoucement:');
    }


    private function getSummaryReport()
    {
        $categoryData = [];
        foreach(Category::all()->pluck('categoryNo') as $categoryNo)
        {
            $category= Category::find($categoryNo);
            array_push($categoryData,
            (object) array(
               'categoryNo' =>$category->categoryNo,
               'categoryName'=> $category->name,
               'field_team'=> $category->field_team,
               'allocation'=> $category->allocation,
               'first' => $category->approvedByDiscount($categoryNo,'10%')->count(),
               'second' => $category->approvedByDiscount($categoryNo,'15%')->count(),
               'third' => $category->approvedByDiscount($categoryNo,'25%')->count(),
               'fourth' => $category->approvedByDiscount($categoryNo,'50%')->count(),
               'fifth' => $category->approvedByDiscount($categoryNo,'75%')->count(),
               'sixth' => $category->approvedByDiscount($categoryNo,'100%')->count(),
               'seventh' => $category->approvedByDiscount($categoryNo,'Full')->count(),
               'total'=> $this->category->approved($categoryNo)->count()//count scholarships where it belongs to this category
                )
            );
        }
        return $categoryData;
    }
    //Admin index // dashboard
    public function index()
    {
        //for summary Report


        $allocations = $this->getSummaryReport();

        // mail debug

        // return new RegistrationMail(Student::find(35));
        // return new ScholarshipMail(Scholarship::latest()->first());
        // return new AnnouncementMail(null);
        $this->data = [
            'total'=> Student::count(),
            'departments' => Department::all(),
            'courses'=> Course::all(),
            'admin'=>Admin::find('18-08925'),
        ];
        //auth()->admin


        return view('Admin.index')
        ->with($this->data)
        ->with($this->countResults)
        ->with('allocations',$allocations);
    }
    public function showScholarships()
    {
        //auth()->admin
        $this->data =[
            'admin' =>Admin::find('18-08925'),
            'scholarships'=> $this->scholarship->admin_getPending('Scholarship')
        ];

        return view('Admin.scholarship')->with($this->data);
    }
    public function scholarshipDelete(Scholarship $scholarship)
    {
        $scholarship->delete();
        return back()->with('success','You Deleted Scholarship');
    }

    public function showProfile()
    {
        return view('Admin.profile')
        ->with('admin',Admin::find('18-08925'));//auth()->admin
    }
    public function showLoans()
    {
        $this->data = [
            'scholarships'=> $this->loan->admin_getPending('Loan'),
            'admin'=> Admin::find('18-08925')//auth()->admin
        ];
        return view('Admin.loan')
        ->with($this->data);
    }
    public function showDiscounts()
    {
        return view('Admin.discount')
        ->with('scholarships',$this->scholarship->admin_getPending('Discount'))
        ->with('admin',Admin::find('18-08925'));//auth()->admin
    }
    public function showStudents()
    {
        $this->data =[
            'students'=>Student::simplePaginate(10),
            'admin' =>Admin::find('18-08925'),//auth()->admin
            'total'=>Student::count(),
            'courses'=>Course::all(),
            'departments'=> Department::all()
        ];
        return view('Admin.student')
        ->with($this->data);
    }
    public function show(Admin $admin)
    {
        return view('Admin.index')
        ->with('admin', $admin);//auth()->admin
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
        // Mail::to($scholarship->student->email)->send(new ScholarshipMail($scholarship));

        return back()->with('success','Scholarship Application Approved!');
    }




    public function updateProfile(AdminUpdateRequest $request, Admin $admin)
    {
        $admin->update($request->validated());
        return back()->with('success', 'successfully update!');
    }

    public function import(Request $request)
    {
        // dd($request->file('file'));
        if($request->file != null)
        {
            try{
                Excel::import(new StudentsImport, $request->file('file')->store('temp'));
                return back()->with('success','Import Successfully!');
            }catch(Exception $e){
                return back()->with('error','Import Error!');
            }
        }
        return back()->with('error','Select File First!');
    }


    public function updateAvatar(AvatarRequest $request, Admin $admin)
    {
        try
        {
            //save upload path
            $admin->avatar = $this->storeAvatar($request->file('avatar'));
            $admin->save();
            return redirect()->back()->with('success',"Avatar successfully updated!");

        }catch(Exception $e)
        {
            return back()->with('error','Upload Error!\n'. $e->getMessage());
        }


    }

    private function storeAvatar($file)//get avatarname and upload to storage
    {
        $path = $file->hashName();
        $file->storeAs('public/avatar/',$path);
        return $path;
    }
    public function storeStudent(StudentRequest $request)
    {
        $student = Student::create($request->validated());
        Mail::to($student->email)->send(new RegistrationMail($student));
        return back()->with('success',"student added to the database");
    }

    public function downLoadRequirement(Scholarship $scholarship)
    {

        if(file_exists(Storage::url($scholarship->requirement)))
        {
            Storage::download($scholarship->photo,$scholarship->student->lastname . '-photo', 200);
            return back();
        }

        return back()->with('error','cannot download the file:\n File not exists\nPlease check file path');
    }

    public function downloadPhoto(Scholarship $scholarship)
    {
        if(file_exists(Storage::url($scholarship->photo)))
        {
            Storage::download($scholarship->photo,$scholarship->student->lastname . '-photo', 200);
            return back();
        }

        return back()->with('error','cannot download the file:\n File not exists\nPlease check file path');
    }


    //application
    public function showSemester()
    {
        $this->data = [
            'admin'=>Admin::find('18-08925'),
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
                'period'=>$request->period,
                'active'=>1,
            ]);
        }catch(Exception $e)
        {
            return redirect()->back()->with('error','Cannot Add new Semester');
        }
        return redirect()->back()->with('success','New Semester Added!');
    }
    public function showOtherPrograms()
    {
        $this->data = [
            'admin'=>Admin::find('18-08925'), //auth()->admin()
        ];
        return view('Admin.otherProgram')->with($this->data);
    }
    public function showReport()
    {
        $this->data = [
            'admin'=>Admin::find('18-08925'),
            'allocations'=>$this->getSummaryReport()
        ];
        return view('Admin.report')->with($this->data);
    }
    public function showCategories()
    {
        $this->data = [
            'admin'=> Admin::find('18-08925'),
            'categories'=> Category::paginate(15),
            'offices'=> Office::all()
        ];
        return view('Admin.categories')
        ->with($this->data);
    }
    public function viewApplication(Scholarship $scholarship)
    {
        $this->data = [
            'admin'=>Admin::find('18-08925'),
            'scholarship'=>$scholarship
        ];
        return view('Admin.application-view')
        ->with($this->data);
    }

}
