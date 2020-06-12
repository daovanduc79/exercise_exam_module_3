<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'employee_group' => 'required',
            'name' => 'required',
            'birthday' => 'required|date_format:Y-m-d|before:today',
            'sex' => 'required',
            'phone' => 'required|min:10|unique:employees',
            'cmnd' => 'required|min:12|unique:employees',
            'email' => 'required|email',
            'address' => 'required'
        ];
    }
}
