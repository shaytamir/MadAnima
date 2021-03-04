<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;



class Content extends MainModel
{
    use HasFactory;

    static public function save_new($request){

        $content = new self();
        $content->menu_id = $request['menu_id'];
        $content->title = $request['title'];
        $content->article = $request['article'];
        $content->save();
        Session::flash('sm','Menu saved ');

    }

     static public function update_item($request, $id){

        $content = self::find($id);
        $content->menu_id = $request['menu_id'];
        $content->title = $request['title'];
        $content->article = $request['article'];
        $content->save();
        Session::flash('sm','Content updated ');

    }


}
