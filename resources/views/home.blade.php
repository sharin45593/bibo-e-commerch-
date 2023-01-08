@extends('dashboard.dashboard_master')

@section('page_title')
Dashboard Home
@endsection

@section('content')

<div class="row">
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-danger">
            <div class="card-body  p-4">
                <div class="media">
                    <span class="mr-3">
                        <i class="fa fa-list"></i>
                    </span>
                    <div class="media-body text-white text-right">
                        <p class="mb-1">Category</p>
                        <h3 class="text-white">{{$total_active_category}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-info">
            <div class="card-body p-4">
                <div class="media">
                    <span class="mr-3">
                        <i class="flaticon-381-heart"></i>
                    </span>
                    <div class="media-body text-white text-right">
                        <p class="mb-1">Sub Category</p>
                        <h3 class="text-white">{{ $total_active_subcategory}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-success">
            <div class="card-body p-4">
                <div class="media">
                    <span class="mr-3">
                        <i class="fa fa-users"></i>
                    </span>
                    <div class="media-body text-white text-right">
                        <p class="mb-1">User</p>
                        <h3 class="text-white">{{$total_users}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-primary">
            <div class="card-body p-4">
                <div class="media">
                    <span class="mr-3">
                        <i class="fa fa-cubes"></i>
                    </span>
                    <div class="media-body text-white text-right">
                        <p class="mb-1">Product</p>
                        <h3 class="text-white">{{ $total_products }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-primary">
            <div class="card-body p-4">
                <div class="media">
                    <span class="mr-3">
                        <i class="fa fa-money"></i>
                    </span>
                    <div class="media-body text-white text-right">
                        <p class="mb-1">Total Sale</p>
                        <h3 class="text-white">{{  $total_sale }}TK</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-primary">
            <div class="card-body p-4">
                <div class="media">
                    <span class="mr-3">
                        <i class="fa fa-hourglass-1"></i>
                    </span>
                    <div class="media-body text-white text-right">
                        <p class="mb-1"> Total Pending</p>
                        <h3 class="text-white">{{   $total_pending }}TK</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-3">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Paid VS Pending Chart</h4>
            </div>
            <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="paid_panding_chart" style="display: block; width: 600px; height: 100px;" class="chartjs-render-monitor" width="600" height="100"></canvas>
            </div>
        </div>
    </div>


</div>
@endsection
@section('footer_scripts')
<script>
   const labels = [
    'paid',
    'pending',

  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'My First dataset',
      backgroundColor: [

    'rgb(17, 120, 27)','rgb(242, 113, 104)'

    ],

      borderColor: 'rgb(255, 99, 132)',
      data: [{{ $paid_order }}, {{ $pending_order }}],
    }]
  };

  const config = {
    type: 'doughnut',
    data: data,
    options: {}
  };
  const myChart = new Chart(
    document.getElementById('paid_panding_chart'),
    config
  );


</script>
@endsection
