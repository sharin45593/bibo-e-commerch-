<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use App\Models\Country;
use App\Models\New_order_summeries;
use App\Models\Shipping;
use App\Models\Subcategory;
use App\Models\Upcommingproduct;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Hash;
use  Image;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkrole');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       if(session('maria')){
           return redirect(session('maria'));
       }
       $total_active_category = Category::count();
       $total_active_subcategory = Subcategory::count();
       $total_users = User::count();
       $total_products = User::count();
       $total_sale = new_order_summeries::where('payment_status','paid')->sum('grand_total');
       $total_pending = new_order_summeries::where('payment_status','pending')->sum('grand_total');
       $paid_order = new_order_summeries::where('payment_status','paid')->get('payment_status')->count();
       $pending_order = new_order_summeries::where('payment_status','pending')->get('payment_status')->count();

       return view('home', compact('total_active_category','total_active_subcategory','total_users','total_products','total_sale','total_pending','paid_order','pending_order'));
    }
    public function profile()
    {
        return view('profile.index');
    }
    public function changename(Request $request)
    {
        user::find(auth()->id())->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
        ]);
        if($request->hasFile('profile_photo')){
            //image uplode start
          $new_name= auth()->id().".".$request->file('profile_photo')->getClientOriginalExtension();
          Image::make($request->file('profile_photo'))->resize(196,196)->save(base_path('public/uploads/profile_photo/'.$new_name));
         //image upload end
         user::find(auth()->id())->update([
            'profile_photo' => $new_name

        ]);
        }

        return back()->with('success','Changed Successfully!');
    }

    public function changepassword(Request $request) {
        if(Hash::check($request->current_password, auth()->user()->password)){
           if($request->password != $request->password_confirmation){
            return back()->with('error','New password does not matched with our confirm password!');

           }
           else{
               user::find(auth()->id())->update([
                   'password' => bcrypt($request->password)
               ]);
               return back()->with('success','password changed successfully!');

           }
        }
        else{

            return back()->with('error','current password does not matched with our records!');
        }

    }
    public function shipping(){
       $countries = country::all();
       $shippings = shipping::all();
        return view('backend.shipping',compact('countries','shippings'));
    }
    public function addshipping(Request $request){
        shipping::insert($request->except('_token')+[
            'created_at'=> Carbon::now()
        ]);
        return back();
    }
    public function shippingdelete(shipping $shipping){

        $shipping->delete();
        return back();
     }
    public function backblog(){
         $blogs =blog::all();
        return view('backend.addblog',compact('blogs'));
    }

    public function blogstore(Request $request){

        $blogId= blog::insertGetId($request->except('_token')+[
            'blog_title'=>$request->blog_title,
            'blog_description'=>$request->blog_description,
            'created_at'=> Carbon::now()
        ]);

        // image start
        $image_name = $blogId.".". $request->file('blog_photo')->getClientOriginalExtension();
        Image::make($request->file('blog_photo'))->resize(700,520)->save(base_path('public\uploads\blog_photo/'. $image_name));
        //image end
        if(  $request->hasFile('blog_photo')){
            blog::find( $blogId)->update([
                'blog_photo'=> $image_name,
            ]);
            return back();
           }
        }

    public function blogdelete(blog $id){

        $id->delete();
        return back();
     }

     public function orderindex(){
        $orders= new_order_summeries::latest()->get();;
       return view('backend.order',compact('orders'));
       }
    public function orderchargedeliverystatus(new_order_summeries $order_id,$delivery_status){

         $order_id->delivery_status = $delivery_status;
         if($delivery_status== 'delivered'){
            $order_id->payment_status ='paid';
         }
         else{
            $order_id->payment_status ='pending';
         }
         $order_id->save();
         return back();
     }



     //upcomming product
     public function upcomingproduct(){
        $upcomming_products =upcommingproduct::all();
       return view('backend.upcomingproduct',compact('upcomming_products'));
   }

   public function upcommingproductstore(Request $request){

    $productId= upcommingproduct::insertGetId($request->except('_token')+[
        'product_name'=>$request->product_name,
        'product_description'=>$request->product_description,
        'created_at'=> Carbon::now()
    ]);

    // image start
    $image_name = $productId.".". $request->file('product_photo')->getClientOriginalExtension();
    Image::make($request->file('product_photo'))->resize(270,310)->save(base_path('public\uploads\product_photo/'. $image_name));
    //image end
    if(  $request->hasFile('product_photo')){
        upcommingproduct::find( $productId)->update([
            'product_photo'=> $image_name,
        ]);
        return back();
       }
    }
    public function upcomming_productsdelete(upcommingproduct $id){

        $id->delete();
        return back();
     }

    }
