@extends('layouts.app_frontend')
@section('contant')
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Shop</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->


    <!-- checkout area start -->
    <div class="checkout-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <h3>Billing Details</h3>
                        <form action="{{ route('checkout.post') }}" method="POST">
                            @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Name</label>
                                    <input type="text" value="{{ auth()->user()->name }}" name="customer_name" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Email</label>
                                    <input type="text" value="{{ auth()->user()->email }}" name="customer_email" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Country</label>
                                    <input type="text" value="{{ App\Models\Country::find(session('s_country_id'))->country_name }}" readonly />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>City</label>
                                    <input type="text" value="{{ session('s_city_name') }}" readonly />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Address</label>
                                    <input class="billing-address" placeholder="House number and street name"
                                        type="text" name="customer_address" />
                                         {{-- Error Message--}}
                                    @error('customer_address') <p class="ps-1 text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Phone Number</label>
                                    <input type="tel"  value="{{ auth()->user()->phone_number }}" name="customer_phone_number"  />
                                     {{-- Error Message--}}
                                     @error('customer_phone_number') <p class="ps-1 text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="additional-info-wrap">
                            <h4>Additional information</h4>
                            <div class="additional-info">
                                <label>Order notes</label>
                                <textarea placeholder="Notes about your order, e.g. special notes for delivery. "
                                name="customer_notes" ></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                    <div class="your-order-area">
                        <h3>Your order</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Product</li>
                                        <li>Total</li>
                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Total Amount</li>
                                        <li>{{ session('s_total_amount') }}</li>
                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Discount Amount</li>
                                        <li>{{ session('s_discount_amount') }}</li>
                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Shipping Charge</li>
                                        <li>{{ session('s_shipping_charge') }}</li>
                                    </ul>
                                </div>

                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Grand_Total</li>
                                        <li>{{ session('s_grand_total') }} Tk</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="payment-method">
                                  <h3>Payment Method</h3>
                                  <select name="payment_method" id="" class="form-control">
                                      {{-- <option value="0">--Select One Payment Method--</option> --}}
                                      <option value="cod">Cash On Delivary (COD)</option>
                                      <option value="online">Online Payment (Card,Bkash)</option>
                                  </select>
                            </div>
                        </div>
                        <div class="mt-25">
                            <div class="discount-code-wrapper p-0">
                                <div class="discount-code text-center mb-5">
                                   <button type="submit" class="cart-btn-2">Place Order</button>
                                </div>
                                </div>

                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout area end -->

@endsection
