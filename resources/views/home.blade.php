@extends( 'layouts.layout' )

@section( 'title', "Home" )

@section( 'content' )

  <div class="parallax-container">
    <div class="parallax">
      <img src="{{ asset( 'assets/img/1751.jpg' ) }}">
      <h1>@lang( 'theme.home.principal.title' )</h1>
      <h2>@lang( 'theme.home.principal.description' )</h2>
      <p>
        {!! Html::link( route( 'hireMe' ), trans( 'theme.general.hire_me' ), [
          'target' => '_self',
          'title' => trans( 'theme.general.hire_me' )
        ] ) !!}
      </p>
    </div>
  </div>

  <div class="wrapper">
    <div class="wrapper--central">
      <h3>@lang( 'theme.home.objectives.title' )</h3>
      <p>@lang( 'theme.home.objectives.description' )</p>
    </div>
  </div>

  <div class="parallax-container">
    <div class="parallax">
      <img src="{{ asset( 'assets/img/1715.jpg' ) }}">
      <h3>@lang( 'theme.home.professional.title' )</h3>
      <ul class="collapsible popout" data-collapsible="accordion">
          <li>
            <div class="collapsible-header">@lang( 'theme.home.professional.job.one.title' )</div>
            <div class="collapsible-body">
              <p><strong>@lang( 'theme.home.professional.job.one.date' )</strong></p>
              <p>@lang( 'theme.home.professional.job.one.address' )</p>
              <p>@lang( 'theme.home.professional.job.one.description' )</p>
            </div>
          </li>
          <li>
            <div class="collapsible-header">@lang( 'theme.home.professional.job.two.title' )</div>
            <div class="collapsible-body">
              <p><strong>@lang( 'theme.home.professional.job.two.date' )</strong></p>
              @lang( 'theme.home.professional.job.two.description' )
            </div>
          </li>
        </ul>
    </div>
  </div>

  <div class="wrapper">
    <div class="wrapper--central">
      <h3>@lang( 'theme.home.habilities.title' )</h3>
      <ul>
        <li>@lang( 'theme.home.habilities.one' )</li>
        <li>@lang( 'theme.home.habilities.two' )</li>
        <li>@lang( 'theme.home.habilities.three' )</li>
        <li>@lang( 'theme.home.habilities.four' )</li>
        <li>@lang( 'theme.home.habilities.five' )</li>
        <li>@lang( 'theme.home.habilities.six' )</li>
        <li>@lang( 'theme.home.habilities.seven' )</li>
        <li>@lang( 'theme.home.habilities.eight' )</li>
        <li>@lang( 'theme.home.habilities.nine' )</li>
        <li>@lang( 'theme.home.habilities.ten' )</li>
        <li>@lang( 'theme.home.habilities.eleven' )</li>
        <li>@lang( 'theme.home.habilities.twelve' )</li>
        <li>@lang( 'theme.home.habilities.thirten' )</li>
        <li>@lang( 'theme.home.habilities.fourten' )</li>
      </ul>
    </div>
  </div>

@endsection