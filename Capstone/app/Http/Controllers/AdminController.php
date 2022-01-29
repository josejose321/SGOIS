<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $scholarships = (object)array(
            "id"=> "18-08925",
            "fullname"=> "Evasco,Jose II V",
            "department"=> "College of Computer Studies",
            "course"=> "BSIT",
            "year"=> "4TH YEAR",
            "requirements"> "object" 

        );
        $loans = (object)array(
            "id"=> "18-08925",
            "fullname"=> "Evasco,Jose II V",
            "department"=> "College of Computer Studies",
            "course"=> "BSIT",
            "year"=> "4TH YEAR",
            "requirements"> "object" 

        );
        $discounts = (object)array(
            "id"=> "18-08925",
            "fullname"=> "Evasco,Jose II V",
            "department"=> "College of Computer Studies",
            "course"=> "BSIT",
            "year"=> "4TH YEAR",
            "requirements"> "object" 

        );
        $grants = (object)array(
            "id"=> "18-08925",
            "fullname"=> "Evasco,Jose II V",
            "department"=> "College of Computer Studies",
            "course"=> "BSIT",
            "year"=> "4TH YEAR",
            "requirements"> "object" 

        );

        return view('Admin.index')
        ->with(compact('scholarships'))
        ->with(compact('loans'))
        ->with(compact('discounts'))
        ->with(compact('grants'));
    }
    public function create()
    {

    }
    public function patch()
    {
        
    }
    public function destroy()
    {
        
    }
}
