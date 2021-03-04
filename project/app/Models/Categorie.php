<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class Categorie extends MainModel
{
    use HasFactory;

    public function products(){
        return $this->hasMany('App\Models\Products');
    }

  static public function save_new($request){

    $img = self::loadImage($request);
    $image_name = $img ? $img : 'default.jpg';


    $category = new self();
    $category->title = $request['title'];
    $category->article = $request['article'];
    $category->url = $request['url'];
    $category->image = $image_name;
    $category->save();
    Session::flash('sm','Category saved');

  }

    static public function update_item($request, $id){

    $image_name = self::loadImage($request);

    $category =  self::find($id);
    $category->title = $request['title'];
    $category->article = $request['article'];
    $category->url = $request['url'];
    if($image_name){
        $category->image = $image_name;

    }

    $category->save();
    Session::flash('sm','Category saved');

    }

    static private function loadImage($request){
               $image_name = '';

         if($request->hasFile('image') && $request->file('image')->isValid() ){
        $file = $request->file('image');
        $image_name = date('Y.m.d.H.i.s') .'-' .$file->getClientOriginalName() ;

        $request->file('image')->move(public_path() . '/images/categories',$image_name);

        $img = Image::make(public_path() . '/images/categories/' . $image_name);
        $img->resize(300,null,function($constraint){
            $constraint->aspectRatio();
        });
        $img->save(public_path() . '/images/categories/'  . $image_name);
    }
    return $image_name;
    }

}