<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB  ;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

// use DB,Sessoin;

class User extends Model
{
    use HasFactory;

    static public function validate($request){
        $valid = false;
        $email = $request['email'];
        $password =  $request['password'];

        $sql = "SELECT * FROM users u "
        . "JOIN user_roles r ON u.id = r.uid "
        ."WHERE u.email = ?";

        $user = DB::select($sql,[$email]);

        if( $user ){
            $user = $user[0];
            if( Hash::check($password,$user->password) ){
                $valid = true;
                if( $user->role == 6 ) Session::put('is_admin',true);

                Session::put('user_id', $user->id);
                Session::put('user_name', $user->name);
                Session::flash('sm',$user->name . ' welcome back!');

            }

        }

        return $valid;
    }

    static public function save_new($request){

        $user = new self();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password =  bcrypt($request['password']);
        $user->save();
        $uid = $user->id;
        DB::insert("INSERT INTO user_roles VALUES($uid, 7)");
          Session::put('user_id', $uid);
          Session::put('user_name', $request['name']);
          Session::flash('sm',$request['name'] . ' your acount created!');


    }

}
