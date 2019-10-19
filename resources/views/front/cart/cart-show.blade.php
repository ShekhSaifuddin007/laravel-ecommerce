@extends('front.master')

@section('content')

    <div class="page-section section pt-90 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <!-- Cart Table -->
                    <h4>{{ Session::get('message') }}</h4>
                        <div class="cart-table table-responsive mb-40">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="pro-thumbnail">Category</th>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-thumbnail">Brand</th>
                                    <th class="pro-title">Name</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php( $total=0 )
                                @foreach($cartProducts as $cartProduct)
                                    <tr>
                                        <td class="pro-title"><a href="#">{{ $cartProduct->options->category }}</a></td>
                                        <td class="pro-thumbnail"><a href="#"><img src="{{ asset($cartProduct->options->image) }}" alt="Product"></a></td>
                                        <td class="pro-price"><span>{{ $cartProduct->options->brand }}</span></td>
                                        <td class="pro-price"><span>{{ $cartProduct->name }}</span></td>
                                        <td class="pro-subtotal"><span>{{ $cartProduct->price }}</span></td>

                                        <form id="{{ $cartProduct->id }}" action="{{ route('cart-update') }}" method="POST">
                                            @csrf
                                            <td class="pro-quantity">
                                                <div class="pro-qty">
                                                    <input type="text" name="cart_qty" value="{{ $cartProduct->qty }}">
                                                </div>
                                                <input type="hidden" name="rowId" value="{{ $cartProduct->rowId }}" size="30">
                                            </td>
                                        </form>
                                        @php($cartPrice = $cartProduct->price * $cartProduct->qty)
                                        @php($total = $total+$cartPrice)
                                        <td class="pro-remove"><span>{{ number_format($cartPrice, 2, '.', ',') }}</span></td>
                                        <td class="pro-remove">
                                            <a title="Remove" href="{{ route('cart-remove', ['rowId' => $cartProduct->rowId]) }}">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                            <a title="Update" href="{{ route('cart-update') }}" onclick="event.preventDefault(); document.getElementById({{ $cartProduct->id }}).submit()">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    <div class="row">

                        <div class="col-lg-6 col-12 mb-15">
                            <!-- Calculate Shipping -->
                            <div class="calculate-shipping">
                                <h4>Calculate Shipping</h4>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-25">
                                            <select class="nice-select" style="color: #cbcbcb;">
                                                <option>Bangladesh</option>
                                                <option>China</option>
                                                <option>country</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12 mb-25">
                                            <select class="nice-select" style="color: #cbcbcb">
                                                <option>Dhaka</option>
                                                <option>Barisal</option>
                                                <option>Khulna</option>
                                                <option>Comilla</option>
                                                <option>Chittagong</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12 mb-25">
                                            <input type="text" placeholder="Postcode / Zip">
                                        </div>
                                        <div class="col-md-6 col-12 mb-25">
                                            <input type="submit" value="Estimate">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Discount Coupon -->
                            <div class="discount-coupon">
                                <h4>Discount Coupon Code</h4>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-25">
                                            <input type="text" placeholder="Coupon Code">
                                        </div>
                                        <div class="col-md-6 col-12 mb-25">
                                            <input type="submit" value="Apply Code">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Cart Summary -->
                        <div class="col-lg-6 col-12 mb-40 d-flex">
                            <div class="cart-summary">
                                <div class="cart-summary-wrap">
                                    <h4>Cart Summary</h4>
                                    <p>Sub Total <span>Tk. {{ $total }}</span></p>
                                    @php($shipping = ($total*1)/100)
                                    <p>Shipping Cost <span>Tk. {{ $shipping }}</span></p>
                                    <h2>Grand Total <span>Tk. {{ $shipping+$total }}</span></h2>
                                </div>
                                <div class="cart-summary-button">
                                    <a href="{{ route('shipping-checkout') }}" class="checkout-btn">Checkout</a>
                                    <a href="{{ route('/') }}" class="update-btn">Continue Shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
