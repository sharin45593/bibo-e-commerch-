@extends('dashboard.dashboard_master')

@section('page_title')
    Add Category
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card p-2">
                    <div class="card-header">
                        Add Category
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                    </div>
                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                     <div class="form-group">
                       <label>Category name</label>
                       <input type="text"  class="@if (session('success')) is-valid @endif @error('category_name') is-invalid @enderror form-control" name="category_name" >
                        @error('category_name')
                            <span class="text-danger">{{ $message}}</span>
                        @enderror
                     </div>
                     <label>Upload category photo</label>
                     <input type="file"  class="@if (session('success')) is-valid @endif @error('category_name') is-invalid @enderror form-control" name="category_photo" >
                     <small class="text-info"> Please upload a photo with width 759px height 415px</small>
                   </div>
                     <div class="form-group">
                        <button type="sunmit" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                        </span>Add</button>

                      </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection
