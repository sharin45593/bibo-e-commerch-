@extends('dashboard.dashboard_master')

@section('page_title')
    Add SubCategory
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card p-2">
                    <div class="card-header">
                     Add SubCategory
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                    </div>
                    {{-- <form action="{{ route('subcategory.store') }}" method="POST"> --}}

                        <div class="form-group">
                            <label>Category name</label>
                            <select name="category_id" class="form-control" id="category_dropdown">
                                <option value="">--Select a category--</option>
                                @foreach ($categories as $category )


                                <option value= "{{ $category->id }}" > {{ $category->category_name }} </option>

                                @endforeach

                            </select>
                          </div>
                     <div class="form-group">
                       <label>Sub Category name</label>
                       <input id="sub_category_name" type="text"  class="@if (session('success')) is-valid @endif @error('subcategory_name') is-invalid @enderror form-control" name="subcategory_name" >
                        @error('subcategory_name')
                            <span class="text-danger">{{ $message}}</span>
                        @enderror
                     </div>
                     <div class="form-group">
                        <button id="subcategory_add_btn"  class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                        </span>Add</button>

                      </div>
                    {{-- </form> --}}

                </div>
            </div>
        </div>
    </div>


@endsection
@section('footer_scripts')
 <script>
     $('#subcategory_add_btn').click(function(){
         var category_id = $('#category_dropdown').find(":selected").val();
         var sub_category_name = $('#sub_category_name').val();

         // Ajax Start
      $.ajaxSetup({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url: "{{ route('subcategory.store') }}",
                data:{category_id:category_id,sub_category_name:sub_category_name },
                success: function(data){
                    Swal.fire(
                      'Good job!',
                          'subcategory added  successfully ',
                          'success'
                        )
                        $('#sub_category_name').val("");
                        $('#category_dropdown').val("");

                }
            });
      // Ajax End


     });
 </script>
@endsection
