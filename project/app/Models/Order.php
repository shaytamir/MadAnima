<?php
namespace App\Models;





use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
// use Cart;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    static public function save_new(){

        $cartColaction = Cart::getContent();
        $cart = $cartColaction ->toArray();
        $order = new self();
        $order->user_id = Session::get('user_id') ;
        $order->data = serialize($cart);
        $order->total = Cart::getTotal();
        $order->save();
        Cart::clear();
        Session::flash('sm','Thanks,your order saved');

    }
    static public function getOrders(){

        $sql = "SELECT o.*,u.name FROM orders o "
                ."JOIN users u ON u.id = o.user_id "
                ."ORDER BY o.created_at DESC";

        return DB::select($sql);
    }

}