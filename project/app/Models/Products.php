<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\Cart;
// use Session;
use Image;
use Darryldecode\Cart\Facades\CartFacade as Cart;


// use Darryldecode\Cart\Cart ;

class Products extends Model
{
    use HasFactory;

    static public function getProducts($cat_url, &$data){

        if($categorie = Categorie::Where('url','=',$cat_url)->first()){

            $categorie = $categorie->toArray();
            $data['title'] .=$categorie['title'] .= ' products';
            $data['cat_url'] = $cat_url;

            if($products = Categorie::find( $categorie['id'] )->products){
                $data['products'] = $products->toArray();
                // dd($data);
            }else{

            }
        }else{
            abort(404);
        }

    }

    static public function addToCart($id){

        if( !empty($id) && is_numeric($id) ){

          if( !Cart::get($id) ){

                if($product = self::find($id)){

                $product = $product->toArray();
                Cart::add($id, $product['title'], $product['price'], 1 , []);
                Session::flash('sm', $product['title'] .' added to Cart');

            }
          }

        }

    }
    static public function updateCart($request ){

        if( !empty($request['id']) && is_numeric($request['id']) ){

          if( !empty($request['op']) ){

            $item = Cart::get($request['id']);

            if( $item ){

                if( $request['op'] == '+'){

                    Cart::update($request['id'],['quantity' => 1]);

                }elseif( $request['op'] == '-'){

                    $item = $item->toArray();
                    if($item['quantity'] -1 != 0){

                        Cart::update($request['id'],['quantity' => -1]);

                    }

                }

            }

            //     if($product = self::find($id)){

            //     $product = $product->toArray();
            //     Cart::add($id, $product['title'], $product['price'], 1 , []);
            //     Session::flash('sm', $product['title'] .' added to Cart');

            // }
          }

        }

    }

   static public function save_new($request){

    $img = self::loadImage($request);
    $image_name = $img ? $img : 'default.jpg';


    $product = new self();

    $product->categorie_id = $request['categorie_id'];
    $product->title = $request['title'];
    $product->article = $request['article'];
    $product->url = $request['url'];
    $product->price = $request['price'];
    $product->image = $image_name;
    $product->save();
    Session::flash('sm','Product saved');

  }

    static public function update_item($request, $id){

    $image_name = self::loadImage($request);

    $product =  self::find($id);
    $product->categorie_id = $request['categorie_id'];
    $product->title = $request['title'];
    $product->article = $request['article'];
    $product->url = $request['url'];
    $product->price = $request['price'];
    if($image_name){
        $product->image = $image_name;

    }

    $product->save();
    Session::flash('sm','Product updated');

    }

    static private function loadImage($request){
               $image_name = '';

         if($request->hasFile('image') && $request->file('image')->isValid() ){
        $file = $request->file('image');
        $image_name = date('Y.m.d.H.i.s') .'-' .$file->getClientOriginalName() ;

        $request->file('image')->move(public_path() . '/images/products',$image_name);

        $img = Image::make(public_path() . '/images/products/' . $image_name);
        $img->resize(300,null,function($constraint){
            $constraint->aspectRatio();
        });
        $img->save(public_path() . '/images/products/'  . $image_name);
    }
    return $image_name;
    }
}