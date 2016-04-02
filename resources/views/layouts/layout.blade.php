<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@yield( 'title' ) | FernandoVanPratt</title>
        <meta name="description" content="@yield( 'description' )">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        {!! Html::meta( 'robots', 'INDEX,FOLLOW' ) !!}

        {!! Html::style( 'humans.txt', [ 'type' => 'text/plain', 'rel' => 'author' ] ) !!}
        {!! Html::favicon( 'favicon.png' ) !!}

        {!! Html::style( 'assets/css/main.css' ) !!}

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->

        <script>
            // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            // e.src='//www.google-analytics.com/analytics.js';
            // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            // ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </head>
    <body>
    @section( 'header' )

    @show

        @yield( 'content' )

    @section( 'footer' )

    @show

        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        {!! Html::script('assets/js/main.js') !!}
    </body>
</html>
