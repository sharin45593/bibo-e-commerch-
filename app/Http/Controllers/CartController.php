<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Shipping;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class CartController extends Controller
{
    public function cart(){
      $carts=  cart::where('user_id',auth()->id())->get();
      $countries = shipping::groupBy('country_id')->select('country_id')->get();

       return view('frontend.cart',compact('carts','countries'));
    }
    public function removecart(cart $cart){
         $cart->delete();
         return back();
    }
    public function clearcart(){
        cart::where('user_id',auth()->id())->delete();
         return back();
    }
    public function updatecart(Request $request){
        foreach($request->cart_item as $cart_id=> $user_input_amount){
            cart::find($cart_id)->update([
                'user_input_amount'=> $user_input_amount
            ]);
        }
        return back();
    }
}
