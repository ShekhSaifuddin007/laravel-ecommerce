
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/front') }}/assets/images/favicon.ico">
<!-- CSS=========================================== -->
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('/front') }}/assets/css/bootstrap.min.css">
<!-- Icon Font CSS -->
<link rel="stylesheet" href="{{ asset('/front') }}/assets/css/icon-font.min.css">
<!-- Plugins CSS -->
<link rel="stylesheet" href="{{ asset('/front') }}/assets/css/plugins.css">
<!-- Main Style CSS -->
<link rel="stylesheet" href="{{ asset('/front') }}/assets/css/style.css">

<style>
    .qty-input input {
        width: 75px;
        text-align: center;
        border: 1px solid #f1f1f1;
        outline: none;
        background: #1d1d1d;
        color: #fff;
        border-radius: 7px;
    }

    #toast {
        visibility: hidden;
        max-width: 50px;
        height: 50px;
        /*margin-left: -125px;*/
        margin: auto;
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 2px;
    
        position: fixed;
        z-index: 1;
        left: 0;right:0;
        bottom: 30px;
        font-size: 17px;
        white-space: nowrap;
    }
    #toast #img{
        width: 50px;
        height: 50px;
    
        float: left;
    
        padding-top: 16px;
        padding-bottom: 16px;
    
        box-sizing: border-box;
    
    
        background-color: #111;
        color: #fff;
    }
    #toast #desc{
    
    
        color: #fff;
    
        padding: 16px;
    
        overflow: hidden;
        white-space: nowrap;
    }

    #toast.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 2s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 4s, fadeout 0.5s 4.5s;
    }

    @-webkit-keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
    }

    @keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
    }

    @-webkit-keyframes expand {
        from {min-width: 50px}
        to {min-width: 350px}
    }

    @keyframes expand {
        from {min-width: 50px}
        to {min-width: 350px}
    }
    @-webkit-keyframes stay {
        from {min-width: 350px}
        to {min-width: 350px}
    }

    @keyframes stay {
        from {min-width: 350px}
        to {min-width: 350px}
    }
    @-webkit-keyframes shrink {
        from {min-width: 350px;}
        to {min-width: 50px;}
    }

    @keyframes shrink {
        from {min-width: 350px;}
        to {min-width: 50px;}
    }

    @-webkit-keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 60px; opacity: 0;}
    }

    @keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 60px; opacity: 0;}
    }
</style>
