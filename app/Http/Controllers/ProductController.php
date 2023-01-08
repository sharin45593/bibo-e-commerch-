<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Inventory;
use App\Models\Size;
use App\Models\Product;
use App\Models\Product_gallery_photo;
use App\Models\Subcategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Intervention\Image\Size as ImageSize;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkrole');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->category_id && $request->sub_category_name){
        $subcategory_id= Subcategory::where('subcategory_name','like','%'. $request->sub_category_name.'%')->first()->id;
        $products= product::where([
            'category_id'=> $request->category_id,
            'subcategory_id'=> $subcategory_id
       ])->latest()->get();
         }
         else{

        $products= product::latest()->get();
    }
        if(isset($request->category_id)){

        $products= product::where('category_id',$request->category_id)->latest()->get();
    }
    else{

        $products= product::latest()->get();
    }

    if(isset($request->sub_category_name)){

        $subcategory_id= Subcategory::where('subcategory_name','like','%'. $request->sub_category_name.'%')->first()->id;
        $products= product::where('subcategory_id',$subcategory_id)->latest()->get();
    }
    else{

        $products= product::latest()->get();
    }

       $categories= category::latest()->get();
        return view('product.index',compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create',[
            'categories'=> category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $slug = Str::slug($request->product_name)."-".Str::random(5);
         $sku =  Str::lower(Str::substr($request->product_name,0,3).rand());
        $product_id = product::insertGetId( $request->except('_token')+[
            'slug'=> $slug,
            'product_sku'=> $sku,
            'created_at'=> Carbon::now()
        ]);
        if($request->hasFile('product_thumbnail_photo')){
            //image uplode start
          $new_name= $product_id.".".$request->file('product_thumbnail_photo')->getClientOriginalExtension();
          Image::make($request->file('product_thumbnail_photo'))->resize(270,310)->save(base_path('public/uploads/product_thumbnail_photo/'.$new_name));
         //image upload end
         product::find($product_id)->update([
             'product_thumbnail_photo'=> $new_name
         ]);
        }
        return back();
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        $product=  product::all();
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        $product->delete();
        return back();
    }
    public function getsubcategory(Request $request){
        foreach(Subcategory:: where('category_id',$request->category_id)->get() as $subcategory){
           // echo $subcategory->subcategory_name;
           echo    "<option value='$subcategory->id'>$subcategory->subcategory_name</option>";
        }

    }

    public function color(){
        $colors = color::all();
      return view('product.color',compact('colors'));

    }
    public function colorstore(Request $request){
       Color::insert($request->except('_token')+[
           'created_at'=> Carbon::now()
       ]);
       return back();
      }
    public function colordelete(color $id){
        $id->delete();
        return back();

      }
      public function size(){
        $sizes = size::all();
      return view('product.size',compact('sizes'));

    }
    public function sizestore(Request $request){
        Size::insert($request->except('_token')+[
            'created_at'=> Carbon::now()
        ]);
        return back();
       }
       public function sizedelete(size $id){
        $id->delete();
        return back();

      }


      public function addinventory($product_id){
          $product = product::find($product_id);
          $colors = Color::all();
          $sizes = size::all();
          $inventories = Inventory::where('product_id', $product_id)->get();
          return view('product.addinventory',compact('colors','sizes','product','inventories'));


      }
      public function addinventorypost(Request $request, $product_id){
       $exists_check = Inventory::where([
            'product_id'=> $product_id,
            'color_id'=> $request->color_id,
            'size_id'=> $request->size_id
          ])->exists();

          if($exists_check==1){

            Inventory::where([
                'product_id'=> $product_id,
                'color_id'=> $request->color_id,
                'size_id'=> $request->size_id
              ])->increment('quantity',$request->quantity);

          }
          else{

                Inventory::insert($request->except('_token') +[
                  'product_id'=> $product_id,
                  'created_at'=> Carbon::now()
              ]);
          }

    return back();

    }
    public function addgallery(Product $product_id){
        return view('product.addgallery',compact('product_id'));
    }
    public function addgallerypost(Request $request, $product_id){
        // return $request->gallery_photos;
        foreach($request->gallery_photo as $gallery_photo){
         //image uplode start
          $new_name= Str::random(15).".".$gallery_photo->getClientOriginalExtension();
          Image::make($gallery_photo)->resize(800,800)->save(base_path('public/uploads/product_gallery_photos/'.$new_name));
         //image upload end
         product_gallery_photo::insert([
          'product_id'=> $product_id,
          'product_gallery_photo_name'=> $new_name

         ]);
        }
        return back();
    }
}
