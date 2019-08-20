<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Products_model;
class CartController extends Controller
{
    public function index(){
        $cartItems = Cart::content();
        return view('cart.index',compact('cartItems'));
    }

    public function addItem($id){
        $product = Products_model::findOrFail($id);
        Cart::add($id,$product->pro_name,1,$product->pro_price,['img' => $product->image,'stock' => $product->stock]);
        return back();
    }
}
