@extends('front.master')

@section('content')

    <!-- Checkout Page Start -->
    <div class="page-section section mt-90 mb-30">
        <div class="container">
            <div class="row mb-55">
                <div class="col-12 text-center">
                    <div style="background-color: #2b2b2b; padding: 20px;">
                        <h4 style="line-height: 30px;">Dear <span class="text-success font-weight-bold">{{ Session::get('customerName') }}.</span>
                            You Have to give us product Shipping info to complete your valuable order.<hr style="border-top: 2px solid #28a745; width: 70%;">
                            <span class="font-weight-bold">N.B :</span> By default we'll ship your product to given
                            <span class="text-success">Billing Address</span> if you want to change shipping Address then <br> click the below button <span class="text-success">Ship To Different Address</span>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Checkout Form s-->
                    <form action="{{ route('place-order') }}" method="post" class="checkout-form">
                        <div class="row row-40">
                            <div class="col-lg-7 mb-20">
                                <!-- Billing Address -->
                                <div id="billing-form" class="mb-40">
                                    <h4 class="checkout-title">Billing Address</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Full Name*</label>
                                            <input readonly type="text" name="billing_name" value="{{ old('billing_name') ?? $customer->user_name }}" placeholder="Your Name">
                                            <small class="text-danger">{{ $errors->has('billing_name') ? $errors->first('billing_name') : ' ' }}</small>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Email Address*</label>
                                            <input readonly type="email" name="billing_email" value="{{ old('billing_email') ?? $customer->email }}" placeholder="Email Address">
                                            <small class="text-danger">{{ $errors->has('billing_email') ? $errors->first('billing_email') : ' ' }}</small>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Phone no*</label>
                                            <input readonly type="text" name="billing_no" value="{{ old('billing_no') ?? $customer->phone_no }}" placeholder="Phone number">
                                            <small class="text-danger">{{ $errors->has('billing_no') ? $errors->first('billing_no') : ' ' }}</small>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Alternative Phone no*</label>
                                            <input id="billing_alt_no" type="text" name="billing_alt_no" value="{{ old('billing_alt_no') }}" placeholder="Alternative Phone number">
                                            <small class="text-danger">{{ $errors->has('billing_alt_no') ? $errors->first('billing_alt_no') : ' ' }}</small>
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Company Name</label>
                                            <input id="billing_company_name" type="text" name="billing_company_name" value="{{ old('billing_company_name') }}" placeholder="Company Name">
                                            <small class="text-danger">{{ $errors->has('billing_company_name') ? $errors->first('billing_company_name') : ' ' }}</small>
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Address*</label>
                                            <textarea id="billing_address" name="billing_address" placeholder="Your Address here" rows="3">{{ old('billing_address') }}</textarea>
                                            <small class="text-danger">{{ $errors->has('billing_address') ? $errors->first('billing_address') : ' ' }}</small>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Country</label>
                                            <select id="billing_country" name="billing_country" class="nice-select">
                                                <option></option>
                                                <option>Bangladesh</option>
                                                <option>China</option>
                                                <option>country</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                            </select>
                                            <small class="text-danger">{{ $errors->has('billing_country') ? $errors->first('billing_country') : ' ' }}</small>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Town/City</label>
                                            <input id="billing_city" name="billing_city" value="{{ old('billing_city') }}" type="text" placeholder="Town/City">
                                            <small class="text-danger">{{ $errors->has('billing_city') ? $errors->first('billing_city') : ' ' }}</small>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>State</label>
                                            <input id="billing_state" name="billing_state" value="{{ old('billing_state') }}" type="text" placeholder="State">
                                            <small class="text-danger">{{ $errors->has('billing_state') ? $errors->first('billing_state') : ' ' }}</small>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Zip Code</label>
                                            <input id="billing_zip" name="billing_zip" value="{{ old('billing_zip') }}" type="text" placeholder="Zip Code">
                                            <small class="text-danger">{{ $errors->has('billing_zip') ? $errors->first('billing_zip') : ' ' }}</small>
                                        </div>

                                        <div class="col-12 mb-20">
                                            <div class="check-box">
                                                <input type="checkbox" id="shiping_address" data-shipping>
                                                <label for="shiping_address">Ship to Different Address</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Shipping Address -->
                                <div id="shipping-form" class="mb-40">
                                    <h4 class="checkout-title">Shipping Address</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Full Name*</label>
                                            <input name="shipping_name" type="text" value="{{ old('shipping_name') ?? $customer->user_name }}" placeholder="Your Name">
                                            <small class="text-danger">{{ $errors->has('shipping_name') ? $errors->first('shipping_name') : ' ' }}</small>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Email Address*</label>
                                            <input name="shipping_email" type="email" value="{{ old('shipping_email') ?? $customer->email }}" placeholder="Email Address">
                                            <small class="text-danger">{{ $errors->has('shipping_email') ? $errors->first('shipping_email') : ' ' }}</small>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Phone no*</label>
                                            <input name="shipping_no" type="tel" value="{{ old('shipping_no') ?? $customer->phone_no }}" placeholder="Phone number">
                                            <small class="text-danger">{{ $errors->has('shipping_no') ? $errors->first('shipping_no') : ' ' }}</small>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Alternative Phone no*</label>
                                            <input id="shipping_alt_no" name="shipping_alt_no" value="{{ old('shipping_alt_no') }}" type="tel" placeholder="Alternative Phone number">
                                            <small class="text-danger">{{ $errors->has('shipping_alt_no') ? $errors->first('shipping_alt_no') : ' ' }}</small>
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Company Name</label>
                                            <input id="shipping_company_name" name="shipping_company_name" value="{{ old('shipping_company_name') }}" type="text" placeholder="Company Name">
                                            <small class="text-danger">{{ $errors->has('shipping_company_name') ? $errors->first('shipping_company_name') : ' ' }}</small>
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Address*</label>
                                            <textarea id="shipping_address" name="shipping_address" placeholder="Your Address here" rows="3">{{ old('shipping_address') }}</textarea>
                                            <small class="text-danger">{{ $errors->has('shipping_address') ? $errors->first('shipping_address') : ' ' }}</small>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Country</label>
                                            <select id="shipping_country" name="shipping_country" class="nice-select">
                                                <option></option>
                                                <option>Bangladesh</option>
                                                <option>China</option>
                                                <option>country</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                            </select>
                                            <small class="text-danger">{{ $errors->has('shipping_country') ? $errors->first('shipping_country') : ' ' }}</small>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Town/City</label>
                                            <input id="shipping_city" name="shipping_city" value="{{ old('shipping_city') }}" type="text" placeholder="Town/City">
                                            <small class="text-danger">{{ $errors->has('shipping_city') ? $errors->first('shipping_city') : ' ' }}</small>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>State</label>
                                            <input id="shipping_state" name="shipping_state" value="{{ old('shipping_state') }}" type="text" placeholder="State">
                                            <small class="text-danger">{{ $errors->has('shipping_state') ? $errors->first('shipping_state') : ' ' }}</small>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Zip Code</label>
                                            <input id="shipping_zip" name="shipping_zip" value="{{ old('shipping_zip') }}" type="text" placeholder="Zip Code">
                                            <small class="text-danger">{{ $errors->has('shipping_zip') ? $errors->first('shipping_zip') : ' ' }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="row">
                                    <!-- Cart Total -->
                                    <div class="col-12 mb-60">
                                        <h4 class="checkout-title">Cart Total</h4>
                                        <div class="checkout-cart-total">
                                            <h4>Product <span>Total</span></h4>
                                            <ul>
                                                @php($total=0)
                                                @foreach($cartProducts as $cartProduct)
                                                    @php($cartPrice = $cartProduct->price * $cartProduct->qty)
                                                    @php($total = $total+$cartPrice)
                                                    <li>{{ $cartProduct->name }} ( {{ $cartProduct->qty }} ) <span>Tk. {{ $cartPrice }}</span></li>
                                                @endforeach
                                            </ul>
                                            @php($shipping = ($total*1)/100)
                                            <p>Sub Total <span>Tk. {{ $total }}</span></p>
                                            <p>Shipping Fee <span>Tk. {{ $shipping }}</span></p>
                                            <h4>Grand Total <span>Tk. {{ $shipping+$total }}</span></h4>
                                            @php($grandTotal = $shipping+$total)
                                            @php(Session::put('total', $total))
                                            @php(Session::put('shipping', $shipping))
                                            @php(Session::put('grandTotal', $grandTotal))
                                        </div>
                                    </div>

                                    <!-- Payment Method -->
                                    <div class="col-12 mb-60">
                                        <h4 class="checkout-title">Payment Method</h4>
                                        <div class="checkout-payment-method">
                                            <small class="text-danger">{{ $errors->has('payment_method') ? $errors->first('payment_method') : ' ' }}</small>

                                            <div class="single-method">
                                                <input type="radio" id="payment_check" name="payment_method" value="check">
                                                <label for="payment_check">Check Payment</label>
                                                <p data-method="check">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                            </div>

                                            <div class="single-method">
                                                <input type="radio" id="payment_bank" name="payment_method" value="bank">
                                                <label for="payment_bank">Direct Bank Transfer</label>
                                                <p data-method="bank">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                            </div>

                                            <div class="single-method">
                                                <input type="radio" id="payment_cash" name="payment_method" value="cash">
                                                <label for="payment_cash">Cash on Delivery</label>
                                                <p data-method="cash">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                            </div>

                                            <div class="single-method">
                                                <input type="radio" id="payment_paypal" name="payment_method" value="paypal">
                                                <label for="payment_paypal">Paypal</label>
                                                <p data-method="paypal">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                            </div>

                                            <div class="single-method">
                                                <input type="radio" id="payment_payoneer" name="payment_method" value="payoneer">
                                                <label for="payment_payoneer">Payoneer</label>
                                                <p data-method="payoneer">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                            </div>
                                        </div>
                                        <button type="submit" class="place-order">Place order</button>
                                        <a href="{{ route('show-cart') }}" class="btn btn-circle font-weight-normal" style="margin-top: 38px; margin-left: 20px; padding: 7px 17px">Update Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Page End -->
@stop

@section('extra-js')
{{--    <script>--}}
        $("#billing_alt_no").keyup(function(){
            $("#shipping_alt_no").val($(this).val());
        });

        $("#billing_company_name").keyup(function(){
            $("#shipping_company_name").val($(this).val());
        });

        $("#billing_address").keyup(function(){
            $("#shipping_address").val($(this).val());
        });

        $("#billing_city").keyup(function(){
            $("#shipping_city").val($(this).val());
        });

        $("#billing_state").keyup(function(){
            $("#shipping_state").val($(this).val());
        });

        $("#billing_zip").keyup(function(){
            $("#shipping_zip").val($(this).val());
        });

        $("#billing_country").change(function() {
            var text = $("#billing_country option:selected").text();
            $("#shipping_country").val(text);
        });

        $('[readonly]').css({
            'background-color' : '#2b2b2b',
            'color' : '#cbcbcb'
        });
@stop