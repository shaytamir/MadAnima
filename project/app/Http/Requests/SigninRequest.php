<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SigninRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:6|max:10',
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
            'email.required'=>' emael is required..',
            'email.email'=>' emael is wrong..',
            'password.required'=>' password is required..',
        ];
    }


}
