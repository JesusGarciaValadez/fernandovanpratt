<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>..:: @yield( 'title' ) @ FernandoVANPRATT ::..</title>
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
    <header>
      <a class="button-collapse top-nav full hide-on-large-only" data-activates="nav-mobile" href="#">
        <i class="material-icons">menu</i>
        <p class="title">FernandoVanPratt</p>
        <nav>
          <ul class="clearfix">
            <li>
              <p>
                {!! Html::link( route( 'home' ), trans( 'theme.general.home' ), [
                  'target' => '_self',
                  'title' => trans( 'theme.general.home' )
                ] ) !!}
              </p>
            </li>
            <li>
              <p>
                {!! Html::link( route( 'gallery' ), trans( 'theme.general.gallery' ), [
                  'target' => '_self',
                  'title' => trans( 'theme.general.gallery' )
                ] ) !!}
              </p>
            </li>
            <li>
              <p>
                {!! Html::link( route( 'hireMe' ), trans( 'theme.general.hire_me' ), [
                  'target' => '_self',
                  'title' => trans( 'theme.general.hire_me' )
                ] ) !!}
              </p>
            </li>
          </ul>
        </nav>
      </a>
    </header>
  @show

  @yield( 'content' )

  @section( 'footer' )
    <footer>
      <h2>@lang( 'theme.general.how_can_i_help_you' )</h2>
      <p>@lang( 'theme.general.i_like_to_discuss_the_future_of_you_brand' )</p>
      <p>
        {!! Html::link( route( 'hireMe' ), trans( 'theme.general.hire_me' ), [
          'target' => '_self',
          'title' => trans( 'theme.general.hire_me' )
        ] ) !!}
      </p>
      <p class="copyright">FernandoVanPratt &copy; &bullet; 2016</p>
      <p class="developedBy">@lang( 'theme.general.developed_by' ) {!! Html::link( 'https://www.hydrastud.io/', 'HydraStud.io', [ 'target' => '_blank', 'title' => 'HydraStud.io' ] ) !!}}</p>
    </footer>
  @show

    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
    {!! Html::script('assets/js/main.js') !!}
  </body>
</html>
