<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Products;
use App\Models\Order;
// use Cart;
use Darryldecode\Cart\Facades\CartFacade as Cart;


use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Location;

class ShopController extends MainController{
    public function categories(){
        //   Cart::clear();

        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['title'] .= 'Shop Categories';
        return view('content.categories',self::$data);
    }

    public function products($cat_url){
            Products::getProducts($cat_url, self::$data);
            // dd(self::$data);
            return view('content.products',self::$data);

    }

    public function product($cat_url,$prod_url){

        if(  $product = Products::where('url','=',$prod_url)->first() ){

            $product = $product->toArray();
            self::$data['title'] .= $product['title'];
            self::$data['product'] = $product;

            return view('content.product',self::$data);

       }else{

            abort(404);

        }
    }

     public function addToCart(Request $request){
        Products::addToCart($request['id']);
    }

     public function checkout(Request $request){
        $certCollection = Cart::getContent();
        $cart = $certCollection->toArray();
        sort($cart);
        self::$data['cart'] = $cart;
        // dd($cart);

         self::$data['title'] .= 'checkout page';
        return view('content.checkout', self::$data);
    }


    public function updateCart(Request $request){
      Products::updateCart($request);
    }

    public function clearCart(){
       Cart::clear();
       return redirect('shop/checkout');
   }

    public function removeItem($id){
        Cart::remove($id);
        return redirect('shop/checkout');
    }
    public function order(){

        if( Cart::isEmpty() ){
            return redirect('shop');
        } else {
            if( !Session::has('user_id') ){
                return redirect('user/signin?rt=shop/checkout');

            } else {
                /*  */
                Order::save_new();
                return redirect('shop');



            }

        }
    }

}
