@extends('dashboard.dashboard_master')
@section('page_title')
    Order Chart
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card p-2">
            <div class="card-header">
              <h3> Order Chart</h3>
            </div>
            <div class="card-body">

                <table class="table table-bordered " id="order_list">
                    <thead class="thead-inverse">
                        <tr>
                            <th>SL</th>
                            <th>Customer Name</th>
                            <th>Customer Country</th>
                            <th>Customer Address</th>
                            <th>Payment Method</th>
                            <th>Delivery Status</th>
                            <th>Payment Status</th>
                            <th>Grand Total</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order )

                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $order->customer_name}}</td>
                                <td>{{ $order->customer_country}}</td>
                                <td>{{ $order->customer_address}}</td>
                                <td>{{ $order->payment_method}}</td>
                                <td>{{ $order->delivery_status}}</td>
                                <td>{{ $order->payment_status}}</td>
                                <td>{{ $order->grand_total}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Change Delivery status
                                        </button>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item" href="{{ route('order.charge.delivery.status',[
                                              'order_id'=>$order->id,
                                              'delivery_status'=>'processing'
                                          ]) }}">Processing</a>
                                          <a class="dropdown-item" href="{{ route('order.charge.delivery.status',[
                                              'order_id'=>$order->id,
                                              'delivery_status'=>'pickup'
                                          ]) }}">Pickup</a>
                                          <a class="dropdown-item" href="{{ route('order.charge.delivery.status',[
                                              'order_id'=>$order->id,
                                              'delivery_status'=>'delivered'
                                          ]) }}">Delivered</a>


                                      </div>
                                </td>

                              >


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
       $('#order_list').DataTable();
    });
</script>

@endsection
