<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminUpdateRequest;
use App\Http\Requests\AdminVerifyRequest;
use App\Http\Requests\AnnouncementRequest;
use App\Http\Requests\AvatarRequest;
use App\Http\Requests\StudentRequest;
use App\Imports\StudentsImport;
use App\Mail\ScholarshipMail;
use App\Models\Admin;
use App\Models\Announcement;
use App\Models\Course;
use App\Models\Department;
use App\Models\Loan;
use App\Models\Scholarship;
use App\Models\Semester;
use App\Models\Student;
use Exception;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    private $data;
    private $countResults;
    private $scholarship;
    private $loan;

    public function __construct()
    {
        // dd($scholar->countApproved('Scholarship'));

        $this->scholarship = new Scholarship();
        $this->loan = new Loan();


        $this->countResults =[
            'totalScholarships'=> $this->scholarship->countApproved('Scholarship'),
            'totalDiscounts'=>$this->scholarship->countApproved('Discount'),
            'totalLoans'=> Loan::count(),
            'totalOthers'=> $this->scholarship->countApproved('Grant'),
            'chartResult' => [
                $this->scholarship->countGrantee('UNC-SDO','Scholarship'),
                $this->scholarship->countGrantee('UNC-CULTURE&ARTS','Scholarship'),
                $this->scholarship->countGrantee('UNC-HR','Scholarship'),
                $this->scholarship->countApproved('Discount'),
                $this->scholarship->countApproved('Grant'),
            ]
        ];
        
    }



    //home
    public function home()
    {
        // return new ScholarshipMail();

        $try = [

            (object) ['title' =>'Total Scholarships', 'total' =>$this->scholarship->countApproved('Scholarship')],
            (object) ['title' =>' Total Discounts', 'total' =>$this->scholarship->countApproved('Discount')],
            (object) ['title' =>' Total Loans', 'total' =>Loan::count()],
            (object) ['title' =>'Other Grants', 'total' =>$this->scholarship->countApproved('Grant')],
        ];

        // return ($try);
        $this->countResults =[
            'totalScholarships'=> $this->scholarship->countApproved('Scholarship'),
            'totalDiscounts'=>$this->scholarship->countApproved('Discount'),
            'totalLoans'=> Loan::count(),
            'totalOthers'=> $this->scholarship->countApproved('Grant'),
        ];
        return view('unc')
        // ->with($this->countResults)
        ->with('scholarshipsResults',$try);
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
        return back()->with('successDelete','You Deleted an Announcement');
    }



    public function storeAnnounce(AnnouncementRequest $request, Admin $admin)
    {
        $announcement = Announcement::create([
            'subject' =>$request->subject,
            'content' =>$request->content,
            'admin_no'=>$admin->admin_no,
        ]);
        return back()->with('successAnnounce','You Added a new Annoucement:');

    }
    public function updateAnnounce(AnnouncementRequest $request, Announcement $announcement)
    {

        $announcement->update($request->validated());
        return back()->with('successUpdate','You update an Annoucement:');
    }


    //Admin index // dashboard
    public function index()
    {
        $this->data = [
            'total'=> Student::count(),
            'departments' => Department::all(),
            'courses'=> Course::all(),
            'admin'=>Admin::find('18-08925'),
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
            'admin' =>Admin::find('18-08925'),
            'scholarships'=> $this->scholarship->admin_getPending('Scholarship')
        ];
        
        return view('Admin.scholarship')->with($this->data);
    }
    public function scholarshipDelete(Scholarship $scholarship)
    {
        $scholarship->delete();
        return back()->with('successDelete','You Deleted Scholarship');
    }

    public function showProfile()
    {
        return view('Admin.profile')
        ->with('admin',Admin::find('18-08925'));//auth()->admin
    }
    public function showLoans()
    {
        $loan = new Loan();
        $this->data = [
            'loans'=> $loan->admin_getPending(),
            'admin'=> Admin::find('18-08925')//auth()->admin
        ];
        return view('Admin.loan')
        ->with($this->data);
    }
    public function showDiscounts()
    {
        return view('Admin.discount')
        ->with('scholarships',$this->scholarship->admin_getPending('Pending'))
        ->with('admin',Admin::find('18-08925'));//auth()->admin
    }
    public function showStudents()
    {
        $this->data =[
            'students'=>Student::simplePaginate(10),
            'admin' =>Admin::find('18-08925'),//auth()->admin
            'total'=>Student::count()
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
        // dd($scholarship->student->firstname);
        // return new ScholarshipMail($scholarship);
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
        
        if($request->file != null)
        {
            try{
                Excel::import(new StudentsImport, $request->file('file')->store('temp'));
                return back()->with('successImport','Import Successfully!');
            }catch(Exception $e){
                return back()->with('errorImport','Import Error!');
            }
        }
        return back()->with('errorImport','Select File First!');
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
        $student->password = Hash::make($student->student_no);
        $student->save();
        return back()->with('success',"student added to the database");
    }

    public function downLoadRequirement(Scholarship $scholarship)
    {
        // $pdf = FacadePdf::loadView('Requirement',Storage::url($scholarship->requirement));
        //dd(Storage::url($scholarship->requirement));
        // return $pdf->download(Storage::url($scholarship->requirement));
        if(file_exists(Storage::url($scholarship->requirement)))
        {
            Storage::download($scholarship->photo,$scholarship->student->lastname . '-photo', 200);
            return back();
        }
        // dd($scholarship->requirement);
        // return response()->download($scholarship->requirement);

        // return response()->download('off');
        // return back();
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
    public function showApplication()
    {
        $this->data = [
            'admin'=>Admin::find('18-08925'),
            'semesters' => Semester::all()
        ];
        return view('Admin.application')->with($this->data);
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
        ];
        return view('Admin.report')->with($this->data);
    }
    
}
