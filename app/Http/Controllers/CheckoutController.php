<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Country;
use App\Models\Inventory;
use App\Models\Newordersummeries;
use App\Models\Order_details;
use App\Models\Order_summery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function checkout(){
        if(session('s_total_amount')){
            return view('frontend.checkout');
        }
        else{
            return redirect('cart');
        }
    }
    public function checkoutpost(Request $request){
        $request->validate([
            'customer_address' => 'required',
            'customer_phone_number' => 'required',
           ]);



        // step1:insert into order summery table
       $order_summery_id= Newordersummeries::insertGetId([
            'user_id'=> auth()->id(),
            'customer_name'=>$request->customer_name,
            'customer_email'=>$request->customer_email,
            'customer_country'=> Country ::find( session('s_country_id'))->country_name,
            'customer_city'=> session('s_city_name'),
            'customer_address'=>$request->customer_address,
            'customer_phone_number' =>$request->customer_phone_number,
            'customer_notes' =>$request->customer_notes,
            'total_amount'=>session('s_total_amount'),
            'discount_amount' =>session('s_discount_amount'),
            'shipping_charge'=>session('s_shipping_charge'),
            'grand_total'=>session('s_grand_total'),
            'coupon_name'=>session('s_coupon_name'),
            'payment_method'=>$request->payment_method,
            'payment_status'=>'pending',
            'created_at'=> Carbon::now()


        ]);

        //step2:insert all order product
        foreach(Cart::where('user_id',auth()->id())->get() as $cart){

            order_details::insert([
                'order_summery_id'=>$order_summery_id,
                'product_id'=>$cart->product_id,
                'size_id'=>$cart->size_id,
                'color_id'=>$cart->color_id,
                'amount'=>$cart->user_input_amount,
                'created_at'=> Carbon::now()

            ]);
            //step3:minus from inventory
             Inventory::where([
                'product_id'=>$cart->product_id,
                'size_id'=>$cart->size_id,
                'color_id'=>$cart->color_id,
             ])->decrement('quantity',$cart->user_input_amount);
            //step4:delete from cart
            $cart->delete();
        }
        if($request->payment_method == 'online'){
            Session::put('s_order_summery_id',$order_summery_id);
            return redirect('pay');
       }
       else{

           Session::forget('s_total_amount');
           Session::forget('s_discount_amount');
           Session::forget('s_shipping_charge');
           Session::forget('s_grand_total');
           Session::forget('s_country_id');
           Session::forget('s_city_name');
           Session::forget('s_coupon_name');

           return redirect('cart')->with('success','Order placed Successfully');
       }
    }
}



























