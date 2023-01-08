@extends('dashboard.dashboard_master')
@section('page_title')
    Edit Category
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card p-2">
                    <div class="card-header">
                        Edit Category
                    </div>
                    <div class="card-body">

                    </div>
                    <form action="{{ route('category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                     <div class="form-group">
                       <label>Category name</label>
                       <input type="text" name="category_name" value="{{ $category->category_name }}" class="form-control">

                     </div>
                     <div class="form-group">
                        <label>Category photo</label>
                       <img class="w-25" src="{{ asset('uploads/category_photo')}}/{{ $category->category_photo}}" alt="not found">
                      </div>
                      <div class="form-group">
                        <label> New Category photo</label>
                        <input type="file" name="category_photo"  class="form-control">

                      </div>
                     <div class="form-group">
                        <button class="btn btn-info">Edit Category</button>

                      </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection
