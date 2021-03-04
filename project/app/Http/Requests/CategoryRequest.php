<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CategoryRequest extends FormRequest{

    public function authorize(){
        return true;
    }

    public function rules(Request $request){

        $unique = !empty($request['item_id']) ? ',' . $request['item_id'] : '';

        return [
            'title'=>'required',
            'url'=>'required|regex:/^[a-z\d-]+$/|unique:menus,url' . $unique,
            'article'=>'required',
            'image'=>'image',

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

            'url.regex'=>' url must be lowerCase chars and `-`',
        ];
    }

}