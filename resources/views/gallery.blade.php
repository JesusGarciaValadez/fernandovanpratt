@extends( 'layouts.layout' )

@section( 'title', "Home" )

@section( 'content' )

  <div class="parallax-container">
    <div class="parallax">
      <img src="{{ asset( 'assets/img/1731.jpg' ) }}" alt="">
      <h1>@lang( 'theme.gallery.title' )</h1>
      <p>
        <a href="{{ route( 'hireMe' ) }}" target="_blank" title="@lang( 'theme.general.hire_me' )" class="button">@lang( 'theme.general.hire_me' )</a>
      </p>
    </div>
  </div>

  <div class="slider">
    <ul class="slides">
      <li><img src="{{ asset( 'assets/img/1408.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1421.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1436.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1458.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1603.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1653.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1702.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1706.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1710.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1715.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1719.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1723.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1728.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1731.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1751.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1755.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1800.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1849.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1853.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1857.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1858.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1859.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1860.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1861.jpg' ) }}" alt=""></li>
      <li><img src="{{ asset( 'assets/img/1862.jpg' ) }}" alt=""></li>
    </ul>
  </div>

@endsection