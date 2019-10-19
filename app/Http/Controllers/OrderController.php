<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use App\ShipCheck;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order()
    {
        $orders = Order::latest()->get();
        return view('admin.order.orders', compact('orders'));
    }

    public function viewOrder($id)
    {
        $order = Order::findOrFail($id);
        $shipCheck = ShipCheck::findOrFail($order->ship_check_id);
        $orderDetails = OrderDetail::where('order_id', $order->id)->get();
        return view('admin.order.view-order', compact('shipCheck', 'orderDetails'));
    }

    public function orderInvoice($id)
    {
        $order = Order::findOrFail($id);
        $shipCheck = ShipCheck::findOrFail($order->ship_check_id);
        $orderDetails = OrderDetail::where('order_id', $order->id)->get();
        return view('admin.order.order-invoice');
    }
}
