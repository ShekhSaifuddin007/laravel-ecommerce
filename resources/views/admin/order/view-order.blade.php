@extends('admin.master')

@section('title', 'View Details')

@section('content')

    <div class="x_panel">
        <div class="x_title">
            <h2>Customer <small>Information....</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="text-center table table-hover table-striped table-bordered">
                <tr>
                    <th class="text-center">Customer Name</th>
                    <td>{{ $shipCheck->billing_name }}</td>
                </tr>
                <tr>
                    <th class="text-center">Company Name</th>
                    <td>{{ $shipCheck->billing_company_name ? : 'N/A' }}</td>
                </tr>
                <tr>
                    <th class="text-center">Phone No</th>
                    <td>{{ $shipCheck->billing_no }}</td>
                </tr>
                <tr>
                    <th class="text-center">Alternative No</th>
                    <td>{{ $shipCheck->billing_alt_no }}</td>
                </tr>
                <tr>
                    <th class="text-center">Email</th>
                    <td>{{ $shipCheck->billing_email }}</td>
                </tr>
                <tr>
                    <th class="text-center">Address</th>
                    <td>{{ $shipCheck->billing_address }}</td>
                </tr>
                <tr>
                    <th class="text-center">Country</th>
                    <td>{{ $shipCheck->billing_country ? : 'Bangladesh' }}</td>
                </tr>
                <tr>
                    <th class="text-center">City</th>
                    <td>{{ $shipCheck->billing_city ? : 'N/A' }}</td>
                </tr>
                <tr>
                    <th class="text-center">State</th>
                    <td>{{ $shipCheck->billing_state ? : 'N/A' }}</td>
                </tr>
                <tr>
                    <th class="text-center">Zip Code</th>
                    <td>{{ $shipCheck->billing_zip ? : 'N/A' }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="x_panel">
        <div class="x_title">
            <h2>Shipping <small>Information....</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="text-center table table-hover table-striped table-bordered">
                    <tr>
                        <th class="text-center">Receiver Name</th>
                        <td>{{ $shipCheck->shipping_name }}</td>
                    </tr>
                    <tr>
                        <th class="text-center">Phone No</th>
                        <td>{{ $shipCheck->shipping_no }}</td>
                    </tr>
                    <tr>
                        <th class="text-center">Alternative No</th>
                        <td>{{ $shipCheck->shipping_alt_no }}</td>
                    </tr>
                    <tr>
                        <th class="text-center">Email</th>
                        <td>{{ $shipCheck->shipping_email }}</td>
                    </tr>
                    <tr>
                        <th class="text-center">Address</th>
                        <td>{{ $shipCheck->shipping_address }}</td>
                    </tr>
                <tr>
                    <th class="text-center">Country</th>
                    <td>{{ $shipCheck->shipping_country ? : 'Bangladesh' }}</td>
                </tr>
                <tr>
                    <th class="text-center">City</th>
                    <td>{{ $shipCheck->shipping_city ? : 'N/A' }}</td>
                </tr>
                <tr>
                    <th class="text-center">State</th>
                    <td>{{ $shipCheck->shipping_state ? : 'N/A' }}</td>
                </tr>
                <tr>
                    <th class="text-center">Zip Code</th>
                    <td>{{ $shipCheck->shipping_zip ? : 'N/A' }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="x_panel">
        <div class="x_title">
            <h2>Products <small>Information....</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="text-center table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th class="text-center">SL</th>
                    <th class="text-center">Product Name</th>
                    <th class="text-center">Product Price</th>
                    <th class="text-center">Product Quantity</th>
                    <th class="text-center">Total Amount</th>
{{--                    <th class="text-center">Action</th>--}}
                </tr>
                </thead>
                <tbody>
                @php( $i = 1 )
                @foreach($orderDetails as $orderDetail)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $orderDetail->product_name }}</td>
                        <td>{{ $orderDetail->product_price }}</td>
                        <td>{{ $orderDetail->product_qty }}</td>
                        <td>{{ $orderDetail->product_price*$orderDetail->product_qty }}</td>
{{--                        <td>--}}
{{--                            <a href="" class="btn btn-info btn-xs" title="Edit"><i class="fa fa-edit"></i></a>--}}
{{--                            <a href="" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash"></i></a>--}}
{{--                        </td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop