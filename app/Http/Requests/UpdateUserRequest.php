<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'password' => [Rule::requiredIf(!empty(request()->new_password)),
            function($value, $fail)
            {
                if(!empty($value) && Hash::check($value, auth()->user()->password))
                {
                    $fail('Password is incorrect!');
                }
            }   
        ],
            'new_password' => 'password|confirmed'
        ];
    }
}
