<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;


class CategoryController extends Controller
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
    public function index()
    {
        return view('category.index',[
            'categories'=> category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $request-> validate([
            'category_name'=>'required|unique:categories,category_name',
            'category_photo'=> 'image',
            // dimensions:max_width=600,max_height=328
]);



         $category_id= category::insertGetId([
            'category_name'=> $request->category_name,
            'slug'=> Str::slug($request->category_name),
            'created_at'=> Carbon::now()
         ]);
        if($request->hasFile('category_photo')){
            //image uplode start
          $new_name= $category_id.".".$request->file('category_photo')->getClientOriginalExtension();
          Image::make($request->file('category_photo'))->resize(600,328)->save(base_path('public/uploads/category_photo/'.$new_name));
         //image upload end
         category::find($category_id)->update([
             'category_photo'=> $new_name
         ]);
        }
        return back()->with('success','category Added Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        return view('category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
         //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        $old_name= $category->category_name;
        //option1
        // $category->update([
        //     'category_name'=> $request->category_name

        // ]);
        // return redirect('category');
        //option2

        $category->category_name =  $request->category_name;
        $category->save();
    if($request->hasFile('category_photo')){
        if($category->category_photo != 'default-category-photo.jpg'){
            $this_path = public_path('/uploads/category_photo/'.$category->category_photo);
           unlink($this_path);
       }
        //image uplode start
        $new_name= $category->id.".".$request->file('category_photo')->getClientOriginalExtension();
        Image::make($request->file('category_photo'))->resize(759,415)->save(base_path('public/uploads/category_photo/'.$new_name));
       //image upload end
       category::find($category->id)->update([
        'category_photo'=> $new_name
         ]);

    }

        return redirect('category')->with('success', $old_name. 'category update successfully to' .$request->category_name);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
    //    $category->delete();
    //    return back();
    }
    public function harddelete(category $category)
    {
        if($category->category_photo != 'default-category-photo.jpg'){
             $this_path = public_path('/uploads/category_photo/'.$category->category_photo);
            unlink($this_path);
        }
         $category->forceDelete();
        return back();
    }
}
