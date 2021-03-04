<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ContentRequest extends FormRequest{

    public function authorize(){
        return true;
    }

    public function rules(Request $request){


        return [
            'menu_id'=>'required',
            'title'=>'required',
            'article'=>'required' ,

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

            // 'url.regex'=>' url must be lowerCase chars and `-`',
        ];
    }

}
