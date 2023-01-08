@extends('dashboard.dashboard_master')

@section('page_title')
    Add Inventory
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        Add Inverntory
                    </div>
                    <div class="card-body">
                    <form action="{{ route('product.add.inventory.post',$product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                     <div class="form-group">
                       <label>Color Name</label>
                       @foreach ($colors as $color)

                       <div class="form-check">
                           <label class="form-check-label">
                               <input type="radio" class="form-check-input" name="color_id" id="" value=" {{$color->id}}" >
                             {{$color->color_name}} <span class="badge rounded-circle" style="background-color: {{ $color->color_code}}">&nbsp; &nbsp; &nbsp;</span>
                            </label>
                        </div>
                        @endforeach

                     </div>
                     <div class="form-group">
                        <label>Size </label>
                        <select name="size_id" class="form-control" id="">
                            <option value="">--Select Size--</option>
                            @foreach ($sizes as $size)

                            <option value="{{ $size->id}}">{{ $size->size_name}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Quantity</label>
                        <input type="text"  class="form-control" name="quantity" >
                      </div>

                   </div>
                   <br>
                     <div class="form-group">
                        <button type="sunmit" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                        </span>Add Inventory</button>

                      </div>
                    </form>
                </div>

                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                           <h2> Product Name: {{$product->product_name}} </h2>
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
                              @foreach ($inventories as $inventory)

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
                              </tr>


                          </tbody>
                      </table>
                    </div>

                    </div>
            </div>
        </div>
    </div>


@endsection

