<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetail;
use App\ShipCheck;
use Illuminate\Support\Facades\Session;
use Cart;

class ShippingCheckoutController extends Controller
{
    public function shippingCheckout()
    {
        $cartProducts = Cart::content();
        $customer = Customer::find(Session::get('customerId'));
        return view('front.ship-check.ship-check', compact('customer', 'cartProducts'));
    }

    public function placeOrder()
    {
        $shipCheck = ShipCheck::create($this->validateRequest());

        $order = new Order();
        $order->ship_check_id = $shipCheck->id;
        $order->sub_total = Session::get('total');
        $order->shipping_cost = Session::get('shipping');
        $order->total_amount = Session::get('grandTotal');
        $order->save();

        $cartProducts = Cart::content();

        foreach ($cartProducts as $cartProduct)
        {
            $orderDetail = new OrderDetail();
            $orderDetail->ship_check_id = $shipCheck->id;
            $orderDetail->order_id = $order->id;
            $orderDetail->product_id = $cartProduct->id;
            $orderDetail->product_name = $cartProduct->name;
            $orderDetail->product_price = $cartProduct->price;
            $orderDetail->product_qty = $cartProduct->qty;
            $orderDetail->save();
        }
        Cart::destroy();
        return back();
    }

    private function validateRequest()
    {
        return request()->validate([
            'billing_name' => 'required',
            'billing_email' => 'required',
            'billing_no' => 'required',
            'billing_alt_no' => 'required',
            'billing_company_name' => '',
            'billing_address' => 'required',
            'billing_country' => '',
            'billing_city' => '',
            'billing_state' => '',
            'billing_zip' => '',
            //==============>>>>>>>>>>>>
            'shipping_name' => 'required',
            'shipping_email' => 'required',
            'shipping_no' => 'required',
            'shipping_alt_no' => 'required',
            'shipping_company_name' => '',
            'shipping_address' => 'required',
            'shipping_country' => '',
            'shipping_city' => '',
            'shipping_state' => '',
            'shipping_zip' => '',
            'payment_method' => 'required',
        ]);
    }
}
