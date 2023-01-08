@extends('layouts.app_frontend')

@section('contant')


    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Welcome, {{ auth()->user()->name }}</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Customer Dashboard</li>
                        @if ( session('success') )
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

<!-- breadcrumb-area end -->

<!-- account area start -->
<div class="account-dashboard pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <!-- Nav tabs -->
                <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                    <ul role="tablist" class="nav flex-column dashboard-list">
                        <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link active">Dashboard</a></li>
                        <li> <a href="#orders" data-bs-toggle="tab" class="nav-link">Orders</a></li>
                        <li><a href="#downloads" data-bs-toggle="tab" class="nav-link">Downloads</a></li>
                        <li><a onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" href="l{{ route('logout') }}" class="nav-link">logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-9">
                <!-- Tab panes -->
                <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                    <div class="tab-pane fade show active" id="dashboard">

                        <h3>Dashboard </h3>

                        Name  : {{ auth()->user()->name }} <br>
                        Email : {{ auth()->user()->email }} <br><hr>
                     @foreach ($orders as $order )
                     <strong>Date: {{ $order->created_at->format('d-M-Y') }}</strong><br>
                     Phone Number: {{ $order->customer_phone_number }}<br>
                     Address     : {{ $order->customer_address }}<br>
                     Country     :{{ $order->customer_country }}<br>
                     City        :{{ $order->customer_city }}<br>
                     Total Amount:{{ $order->grand_total }}<br>
                     @if ($order->coupon_name)
                     Coupon Name :{{ $order->coupon_name }}<br>
                     @endif
                     Coupon Name : No Coupon Used <i class="fa fa-frown-o" aria-hidden="true"></i> <br>
                     @if ($order->customer_notes)
                     Notes       :{{ $order->customer_notes }}<br>
                     @endif
                     Your Notes :  No Notes Used <i class="fa fa-frown-o" aria-hidden="true"></i><hr>
                     @endforeach

                    </div>
                    <div class="tab-pane fade" id="orders">
                        <h4>Orders</h4>
                        <div class="table_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        {{-- <th>Order ID</th> --}}
                                        <th>Order Date</th>
                                        <th>Expected Delivery Date</th>
                                        <th>Delivery Status</th>
                                        <th>Payment Status</th>
                                        {{-- <th>Total</th> --}}
                                        <th>Order Invoice</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($orders as $order)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        {{-- <td>{{ $order->id }}</td> --}}
                                        <td>{{ $order->created_at->format('M d, Y') }}</td>
                                        <td>{{ $order->created_at->addDays(App\Models\Shipping::where('city_name', $order->customer_city)->first()->delivery_days)->format('M d, Y') }}</td>
                                        <td>{{ $order->delivery_status }}</td>
                                        <td>{{ $order->payment_status }}</td>
                                        {{-- <td>{{ $order->grand_total }}</td> --}}
                                        <td>
                                            <a href="{{ route('order.invoice', $order->id) }}" class="view"><i class="fa fa-eye"> View</i></a><br>

                                        </td>
                                    </tr>
                                    @empty
                                    <tr class="text-center text-danger">
                                        <td colspan="50">
                                            No Order To show
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="downloads">
                        <h4>Downloads</h4>
                        <div class="table_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Customer Address</th>
                                        <th>Grand Total</th>
                                        <th>Order Invoice Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($orders as $order)
                                    <tr>
                                       <td>{{ $loop->index+1 }}</td>
                                       <td>{{ $order->customer_address }}</td>
                                       <td>{{ $order->grand_total }}</td>
                                       <td> <a href="{{ route('order.invoice.download', $order->id) }}" class="view"><i class="fa fa-download"> Download</i></a></td>
                                    </tr>
                                    @empty
                                    <tr class="text-center text-danger">
                                        <td colspan="50">
                                            No file To show
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- <div class="tab-pane fade" id="account-details">
                        <h3>Account details </h3>
                        <div class="login">
                            <div class="login_form_container">
                                <div class="account_login_form">
                                    <form action="#">
                                        <p>Already have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#loginActive">Log in instead!</a></p>
                                        <div class="input-radio">
                                            <span class="custom-radio"><input type="radio" value="1"
                                                    name="id_gender"> Mr.</span>
                                            <span class="custom-radio"><input type="radio" value="1"
                                                    name="id_gender"> Mrs.</span>
                                        </div> <br>
                                        <div class="default-form-box mb-20">
                                            <label>First Name</label>
                                            <input type="text" name="first-name">
                                        </div>
                                        <div class="default-form-box mb-20">
                                            <label>Last Name</label>
                                            <input type="text" name="last-name">
                                        </div>
                                        <div class="default-form-box mb-20">
                                            <label>Email</label>
                                            <input type="text" name="email-name">
                                        </div>
                                        <div class="default-form-box mb-20">
                                            <label>Password</label>
                                            <input type="password" name="user-password">
                                        </div>
                                        <div class="default-form-box mb-20">
                                            <label>Birthdate</label>
                                            <input type="date" name="birthday">
                                        </div>
                                        <span class="example">
                                            (E.g.: 05/31/1970)
                                        </span>
                                        <br>
                                        <label class="checkbox-default" for="offer">
                                            <input type="checkbox" id="offer">
                                            <span>Receive offers from our partners</span>
                                        </label>
                                        <br>
                                        <label class="checkbox-default checkbox-default-more-text" for="newsletter">
                                            <input type="checkbox" id="newsletter">
                                            <span>Sign up for our newsletter<br><em>You may unsubscribe at any
                                                    moment. For that purpose, please find our contact info in the
                                                    legal notice.</em></span>
                                        </label>
                                        <div class="save_button mt-3">
                                            <button class="btn"
                                                type="submit">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- account area start -->

@endsection
