@extends('dashboard.dashboard_master')

@section('page_title')
    Add Gallery
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $product_id->product_name }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        Add Gallery
                    </div>
                    <div class="card-body">
                    <form action="{{ route('product.add.gallery.post',$product_id->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                      <div class="form-group">
                        <label>Gallery Photos</label>
                        <input type="file"  class="form-control" name="gallery_photo[]" multiple>
                      </div>

                   </div>
                   <br>
                     <div class="form-group">
                        <button type="sunmit" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                        </span>Add Gallery</button>

                      </div>
                    </form>
                </div>

                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                           <h2> Product Name: </h2>
                        </div>
                        <div class="card-body">
                      <table class="table table-borderd">
                          <thead>
                              <tr>
                                  <th>Color Name</th>
                                  <th>Size Name</th>
                                  <th>Quantity</th>
                                  <th>Market Value</th>

                              </tr>
                          </thead>
                          <tbody>
                              {{-- @foreach ($inventories as $inventory)

                              <tr>
                                 <td>
                                    ({{ $inventory->color_id}}) {{ $inventory->relationwithcolor->color_name}}
                                     <span style="background-color: {{ $inventory->relationwithcolor->color_code}} ">&nbsp;&nbsp;&nbsp;&nbsp;</span>

                                </td>
                                 <td>{{ $inventory->relationwithsize->size_name}}</td>
                                 <td>{{ $inventory->quantity}}</td>
                                 <td>{{ $inventory->quantity* $inventory->relationwithproduct->product_regular_price}}</td>

                              </tr>
                              @endforeach
                              <tr>
                                  <td colspan="1" class="text-center">
                                      <b>Total </b>
                                   <td>
                                  <td>{{ $inventories->sum('quantity')}}</td>
                                  <td>{{ $product->product_regular_price * $inventories->sum('quantity')}}</td>
                              </tr> --}}


                          </tbody>
                      </table>
                    </div>

                    </div>
            </div>
        </div>
    </div>


@endsection


