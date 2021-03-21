<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        if ($request->qty >= 1)
        {
           return Cart::add([
                    'id' => $product->id,
                    'name' => $product->product_name,
                    'price' => $product->product_price,
                    'qty' => $request->qty,
                    'weight' => '',
                    'options' => [
                        'image' =>  $product->product_image,
                        'category' => $product->category->category_name,
                        'brand' => $product->brand->brand_name
                ],
            ]);
        }
        else
            return back();
    }

    public function showCart()
    {
        $cartProducts = Cart::content();
        return view('front.cart.cart-show', compact('cartProducts'));
    }

    public function cartUpdate(Request $request)
    {
        public_path();
        $rowId = $request->rowId;
        if ($request->cart_qty >= 1)
        {
            Cart::update($rowId, [
                'qty' => $request->cart_qty,
            ]);
            return back();
        }
        else
            return back()->with('message', 'Wrong Input...');
    }

    public function cartRemove($rowId)
    {
        Cart::remove($rowId);
        return back();
    }
}
