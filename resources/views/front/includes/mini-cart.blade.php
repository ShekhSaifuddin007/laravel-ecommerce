
@if(count($cartProducts))
    <div class="mini-cart-wrap">
        <!-- Mini Cart Top -->
        <div class="mini-cart-top">
            <button class="close-cart">Close Cart<i class="icofont icofont-close"></i></button>
        </div>
        <!-- Mini Cart Products -->
        <ul class="mini-cart-products">
            @php($total = 0)
            @foreach($cartProducts as $cartProduct)
                <li>
                    <a href="{{ route('show-cart') }}">
                        <span class="image">
                            <img src="{{ asset($cartProduct->options->image) }}" alt="Product" style="height: 80px;">
                        </span>
                        <div class="content">
                            <span class="title">{{ $cartProduct->name }}</span>
                            <span class="price">Price: Tk. {{ $cartProduct->price }}</span>
                            <span class="qty">Qty: {{ $cartProduct->qty }}</span>
                        </div>

                        @php($cartPrice = $cartProduct->price * $cartProduct->qty)
                        @php($total = $total+$cartPrice)

                    </a>
                    <a title="Remove" href="{{ route('cart-remove', ['rowId' => $cartProduct->rowId]) }}" class="remove"><i class="fa fa-trash-o"></i></a>
                </li>
            @endforeach
        </ul>

        <!-- Mini Cart Bottom -->
        <div class="mini-cart-bottom">
            <h4 class="sub-total">Total: <span>Tk. {{ $total }}</span></h4>
            <div class="button">
                <a href="checkout-dark.html">CHECK OUT</a>
            </div>
        </div>
    </div>
@endif