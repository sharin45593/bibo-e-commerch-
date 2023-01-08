@extends('layouts.app_frontend')
@section('contant')
  <!-- breadcrumb-area start -->
  <div class="breadcrumb-area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h2 class="breadcrumb-title">Add to Cart</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Cart</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->

<!-- Cart Area Start -->
<div class="cart-main-area pt-100px pb-100px">
    <div class="container">
        @if (session('success'))

        <div class="alert alert-success">
           {{ session('success') }}
        </div>
        @endif
        <h3 class="cart-page-title">Your cart items</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="{{ route('update.cart')}}" method="POST">
                    @csrf
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Unit Price</th>
                                    <th>Qty</th>
                                    <th>total price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total_amount =0;
                                    $go_next = true;
                                @endphp
                                @forelse ($carts as $cart )

                                <tr>

                                    <td class="product-thumbnail">
                                        <img class="img-responsive ml-15px" src="{{ asset('uploads/product_thumbnail_photo')}}/{{$cart->relationwithproduct->product_thumbnail_photo }}" alt="Not found" />

                                    </td>

                                    <td class="product-name">
                                        {{ $cart->relationwithproduct->product_name}}
                                        <p>color:{{$cart->relationwithcolor->color_name}}</p>
                                        <p>size:{{$cart->relationwithsize->size_name}}</p>
                                        <span style="background-color: {{ $cart->relationwithcolor->color_code}}">&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;</span>
                                    </td>

                                    <td class="product-price-cart"><span class="amount">
                                        @if ($cart->relationwithproduct->product_discount_price)
                                            {{ $unit_price= $cart->relationwithproduct->product_discount_price}}
                                        @else

                                        {{ $unit_price= $cart->relationwithproduct->product_regular_price}}
                                        @endif

                                    </span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="cart_item[{{ $cart->id}}]"
                                                value="{{$cart->user_input_amount}}" />
                                                @if (available_stock ($cart->product_id,$cart->color_id,$cart->size_id)<$cart->user_input_amount)

                                                <span class="badge bg-danger">Out Of Stock</span>
                                                <span class="badge bg-success">Available:{{ available_stock ($cart->product_id,$cart->color_id,$cart->size_id) }}</span>
                                                @php
                                                    $go_next = false;
                                                @endphp
                                                @endif
                                        </div>
                                    </td>
                                    <td class="product-subtotal">{{ $unit_price *$cart->user_input_amount}}</td>
                                    @php
                                        $total_amount  += $unit_price *$cart->user_input_amount;
                                    @endphp
                                    <td class="product-remove">
                                        {{-- <a href="#"><i class="fa fa-pencil"></i></a> --}}
                                        <a href="{{ route('remove.cart',$cart->id)}}"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="50" class="text-center text-danger" >No Product added To Cart</td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="{{ route('shop')}}">Continue Shopping</a>
                                </div>
                                <div class="cart-clear">
                                    <button type="submit">Update Shopping Cart</button>
                                    <a href="{{ route('clear.cart')}}">Clear Shopping Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-lm-30px">
                        <div class="cart-tax">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping </h4>
                            </div>
                            <div class="tax-wrapper">
                                <p>Enter your destination to get a shipping estimate.</p>
                                <div class="tax-select-wrapper">
                                    <div class="tax-select">
                                        <label>
                                            * Country
                                        </label>
                                        <select class="email s-email s-wid" id="country_dropdown">
                                            <option>--Select Country--</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->country_id }}">{{ $country->relationtocountry->country_name }}</option>

                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="tax-select">
                                        <label>
                                            City
                                        </label>
                                        <select class="email s-email s-wid" id="city_dropdown">
                                            <option>--Choose City First--</option>

                                        </select>
                                    </div>
                                    <button class="cart-btn-2" type="submit">Get A Quote</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-lm-30px">
                        <div class="discount-code-wrapper">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                            </div>
                            <div class="discount-code">
                                <p>Enter your coupon code if you have one.</p>
                                <small class="text-danger" id="coupon_error"></small>

                                    <input type="text" id="coupon_input">

                                    <button id="apply_coupon_btn" class="cart-btn-2" type="submit">Apply Coupon</button>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-md-30px">

                        <div class="grand-totall">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                            </div>
                            <h5>Total Amount <span id="total_amount">{{$total_amount}}</span></h5>
                            <h5>(-)Coupon Discount <span id="discount_amount">0</span></h5>
                            <h5>(+)Shipping <span id="shipping_charge">0</span></h5>
                            <h4 class="grand-totall-title">Grand Total <span id="grand_total">{{$total_amount}}</span></h4>
                            @if ($go_next)
                            <div class="discount-code-wrapper p-0">
                            <div class="discount-code">
                               <button id="checkout_btn" class="cart-btn-2 d-none">Proceed to Checkout</button>
                            </div>
                            </div>
                            @else
                              <div class="alert alert-danger">
                                  Please take care of stock out product
                              </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cart Area End -->
