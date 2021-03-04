<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends MainController
{
    public function home(){
       self::$data['title'] .= 'Home Page';
        return view('content.home',self::$data);
    }

    public function content($url){
       $contents =  DB::table('contents')
                    ->join('menus','menus.id','=','contents.menu_id')
                    ->where('menus.url','=',$url)
                    ->get()
                    ->toArray();

                    if( !$contents ) return abort(404);

        self::$data['title'] .= $contents[0]->menu_title;
        self::$data['contents'] = $contents;

        return view('content.content',self::$data);


    //    self::$data['title'] .= 'About Us';
        // return view('content.about',self::$data);
    }
}