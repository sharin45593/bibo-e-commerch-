@extends('dashboard.dashboard_master')
@section('page_title')
    Shipping
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card p-2">
                <div class="card-header">
                   Shipping Charge
                </div>
                <div class="card-body">

                <form action="{{ route('add.shipping') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                   <label>Country name</label>
                  <select name="country_id" class="form-control">
                       <option value="">--Select Country--</option>
                       @foreach ($countries as $country )

                       <option value="{{ $country->id}}">{{ $country->country_name }}</option>
                       @endforeach
                   </select>
                </div>
                <div class="form-group">
                    <label>City name</label>
                    <input type="text" class="form-control" name="city_name">

                   {{-- <select name="city_name" class="form-control">
                        <option value="">--Select City--</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select> --}}
                 </div>
                 <div class="form-group">

                     <label>shipping charge</label>
                     <input type="number" class="form-control" name="shipping_charge">
                 </div>
                 <div class="form-group">

                     <label>Delivery_days</label>
                     <input type="number" class="form-control" name="delivery_days">
                 </div>
                 <div class="form-group">
                     <button class="btn btn-success">Add shipping</button>
                </div>

               </form>
            </div>
        </div>
      </div>

      <div class="col-8">
        <div class="card p-2">
            <div class="card-header">
               Shipping Chart
            </div>
            <div class="card-body">

                <table class="table table-bordered ">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Cuntry</th>
                            <th>City</th>
                            <th>Charge</th>
                            <th>Delivery_days</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($shippings as $shipping )

                            <tr>
                                <td>{{ $shipping->relationtocountry->country_name}}</td>
                                <td>{{ $shipping->city_name }}</td>
                                <td>{{ $shipping->shipping_charge }}</td>
                                <td>{{ $shipping->delivery_days }}</td>
                                <td>
                                    <a href="{{ route('shipping.delete',$shipping->id) }}" class="btn btn-danger waves-effect waves-light">Delete</a>

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
