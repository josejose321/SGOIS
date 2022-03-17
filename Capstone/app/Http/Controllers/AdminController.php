<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminUpdateRequest;
use App\Http\Requests\StudentRequest;
use App\Imports\StudentsImport;
use App\Mail\WelcomMail;
use App\Models\Admin;
use App\Models\Course;
use App\Models\Department;
use App\Models\Discount;
use App\Models\Loan;
use App\Models\Scholarship;
use App\Models\Student;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Exceptions\LaravelExcelException;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    private $data;


    public function __construct()
    {
        
    }
    public function home()
    {
        return view('unc')
        ->with('totalScholarships',
        Scholarship::where('officeVerification','Approved')
        ->where('adminVerification','Approved')->count())
        ->with('discounts', Scholarship::where('type','discounts')->count())
        ->with('totalLoans',Loan::count())
        ->with('discounts', Scholarship::where('type','grant')->count());
    }
    public function index()
    {
        //Mail::to('jose.evascoii1150@gmail.com')->send( new WelcomMail());
        // return new WelcomMail();
        $this->data = [
            'total'=> Student::count(),
            'departments' => Department::all(),
            'courses'=> Course::all(),
            'students'=>Student::simplePaginate(10),
            'admin'=>Admin::find('18-08925'),
            'totalScholarships'=> Scholarship::where('officeVerification','Approved')
            ->where('adminVerification','Approved')->count(),
            'totalLoans'=> Loan::count(),
            'totalOthers'=> Scholarship::count(),
        ];


        return view('Admin.index')
        ->with($this->data);
    }
    public function showScholarships()
    {
        return view('Admin.scholarship')
        ->with('admin',Admin::find('18-08925'))
        ->with('scholarships',Scholarship::where('adminVerification','Pending')->simplePaginate(10));
    }
    public function showProfile()
    {
        return view('Admin.profile')
        ->with('admin',Admin::find('18-08925'))
        ->with('students',Student::all())
        ->with('departments', Department::all())
        ->with('courses',Course::all())
        ->with('total', Student::count());
    }
    public function showLoans()
    {
        return view('Admin.loan')
        ->with('loans',Scholarship::where('adminVerification','Pending')->simplePaginate(10))
        ->with('admin',Admin::find('18-08925'))
        ->with('scholarships',Scholarship::all());
    }
    public function showDiscounts()
    {
        return view('Admin.discount')
        ->with('discounts',Scholarship::where('adminVerification','Pending')
        ->where('type','Discount')
        ->simplePaginate(10))
        ->with('admin',Admin::find('18-08925'));
    }
    public function showStudents()
    {
        return view('Admin.student')
        ->with('students',Student::simplePaginate(10))
        ->with('admin',Admin::find('18-08925'))
        ->with('total',Student::count());
    }
    public function show(Admin $admin)
    {
        return view('Admin.index')
        ->with('admin', $admin);
    }
    public function showStats()
    {
        return view('Admin.stats')
        ->with('students',Student::all())
        ->with('admin',Admin::find('18-08925'))
        ->with('departments', Department::all())
        ->with('courses',Course::all());
        
    }
    public function store(Request $request)
    {
        try{
            $admin = new Admin();
            $admin->admin_no = $request->admin_no;
            $admin->firstname = $request->firstname;
            $admin->middlename= $request->middlename;
            $admin->lastname = $request->lastname;
            $admin->email = $request->email;
            $admin->postition = $request->position;
            $admin->avatar = 'defaultAvatar.jpg';
            $admin->password = $request->password;
            $admin->save();
            return back()->with('message', 'successfully added!');
        }catch(QueryException $e)
        {
            return back()->with('error','failed to add!\n'. $e->getMessage());
        }
        
    }

    //
    public function approve(Request $request, Scholarship $scholarship)
    {

        if($scholarship->office->officeCode === 'uncsgo')
            $scholarship->officeVerification = 'approved';
        
        $scholarship->adminVerification = 'approved';
        $scholarship->discount = $request->discount;
        $scholarship->save();
        return back('approved','Approved');
    }


    public function decline(Scholarship $scholarship)
    {
        $scholarship->officeVerification ='declined';


        return back('decline','Decline Application');
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

    
    public function updateAvatar(Request $request, Admin $admin)
    {
        try
        {
            //save upload path
            $admin->avatar = $this->storeAvatar($request->file('avatar'));
            $admin->save();
            return redirect()->back()->with('avatarSuccess',"Succes!");

        }catch(Exception $e)
        {
            return back()->with('avatarError','Upload Error!\n'. $e->getMessage());
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
    
}
