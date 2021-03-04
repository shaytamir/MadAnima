<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:10|confirmed',
            // 'password_confirmation' => '',
        ];
    }

     /**
     * change the rules message system
     *
     * @return array
     */
    /*  */
    public function messages() {
        return [
            'name.required'=>' name is required..',
            'name.min'=>' name must be min 2 chars',
            'email.required'=>' emael is required..',
            'email.email'=>' emael is wrong..',
            'email.unique'=>' emael is taken..',
            'password.required'=>' password is required..',
        ];
    }


}
