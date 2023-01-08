@extends('dashboard.dashboard_master')

@section('page_title')
    Add product
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                    <div class="card-header">
                        <b>Add product</b>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                    </div>
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                     <div class="form-group">
                       <label for="product_name">product name</label>
                       <input type="text"  class="form-control" name="product_name" >
                     </div>
                     <div class="form-group">
                        <label for="product_regular_price">product_regular_price</label>
                        <input type="text"  class="form-control" name="product_regular_price" >
                      </div>
                      <div class="form-group">
                        <label for="product_discounted_price">product_discounted_price</label>
                        <input type="text"  class="form-control" name="product_discounted_price" >
                      </div>
                      <div class="form-group">
                        <label for="product_short_description">product_short_description</label>
                        <input type="text"  class="form-control" name="product_short_description" >
                      </div>
                      <div class="form-group">
                        <label for="category">category</label>
                        <select name="category_id" class="form-control" id="category_dropdown" >
                            <option disabled selected value >--Select Category--</option>
                            @foreach ($categories as $category )
                            <option value="{{$category-> id}}">{{$category->category_name}}</option>

                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="subcategory">sub category</label>
                        <select name="subcategory_id" class="form-control" id="subcategory_dropdown" >
                            <option >--Select sub category--</option>


                        </select>
                      </div>
                      <div class="form-group">
                        <label for="product_weight">product_weight</label>
                        <input type="text"  class="form-control" name="product_weight" >
                      </div>
                      <div class="form-group">
                        <label for="product_dimensions">product_dimensions</label>
                        <input type="text"  class="form-control" name="product_dimensions" >
                      </div>
                      <div class="form-group">
                          <label for="product_other_info">product_other_info</label>
                          <textarea id="product_other_info"  class="form-control" name="product_other_info" rows="4" ></textarea>
                        </div>
                        <div class="form-group">
                          <label for="product_materials">product_materials</label>
                          <input type="text"  class="form-control" name="product_materials" >
                        </div>
                      <div class="form-group">
                        <label for="product_long_description">product_long_description</label>
                        <textarea id="product_long_description" class="form-control" name="product_long_description" rows="4" ></textarea>

                      </div>
                      <div class="form-group">
                        <label for="product_thumbnail_photo">product_thumbnail_photo</label>
                        <input type="file"  class="form-control" name="product_thumbnail_photo" >
                      </div>
                      <div class="form-group">
                        <label for="product_video_url">product_video_url</label>
                        <input type="text"  class="form-control" name="product_video_url" >
                      </div>

                     <div class="form-group">
                        <button type="sunmit" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                        </span>Add product</button>

                      </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection
@section('footer_scripts')
<script>
   $(document).ready(function() {

    $('#product_other_info').summernote();
    $('#product_long_description').summernote();
    $('#category_dropdown').select2();
    $('#subcategory_dropdown').select2();
    $('#category_dropdown').change(function(){
      var category_id = $(this).val();
      // Ajax Start
      $.ajaxSetup({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url: '/get/subcategory',
                data:{category_id:category_id},
                success:function(data){
                    data
                    $('#subcategory_dropdown').html(data);
                }
            });
      // Ajax End

    });
});
</script>
@endsection
