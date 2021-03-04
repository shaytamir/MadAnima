<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Session;

class MenuController extends MainController
{

    public function index(){
        return view('cms.menu',self::$data);
    }


    public function create(){
        return view('cms.add_menu',self::$data);

    }


    public function store(MenuRequest $request){
        Menu::save_new($request);
        return redirect('cms/menu');

    }

    public function show($id){

        self::$data['id'] = $id;
        return view('cms.delete_menu',self::$data);


        // Menu::save_new($request);
        // return redirect('cms/menu');

    }


    public function edit($id){
        // echo __METHOD__;

        self::$data['menu'] = Menu::find($id)->toArray();
        return view('cms.edit_menu',self::$data);

    }

    public function update(MenuRequest $request, $id){

        Menu::update_item($request,$id);
//  Menu::save_new($request);
        return redirect('cms/menu');
    }

    public function destroy($id){

        Menu::destroy($id);
        Session::flash('sm','Menu Deleted..');
        return redirect('cms/menu');

    }
}