<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SigninRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Support\Facades\Session;



class UserController extends MainController{

    function __construct(){
        parent::__construct();
        $this->middleware('signmid',['except'=>['logout']]);
    }




    public function getSignin(){

        self::$data['title'] .= 'sign in page';
        return view('forms.signin', self::$data);

    }

    public function postSignin(SigninRequest $request){

        $rt = !empty($request['rt']) ? $request['rt'] : '';

        if(User::validate($request)){
            return redirect($rt);

        }else{

            self::$data['title'] .= 'sign in page';
            return view('forms.signin', self::$data)->withErrors('wrong email/password');
        }

    }

    public function getSignup(){

        self::$data['title'] .= 'sign up page';
        return view('forms.signup', self::$data);

    }

    public function postSignup(SignupRequest $request){

            User::save_new($request);
            return redirect('');

    }

    public function logout(){
        Session::flush();
        return redirect('user/signin');
    }
}
