@extends('dashboard.dashboard_master')
@section('page_title')
    Coupon
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card p-2">
                <div class="card-header">
                   Coupon Manager
                </div>
                <div class="card-body">
                    @if (session('value_error'))

                    <div class="alert alert-danger">
                        {{ session('value_error') }}
                    </div>
                    @endif
                <form action="{{ route('coupon.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">

                        <label>Coupon Name</label>
                        <small class="text-red">(Unique Name)</small>
                        <input type="text" class="form-control" name="coupon_name" value="{{ Str::random(4) }}">
                    </div>
                   <div class="form-group">
                        <label>Coupon Type</label>
                        <select name="coupon_type" class="form-control">
                         <option value="">--Select Coupon Type--</option>
                         <option value="1">Percentage</option>
                         <option value="2">Flat Discount</option>


                   </select>
                    </div>
                    <div class="form-group">

                        <label>Coupon Amount</label>
                        <input type="number" class="form-control" name="coupon_amount">
                    </div>

                  <div class="form-group">
                    <label>Coupon Limit</label>
                    <input type="text" class="form-control" name="coupon_limit">
                 </div>

                 <div class="form-group">

                     <label>Coupon Validity</label>
                     <input type="date" class="form-control" name="coupon_validity" min="{{ \carbon\carbon::today()->format('Y-m-d') }}">
                 </div>
                 <div class="form-group">
                     <button class="btn btn-success">Add Coupon</button>
                </div>

               </form>
            </div>
        </div>
      </div>

      <div class="col-8">
        <div class="card p-3">
            <div class="card-header">
               Coupon Chart
            </div>
            <div class="card-body">

                <table class="table table-bordered ">
                    <thead class="thead-inverse">
                        <tr>
                            <th>SL No</th>
                            <th>Coupon Name</th>
                            <th>Coupon Limit</th>
                            <th>Coupon Amount</th>
                            <th>Coupon Validity</th>
                            <th>Coupon Delete</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($coupons as $key=>$coupon )

                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $coupon->coupon_name }}</td>
                                <td>{{ $coupon->coupon_limit }}</td>
                                <td>{{ $coupon->coupon_amount }}{{ ($coupon->coupon_type == 1)?'%':'Tk' }}</td>
                                <td>{{ $coupon->coupon_validity }}</td>
                                <td> <form action="{{ route('coupon.destroy',$coupon->id ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit"> Delete</button>
                                </form>
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
