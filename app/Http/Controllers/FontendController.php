<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FontendControllerphp;
use App\Models\Blog;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Channel;
use App\Models\Color;
use App\Models\Coupon;
use App\Models\Inventory;
use App\Models\Order_details;
use App\Models\Product;
use App\Models\Product_gallery_photo;
use App\Models\Shipping;
use App\Models\Size;
use App\Models\Subcategory;
use App\Models\Upcommingproduct;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Session;

// use Illuminate\Contracts\Session;


class FontendController extends Controller
{
    public function index(){
      $categories= category::all();
      $products= product::latest()->take(8)->get();
      $total_products = product::count();
      $upcomming_products= upcommingproduct::all();
      $total_newproducts =upcommingproduct::count();
         return view('frontend.index',compact('categories','products','total_products','upcomming_products','total_newproducts'));

    }
    public function about(){

         return view('frontend.about');

    }
    public function faq(){

         return view('frontend.faq');

    }
    public function shop(){
       if(isset($_GET['ss'])) {
            $products = product::where('product_name','LIKE','%'. $_GET['ss'].'%')
            ->orwhere('product_long_description','LIKE','%'. $_GET['ss'].'%')->get();
       }
        else{
            $products= product::all();

        }
        if(isset($_GET['min']) && ($_GET['max'])){
        $q1 = product::whereBetween('product_discounted_price',[$_GET['min'],$_GET['max']])->get();
        $q2 = product::whereNull('product_discounted_price')->whereBetween('product_regular_price',[$_GET['min'],$_GET['max']])->get();
        $products = $q1->merge($q2);
    }
         $categories= category::all();
        $total_products =product::count();
        $colors= Color::all();
        $sizes = Size::all();
        return view('frontend.shop',compact('products','total_products','categories','colors','sizes'));

      }


    public function categorydetails($slug){

    $category_info = category::where('slug',$slug)->first();
    $child_categorys =Subcategory::where('category_id',$category_info->id)->get();
    $subcategory_info = Subcategory::where('category_id',category::where('slug',$slug)->first()->id)->get();
    $total_products= Subcategory::count();
    $subcategory_single = Subcategory::where('category_id',category::where('slug',$slug)->first()->id)->get();


    return view('frontend.categorydetails',compact('category_info' ,'subcategory_info','child_categorys','total_products'));

     }
     public function productdetails($slug){

         session()->forget('maria');
        $product_detail = product::where('slug', $slug)->first();
        $related_products = product::where('category_id',$product_detail->category_id)->where('id','!=',$product_detail->id)->get();
        $products=product::all();
        $colors= Inventory::where('product_id',$product_detail->id)->groupBy('color_id')->select('color_id')->get();
        $product_gallery_photos= product_gallery_photo::where('product_id',$product_detail->id)->get();
        return view('frontend.productdetails',compact('product_detail','related_products','colors','product_gallery_photos'));

         }
    public function about_me(){
        $title='about me';
        return view ('about-me',compact('title'));
    }

    public function contact_us (){
        $title='contact-us';
        return view('contact-us' ,compact('title'));
    }
 // page controller
    public function media(){

        $tvs=Channel:: latest()->get();
        $title='media';
        $delete_channels= channel::onlyTrashed()->latest()->get();
        return view ('media',compact('tvs','title','delete_channels'));
    }

    // data insert controller
    public function media_insert(Request $request)
    {

        $request->validate([
            'channel_name' => 'required|alpha'
        ],[
            'channel_name.required' => 'Name dibi kina bol?',
            'channel_name.alpha' => 'sudu latter daw'

        ]);

        channel:: insert([
            'channels_name' => $request->channel_name,
            'created_at'=> carbon::now()
        ]);

       return back()->with('success_message' ,  $request->channel_name.' added suceessfully');
    }

    // data delete controller
  public function channel_delete($channel_id)
  {

        channel:: findOrFail($channel_id)->delete();
          return back()->with('delete_message', 'Deleted successfully');
  }

