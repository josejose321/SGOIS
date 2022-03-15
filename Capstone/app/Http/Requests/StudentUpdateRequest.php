<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentUpdateRequest extends FormRequest
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
            'firstname' => 'required',
            'middlename'=> 'required',
            'lastname' => 'required',
            'email' => 'required',
            'departmentCode'=>'required',
            'phone'=>'required',
            'course'=>'required',
            'year'=>'required'
        ];
    }
}
