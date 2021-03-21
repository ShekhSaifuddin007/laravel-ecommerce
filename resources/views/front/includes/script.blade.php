
<!-- Popper JS -->
<script src="{{ asset('/front') }}/assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('/front') }}/assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="{{ asset('/front') }}/assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="{{ asset('/front') }}/assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="{{ asset('/front') }}/assets/js/main.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>
    function addToCart(el) {
        let $productId = el.siblings('input.product_id').val();
        let $qty = el.siblings('input.qty').val();
        
        $.get('/cart/add', { 'product_id' : $productId, 'qty' : $qty }).then(function () {
            $('.refresh-cart').load(location.href + ' .refresh-cart');
            $success();
        }).catch(function() {
            alert('error');
        });
    }
    
    //get requested quantity...
    function myQty(value) {
        $('input.qty').val(value);
    }

    let $success = function() {
        var x = document.getElementById("toast")
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
    }
    
</script>