  public function channel_edit($channel_id)
  {
      $title='channel Edit';
      $channel_info= channel::find($channel_id);
      return view('channel-edit' , compact('title','channel_info'));
  }
  public function media_update (Request $request, $channel_id)
  {
     $old_name =channel::find($channel_id)-> channels_name;
     channel:: find($channel_id)->update([
        'channels_name'=> $request->channel_name
      ]);

      return redirect('media')->with('update_message' ,  $old_name.  'Channel Updated at successfully to ' .$request->channel_name);
  }
    public function channel_restore($channel_id)
    {
        channel::onlyTrashed()->find($channel_id)->restore();
        return back();
    }
 public function channel_delete_forever($channel_id)
 {
     channel::onlyTrashed()->find($channel_id)->forceDelete();
     return back();
 }
 public function channel_delete_all_forever()
 {
     channel:: onlyTrashed()->forceDelete();
     return back();
 }
public function getsize(Request $request){
    $strtosend ="<option value=''>--Select Size--</option>";
    $sizes = Inventory::where([
        'product_id' =>$request->product_id,
        'color_id'=> $request->color_id
    ])->get();
    foreach( $sizes as $size){
        $strtosend .= "<option value='". $size->relationwithsize->id . "'>" . $size->relationwithsize->size_name ." </option> ";
    }
    echo $strtosend;

}
public function getstock(Request $request){
  echo  Inventory::where([
         'product_id'  => $request->product_id,
         'color_id'  => $request->color_id,
        'size_id'  => $request->size_id,
     ])->first()->quantity;



}
public function addtocart(Request $request)
{

     $checker = cart::where([
      'product_id'=> $request->product_id,
      'color_id' => $request->color_id,
      'size_id'=>  $request->size_id,
       'user_id'=> $request->user_id,

    ])->exists();
    if( $checker ){
        $checker = cart::where([
         'product_id'=> $request->product_id,
         'color_id' => $request->color_id,
         'size_id'=>  $request->size_id,
          'user_id'=> $request->user_id,

       ])->increment('user_input_amount',$request->user_input_amount);

    }
    else{

          cart::insert([
          'product_id'=> $request->product_id,
          'color_id' => $request->color_id,
          'size_id'=>  $request->size_id,
           'user_input_amount' => $request->user_input_amount,
           'user_id'=> $request->user_id,
           'created_at'=> Carbon::now()
        ]);
    }
    echo "done";

}
public function getcity(Request $request){

    $str_to_send = "<option value=''>--select city--</option>";
   $cities = shipping::where('country_id',$request->country_id)->get();
   foreach($cities as $city){
    $str_to_send .="<option value='$city->shipping_charge'>$city->city_name</option>";
   }
   echo $str_to_send;
}
public function checkcoupon(Request $request){

 $exists_check= coupon::whereRaw("BINARY `coupon_name`= ?",[$request->coupon_name])->exists();
 if($exists_check){
  $coupon= coupon::whereRaw("BINARY `coupon_name`= ?",[$request->coupon_name])->first();
  if($coupon->coupon_limit ==0){
    return response()->json(['error'=>'This Coupon Limit Is Over']);
  }
  else{
      if($coupon->coupon_validity < carbon::today()){
        return response()->json(['error'=>'This Coupon Validity Is Over']);
      }
      else{
          if($coupon->coupon_type== 1){
            $discount_amount = ($request->total_amount/100)* $coupon->coupon_amount;
              return response()->json(['good'=>$discount_amount]);
          }
          else{
              if($request->total_amount < $coupon->coupon_amount ){
                return response()->json(['error'=>'Discount can not be more than total amount,Please shop more!!']);
              }
              else{
                $discount_amount = $coupon->coupon_amount;
                  return response()->json(['good'=> $discount_amount]);
              }
          }
      }

  }
 }
     else{
        return response()->json(['error'=>'This Coupon Does Not Exists In Our Records']);
     }


}





public function blog(){
     $blogs= blog::all();
    return view('frontend.blog',compact('blogs'));

}
public function blogsingle(blog $blog){
    return view('frontend.blog_single',compact('blog'));
}

public function checkoutredirect(Request $request){

  Session::put('s_total_amount', $request->total_amount);
  Session::put('s_discount_amount', $request->discount_amount);
  Session::put('s_shipping_charge', $request->shipping_charge);
  Session::put('s_grand_total', $request->grand_total);
  Session::put('s_country_id', $request->country_id);
  Session::put('s_city_name', $request->city_name);
  Session::put('s_coupon_name', $request->coupon_name);


     echo "session set";

}

 // Order Invoice //
 public function orderinvoice($order_id){
    $order_details = order_details::where('order_summery_id', $order_id)->get();
    return view('frontend.order.invoice', compact('order_details'));

}
 public function orderinvoicedownload($order_id){


    $order_details = order_details::where('order_summery_id', $order_id)->get();
    $pdf = PDF::loadView('frontend.order.invoice', compact('order_details'));
    return $pdf->download('Orderinvoice.pdf');



}


public function upcommingproductssingle(upcommingproduct $upcomingproduct){

    return view('frontend.upcommingproductssingle',compact('upcomingproduct'));
}


}
