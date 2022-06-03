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
            "semesterCode"=>'required',
            "categoryNo"=>'required',
            "discount"=>'required',
            "requirement"=>"required|mimetypes:application/pdf|max:10000",
            "photo"=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
