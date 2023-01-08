@extends('layouts.app_frontend')
@section('contant')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Faq</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Faq</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->

    <!--Faq Policy area start-->
    <div class="login-register-area pb-100px pt-100px faq-area">
        <div class="container">
            <div class="row">
                <div class="ml-auto mr-auto col-lg-9">
                    <div class="checkout-wrapper">
                        <div class="inner-descripe" data-aos="fade-up" data-aos-delay="200">
                            <h4 class="title">Below are frequently asked questions, you may find the answer for yourself

                            </h4>
                            <button class="btn btn-lg btn-primary btn-hover-dark">General</button>
                        </div>
                        <div id="faq" class="panel-group">
                            <div class="panel panel-default single-my-account" data-aos="fade-up" data-aos-delay="200">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>1 .</span> <a data-bs-toggle="collapse" href="#my-account-1" class="collapsed" aria-expanded="true">Are there any minmum order requirements?</a></h3>
                                </div>
                                <div id="my-account-1" class="panel-collapse collapse show" data-bs-parent="#faq">
                                    <div class="panel-body">
                                       No
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default single-my-account" data-aos="fade-up" data-aos-delay="200">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>2 .</span> <a data-bs-toggle="collapse" href="#my-account-2" aria-expanded="false" class="collapsed">How can I contact you?</a></h3>
                                </div>
                                <div id="my-account-2" class="panel-collapse collapse" data-bs-parent="#faq">
                                    <div class="panel-body">Direct call/ticket/Live chat
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default single-my-account" data-aos="fade-up" data-aos-delay="200">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>3 .</span> <a data-bs-toggle="collapse" href="#my-account-3">My order is incorrect. What do I do?</a></h3>
                                </div>
                                <div id="my-account-3" class="panel-collapse collapse" data-bs-parent="#faq">
                                    <div class="panel-body">
                                        Call us or create a ticket
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default single-my-account" data-aos="fade-up" data-aos-delay="200">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>4 .</span> <a data-bs-toggle="collapse" href="#my-account-4">Can I order over phone?</a></h3>
                                </div>
                                <div id="my-account-4" class="panel-collapse collapse" data-bs-parent="#faq">
                                    <div class="panel-body">
                                        Yes, Our hotline is ***********
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default single-my-account" data-aos="fade-up" data-aos-delay="200">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>5 .</span> <a data-bs-toggle="collapse" href="#my-account-5">How does the site work?</a>
                                    </h3>
                                </div>
                                <div id="my-account-5" class="panel-collapse collapse" data-bs-parent="#faq">
                                    <div class="panel-body">
                                        Select your desired items>Add to your shopping cart fill up delivery address-> Delivery time>Find your order at your door step
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>6 .</span> <a data-bs-toggle="collapse" href="#my-account-6">What are your delivery hours?</a>
                                    </h3>
                                </div>
                                <div id="my-account-6" class="panel-collapse collapse" data-bs-parent="#faq">
                                    <div class="panel-body">
                                        8 am to 10 pm every day
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default single-my-account" data-aos="fade-up" data-aos-delay="200">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>7 .</span> <a data-bs-toggle="collapse" href="#my-account-7">Do you serve my area?</a>
                                    </h3>
                                </div>
                                <div id="my-account-7" class="panel-collapse collapse" data-bs-parent="#faq">
                                    <div class="panel-body">
                                        Serving all over Dhaka city
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>8 .</span> <a data-bs-toggle="collapse" href="#my-account-8">How do you deliver?</a>
                                    </h3>
                                </div>
                                <div id="my-account-8" class="panel-collapse collapse" data-bs-parent="#faq">
                                    <div class="panel-body">
                                        We use third-parties to deliver products
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>9 .</span> <a data-bs-toggle="collapse" href="#my-account-9">What happens after my order is placed?</a>
                                    </h3>
                                </div>
                                <div id="my-account-9" class="panel-collapse collapse" data-bs-parent="#faq">
                                    <div class="panel-body">
                                        Text & Email will be sent to confirm the order
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ml-auto mr-auto col-lg-9">
                    <div class="checkout-wrapper">
                        <div class="inner-descripe" data-aos="fade-up" data-aos-delay="200">
                            <button class="btn btn-lg btn-primary btn-hover-dark">My Account</button>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>10. </span> <a data-bs-toggle="collapse" href="#my-account-10 ">How can I open an account?</a>
                                </h3>
                            </div>
                            <div id="my-account-10" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Press the user icon-> create an account->Name-> Phone Number
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ml-auto mr-auto col-lg-9">
                    <div class="checkout-wrapper">
                        <div class="inner-descripe" data-aos="fade-up" data-aos-delay="200">
                            <button class="btn btn-lg btn-primary btn-hover-dark">Billing & Payment</button>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>11. </span> <a data-bs-toggle="collapse" href="#my-account-11 ">How do I pay?</a>
                                </h3>
                            </div>
                            <div id="my-account-11" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Credit card/Debit Card/Bkash/Rocket/Nogod/COD(Cash on Delivery)
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>12. </span> <a data-bs-toggle="collapse" href="#my-account-12 ">What happens after my order is placed?</a>
                                </h3>
                            </div>
                            <div id="my-account-12" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Text & Email will be sent to confirm the order
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>13. </span> <a data-bs-toggle="collapse" href="#my-account-13 ">How do I pay?</a>
                                </h3>
                            </div>
                            <div id="my-account-13" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Credit card/Debit Card/Bkash/Rocket/Nogod/COD(Cash on Delivery)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ml-auto mr-auto col-lg-9">
                    <div class="checkout-wrapper">
                        <div class="inner-descripe" data-aos="fade-up" data-aos-delay="200">
                            <button class="btn btn-lg btn-primary btn-hover-dark">Out of stock</button>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>14. </span> <a data-bs-toggle="collapse" href="#my-account-14 ">What if the item is out of stock?</a>
                                </h3>
                            </div>
                            <div id="my-account-14" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    We will try our best to fulfill your need as early as possible
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>15. </span> <a data-bs-toggle="collapse" href="#my-account-15 ">Desired product not found. What should I do?</a>
                                </h3>
                            </div>
                            <div id="my-account-15" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Call us at *********** or create a ticket and let us know
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ml-auto mr-auto col-lg-9">
                    <div class="checkout-wrapper">
                        <div class="inner-descripe" data-aos="fade-up" data-aos-delay="200">
                            <button class="btn btn-lg btn-primary btn-hover-dark">
                                Request for an item
                                </button>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>16. </span> <a data-bs-toggle="collapse" href="#my-account-16 ">Desired product not found. What should I do?</a>
                                </h3>
                            </div>
                            <div id="my-account-16" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Call us at *********** or create a ticket and let us know
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ml-auto mr-auto col-lg-9">
                    <div class="checkout-wrapper">
                        <div class="inner-descripe" data-aos="fade-up" data-aos-delay="200">
                            <button class="btn btn-lg btn-primary btn-hover-dark">
                                Delivery issue
                                </button>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>17. </span> <a data-bs-toggle="collapse" href="#my-account-17 ">What is the Delivery time frame ?</a>
                                </h3>
                            </div>
                            <div id="my-account-17" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Same day delivery (before cut off time 12:00PM)
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>18. </span> <a data-bs-toggle="collapse" href="#my-account-18 ">How much is the delivery charge?</a>
                                </h3>
                            </div>
                            <div id="my-account-18" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Not fixed
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>19. </span> <a data-bs-toggle="collapse" href="#my-account-19 ">What if I want to change my delivery address?</a>
                                </h3>
                            </div>
                            <div id="my-account-19" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Please let us know within an hour after the order is placed
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>20. </span> <a data-bs-toggle="collapse" href="#my-account-20 ">My order is wrong. What do I do?</a>
                                </h3>
                            </div>
                            <div id="my-account-20" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Please immediately call at 09538111955, and let us know the problem
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>21. </span> <a data-bs-toggle="collapse" href="#my-account-21 ">How do I know when my order is here?</a>
                                </h3>
                            </div>
                            <div id="my-account-21" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Track your order from our site & we will call you as
                                    soon as the delivery guy is at your doorstep

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>22. </span> <a data-bs-toggle="collapse" href="#my-account-22 ">What one your delivery hours?</a>
                                </h3>
                            </div>
                            <div id="my-account-22" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    8 am to 10 pm every day

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ml-auto mr-auto col-lg-9">
                    <div class="checkout-wrapper">
                        <div class="inner-descripe" data-aos="fade-up" data-aos-delay="200">
                            <button class="btn btn-lg btn-primary btn-hover-dark">Username/Password change</button>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>23. </span> <a data-bs-toggle="collapse" href="#my-account-23 ">Forgot my password?</a>
                                </h3>
                            </div>
                            <div id="my-account-23" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Call us at 09638111333 to reset your password
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ml-auto mr-auto col-lg-9">
                    <div class="checkout-wrapper">
                        <div class="inner-descripe" data-aos="fade-up" data-aos-delay="200">
                            <button class="btn btn-lg btn-primary btn-hover-dark">Others</button>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>24. </span> <a data-bs-toggle="collapse" href="#my-account-24 ">When will I receive my order?</a>
                                </h3>
                            </div>
                            <div id="my-account-24" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Within 24 hours after the order is placed Same day delivery (only if the order is placed before the cut-off time 12:00PM)
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>25. </span> <a data-bs-toggle="collapse" href="#my-account-25 ">I need to return/exchange an item?</a>
                                </h3>
                            </div>
                            <div id="my-account-25" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Call us at *********** or create a ticket
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>26. </span> <a data-bs-toggle="collapse" href="#my-account-26 ">The color looks slightly different than the pictures?</a>
                                </h3>
                            </div>
                            <div id="my-account-26" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Product image may slightly differ from actual item in Terms of Color due to the lighting during photo shooting or the monitor's Display
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>27. </span> <a data-bs-toggle="collapse" href="#my-account-27 ">I am having problems with the website.</a>
                                </h3>
                            </div>
                            <div id="my-account-27" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    We are sorry for the technical difficulties for this moment. Have some patience & it will be fixed
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>28. </span> <a data-bs-toggle="collapse" href="#my-account-28 ">I am having problems with my discount code or I forgot to enter it?</a>
                                </h3>
                            </div>
                            <div id="my-account-28" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Please call us directly at *********** as soon as the order is placed
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>29. </span> <a data-bs-toggle="collapse" href="#my-account-29 ">Can I cancel/change my order?</a>
                                </h3>
                            </div>
                            <div id="my-account-29" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    To cancel/change any online order, order cancellation must be requested prior to 2 minutes after order placement
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>30. </span> <a data-bs-toggle="collapse" href="#my-account-30 ">How can I look up my order?</a>
                                </h3>
                            </div>
                            <div id="my-account-30" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Login to your account and easily track it instant or call us directly at ***********
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>31. </span> <a data-bs-toggle="collapse" href="#my-account-31 ">Do you ship internationally?</a>
                                </h3>
                            </div>
                            <div id="my-account-31" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Not at this moment
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>32. </span> <a data-bs-toggle="collapse" href="#my-account-32 ">Do you offer free delivery?</a>
                                </h3>
                            </div>
                            <div id="my-account-32" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Yes we offer free delivery to certain products (T&C applied)
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>33. </span> <a data-bs-toggle="collapse" href="#my-account-33 ">How are you sourcing your products?</a>
                                </h3>
                            </div>
                            <div id="my-account-33" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    We have deals with whole-sellers, manufacturers and importers. We only sell authentic products
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>34. </span> <a data-bs-toggle="collapse" href="#my-account-34 ">Do you serve my area?</a>
                                </h3>
                            </div>
                            <div id="my-account-34" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Serving all over Dhaka city
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>35. </span> <a data-bs-toggle="collapse" href="#my-account-35 ">Should I tip the delivery man?</a>
                                </h3>
                            </div>
                            <div id="my-account-35" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    No
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>36. </span> <a data-bs-toggle="collapse" href="#my-account-36 ">What happens in strikes/lockdown?</a>
                                </h3>
                            </div>
                            <div id="my-account-36" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    We will try our best to deliver the products
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ml-auto mr-auto col-lg-9">
                    <div class="checkout-wrapper">
                        <div class="inner-descripe" data-aos="fade-up" data-aos-delay="200">
                            <button class="btn btn-lg btn-primary btn-hover-dark">Tickets</button>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>37. </span> <a data-bs-toggle="collapse" href="#my-account-37 ">How do I create a ticket?</a>
                                </h3>
                            </div>
                            <div id="my-account-37" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    Login to your account from the website of SOOKH and click on “Create a Ticket”. Please write your- 1. Issue including your Order number (if any) 2. Name 3. Contact number And send it to us. ********Our customer service team will respond to your ticket in a 24 hour turnaround time********
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Faq Policy area end-->

@endsection
