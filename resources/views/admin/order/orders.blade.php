@extends('admin.master')

@section('title', 'Orders')

@section('content')

    <div class="x_panel">
        <div class="x_title">
            <h2>Orders <small>Information's....</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table id="datatable" class="text-center table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th class="text-center">SL</th>
                    <th class="text-center">Customer Name</th>
                    <th class="text-center">Sub Total</th>
                    <th class="text-center">Shipping Cost</th>
                    <th class="text-center">Total Amount</th>
                    <th class="text-center">Payment Type</th>
                    <th class="text-center">Payment Status</th>
                    <th class="text-center">Order Date</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @php( $i = 1 )
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $order->shipCheck->billing_name }}</td>
                        <td>{{ $order->sub_total }} Tk.</td>
                        <td>{{ $order->shipping_cost }} Tk.</td>
                        <td>{{ $order->total_amount }} Tk.</td>
                        <td>{{ $order->shipCheck->payment_method }}</td>
                        <td>{{ $order->payment_status }}</td>
                        <td>{{ date('d.M.y | h:ia', strtotime($order->created_at)) }}</td>
                        <td>
                            <a href="{{ route('view-order', ['id' => $order->id]) }}" class="btn btn-success btn-xs" title="View Details"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('order-invoice', ['id' => $order->id]) }}" class="btn btn-warning btn-xs" title="Invoice"><i class="fa fa-file"></i></a>
                            <a href="" class="btn btn-primary btn-xs" title="Complete Order"><i class="fa fa-arrow-up"></i></a>
                            <a href="" class="btn btn-info btn-xs" title="Edit"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop