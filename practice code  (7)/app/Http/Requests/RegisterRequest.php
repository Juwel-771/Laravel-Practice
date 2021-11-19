<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first'=>'required',
            'email'=>'required',
            'password'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'first.required'=>'Name is important sir',
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'Dropbox',
        ];
    }
}
