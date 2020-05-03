<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'identification_card' => 'required|digits_between:5,10|numeric',
            'name' => 'required|max:225',
            'lastname' => 'required|max:225',
            'address' => 'required|max:225',
            'phone_number' => 'required|numeric',
            'city' => 'required|max:225',
            'Country' => 'required|max:225',
            'date_of_birth' => 'required|date|before:today',
            'gender' => 'required',
            'email' => 'required|max:225|email'
            //
        ];
    }
}
