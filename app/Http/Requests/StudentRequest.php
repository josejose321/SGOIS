<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'user_id' => 'required|max:8',
            'firstname' => 'required',
            'middlename'=> 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone'=>'required',
            'year'=>'required',
            'courseNo'=>'required',
            'parentName' =>'required'
        ];
    }
}
