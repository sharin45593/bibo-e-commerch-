<?php

use App\Models\cart;
use App\Models\Inventory;

function available_stock($product_id,$color_id,$size_id){
    return Inventory::where([
        'product_id'=> $product_id,
        'color_id'=> $color_id,
        'size_id'=> $size_id
    ])->first()->quantity;
}
   function total_cart_amount(){
       echo cart::where('user_id',auth()->id())->count();
   }
?>