@endsection
@section('footer_scripts')
<script>
 $(document).ready(function(){
    $('#country_dropdown').change(function(){
      var country_id = $(this).val();
      // Ajax Start
      $.ajaxSetup({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url: '/get/city',
                data:{country_id:country_id},
                success:function(data){
                    data
                    $('#city_dropdown').html(data);
                }
            });
      // Ajax End
      $('#checkout_btn').addClass('d-none');
      $('#shipping_charge').html(0);
      var grand_total = parseInt($('#total_amount').html()) - parseInt($('#discount_amount').html()) + parseInt($('#shipping_charge').html());
                    $('#grand_total').html(grand_total);
    });
    $('#city_dropdown').change(function(){
        $('#shipping_charge').html($(this).val());
        var total_amount = $('#total_amount').html();
        var shipping_charge = $('#shipping_charge').html();
        $('#grand_total').html(parseInt(total_amount)+ parseInt(shipping_charge));
        $('#checkout_btn').removeClass('d-none');
        var grand_total = parseInt($('#total_amount').html()) - parseInt($('#discount_amount').html()) + parseInt($('#shipping_charge').html());
        $('#grand_total').html(grand_total);
    });
    $('#apply_coupon_btn').click(function(){
        var coupon_name = $('#coupon_input').val();
        var total_amount = parseInt($('#total_amount').html());

          // Ajax Start
      $.ajaxSetup({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url: '/check/coupon',
                data:{coupon_name:coupon_name,total_amount:total_amount},
                success:function(data){
                   if(data.error){

                       $('#coupon_error').html(data.error);
                       $('#coupon_input').val(" ");
                   }else{

                    $('#discount_amount').html(data.good);
                    $('#coupon_error').html(" ");
                    var grand_total = parseInt($('#total_amount').html()) - parseInt($('#discount_amount').html()) + parseInt($('#shipping_charge').html());
                    $('#grand_total').html(grand_total);
                   }

                }
            });
      // Ajax End
      if(!coupon_name){
        $('#discount_amount').html(0);
        var grand_total = parseInt($('#total_amount').html()) - parseInt($('#discount_amount').html()) + parseInt($('#shipping_charge').html());
                    $('#grand_total').html(grand_total);
      }
    });
    $('#checkout_btn').click(function(){
     var total_amount= $('#total_amount').html();
     var discount_amount= $('#discount_amount').html();
     var shipping_charge= $('#shipping_charge').html();
     var grand_total= $('#grand_total').html();
     var country_id= $('#country_dropdown').val();
     var city_name= $('#city_dropdown').find(":selected").text();
     var coupon_name= $('#coupon_input').val();

        // Ajax Start
        $.ajaxSetup({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url: '/checkout/redirect',
                data:{total_amount:total_amount,discount_amount:discount_amount,shipping_charge:shipping_charge,grand_total:grand_total,country_id:country_id,city_name:city_name,coupon_name:coupon_name},
                success:function(data){
                    window.location.href='checkout';
                }

            });
      // Ajax End
    });

 });
</script>
@endsection
