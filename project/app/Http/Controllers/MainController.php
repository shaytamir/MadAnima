<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MainController extends Controller{
static public $data = ['title'=>'Melamed | '];
    function __construct(){
        self::$data['menu'] = Menu::all()->toArray();

    }
}