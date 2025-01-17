<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} | Invoice</title>

    <!-- Bootstrap -->
    <link href="{{ asset('/back') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('/back') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('/back') }}/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ asset('/back') }}/build/css/custom.min.css" rel="stylesheet">
</head>

<body style="background: #fff;">
<div class="container" style="background: #fff; width: 60%;">
    <div class="main_container">
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_content">

                                <section class="content invoice">
                                    <!-- title row -->
                                    <div class="row">
                                        <div class="col-xs-12 invoice-header">
                                            <h1>
                                                <i class="fa fa-globe"></i> Invoice.
                                                <small class="pull-right">Date: 16/08/2016</small>
                                            </h1>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- info row -->
                                    <div class="row invoice-info">
                                        <div class="col-sm-4 invoice-col">
                                            From
                                            <address>
                                                <strong>Iron Admin, Inc.</strong>
                                                <br>795 Freedom Ave, Suite 600
                                                <br>New York, CA 94107
                                                <br>Phone: 1 (804) 123-9876
                                                <br>Email: ironadmin.com
                                            </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 invoice-col">
                                            To
                                            <address>
                                                <strong>John Doe</strong>
                                                <br>795 Freedom Ave, Suite 600
                                                <br>New York, CA 94107
                                                <br>Phone: 1 (804) 123-9876
                                                <br>Email: jon@ironadmin.com
                                            </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 invoice-col">
                                            <b>Invoice #007612</b>
                                            <br>
                                            <br>
                                            <b>Order ID:</b> 4F3S8J
                                            <br>
                                            <b>Payment Due:</b> 2/22/2014
                                            <br>
                                            <b>Account:</b> 968-34567
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <!-- Table row -->
                                    <div class="row">
                                        <div class="col-xs-12 table">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Qty</th>
                                                        <th>Product</th>
                                                        <th>Serial #</th>
                                                        <th style="width: 59%">Description</th>
                                                        <th>Subtotal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Grown Ups Blue Ray</td>
                                                        <td>422-568-642</td>
                                                        <td>Tousled lomo letterpress erry Richardson helvetica tousled street art master helvetica tousled street art master, El snort testosterone</td>
                                                        <td>$25.99</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <div class="row">
                                        <!-- accepted payments column -->
                                        <div class="col-xs-6">
                                            <p class="lead">Payment Methods:</p>
                                            <img src="images/visa.png" alt="Visa">
                                            <img src="images/mastercard.png" alt="Mastercard">
                                            <img src="images/american-express.png" alt="American Express">
                                            <img src="images/paypal.png" alt="Paypal">
                                            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                            </p>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-xs-6">
                                            <p class="lead">Amount Due 2/22/2014</p>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th style="width:50%">Subtotal:</th>
                                                        <td>$250.30</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tax (9.3%)</th>
                                                        <td>$10.34</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Shipping:</th>
                                                        <td>$5.80</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total:</th>
                                                        <td>$265.24</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <!-- this row will not appear when printing -->
{{--                                    <div class="row no-print">--}}
{{--                                        <div class="col-xs-12">--}}
{{--                                            <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>--}}
{{--                                            <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>--}}
{{--                                            <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('/back') }}/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('/back') }}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{ asset('/back') }}/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="{{ asset('/back') }}/vendors/nprogress/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="{{ asset('/back') }}/build/js/custom.min.js"></script>
</body>
</html>