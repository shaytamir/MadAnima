<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Menu extends MainModel
{
    use HasFactory;

    static public function save_new($request){

        $menu = new self();
        $menu->link = $request['link'];
        $menu->menu_title = $request['menu_title'];
        $menu->url = $request['url'];
        $menu->save();
        Session::flash('sm','Menu saved ');

    }
    static public function update_item($request, $id){

        $menu = self::find($id);
        $menu->link = $request['link'];
        $menu->menu_title = $request['menu_title'];
        $menu->url = $request['url'];
        $menu->save();
        Session::flash('sm','Menu Edited ');

    }
}
