<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required'
        ];
    }

    // When you to show custom validation messages in Form request validation, you have to create 'messages' name function
    function messages()
    {
        return [
            'name.required' => 'Please Enter your name',
            'email.required' => 'Please Enter your Email',
            'email.email' => 'Please Enter a Valid Email',
            'username.required' => 'Enter your User Name',
            'city.required' => 'Please Enter your city name',
            'state.required' => 'Please Enter your state name',
            'zip.required' => 'Please Enter Your Zip Code'
        ];
    }

    // You can use this variable when you want to show one error at a time in the form
    protected $stopOnFirstFailure = true;
}
