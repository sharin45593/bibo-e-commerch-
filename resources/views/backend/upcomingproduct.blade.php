
@extends('dashboard.dashboard_master')
@section('page_title')
Upcomming product
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card p-2">
                <div class="card-header">
                Upcomming product
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                </div>
                <div class="card-body">

                <form action="{{ route('upcommingproduct.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                    <label>Upload upcomming product photo</label>
                     <input type="file"  class="form-control" name="product_photo" >
                     <small class="text-info"> Please upload a photo with width 270px height 310px</small>

                </div>
                <div class="form-group">
                    <label>Product name</label>
                    <input type="text" class="form-control" name="product_name">
                 </div>
                 <div class="form-group">
                     <label>product description</label>
                     <textarea id="product_description" class="form-control" name="product_description" rows="4" ></textarea>
                 </div>
                 <div class="form-group">
                     <button class="btn btn-success">Add product</button>
                </div>

               </form>
            </div>
        </div>
      </div>

      <div class="col-12">
        <div class="card p-2">
            <div class="card-header">
               Blog list
            </div>
            <div class="card-body">

                <table class="table table-bordered ">
                    <thead class="thead-inverse">
                        <tr>
                            <th>SL.No</th>
                            <th>New product image</th>
                            <th>Product Name</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($upcomming_products as $key=>$upcomming_product )

                            <tr>
                                <td>{{ $key+1 }}</td>
                               <td>
                                <img class="w-25" src="{{ asset('uploads/product_photo') }}/{{ $upcomming_product->product_photo}}" alt="not found">
                             </td>
                                <td>{{ $upcomming_product->product_name}}</td>
                                <td>{{ \carbon\carbon::now()->format('jS  F Y ') }}</td>
                                <td>
                                    <a href="{{ route('upcomming_products.delete',$upcomming_product->id) }}" class="btn btn-danger waves-effect waves-light">DELETE</a>

                                 </td>


                            </tr>
                            @endforeach


                        </tbody>
                </table>
        </div>
    </div>
  </div>
   </div>




</div>
</div>
@endsection
@section('footer_scripts')
<script>
   $(document).ready(function() {
    $('#product_description').summernote();

    });
</script>
@endsection
