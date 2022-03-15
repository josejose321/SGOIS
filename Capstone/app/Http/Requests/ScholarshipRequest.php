<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScholarshipRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        "student_no"=>'required',
        "officeCode"=>'required',
        "semesterCode"=>'required',
        "categoryNo"=>'required',
        "discount"=>'required',
        "requirement"=>'required',
        "photo"=>'required',
        "officeVerification"=>'required',
        "adminVerification"=>'required',
        "remarks"=>'required'
        ];
    }
}
