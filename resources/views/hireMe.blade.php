@extends( 'layouts.layout' )

@section( 'title', "Home" )

@section( 'content' )

  <div class="parallax-container">
    <div class="parallax">
      <img src="{{ asset( 'assets/img/1723.jpg' ) }}">
      <h1>@lang( 'theme.general.hire_me' )</h1>
    </div>
  </div>

@endsection

@section( 'footer' )
  <footer>
    {!! Form::open( [ 'route' => 'store', 'method' => 'POST', 'files' => false ] ) !!}
      <fieldset>
        <label>
          “@lang( 'theme.hire_me.id_like_to_talk' )
          {!! Form::email( 'contact_email', null, [
            'placeholder'   => trans( 'theme.hire_me.email' ),
            'autocomplete'  => 'false'
          ] ) !!}
          @lang( 'theme.hire_me.asking_for' )
          {!! Form::text( 'contact_name', null, [
            'placeholder'   => trans( 'theme.hire_me.to_refine_details' ),
            'autocomplete'  => 'false'
          ] ) !!}
          @lang( 'theme.hire_me.to_refine_details' ).
        </label>
        <label>
          @lang( 'theme.hire_me.id_like_to_discuss' )
          {!! Form::text( 'contact_subject', null, [
            'placeholder'   => trans( 'theme.hire_me.subject' ),
            'autocomplete'  => 'false'
          ] ) !!}}.”
        </label>
      </fieldset>
    {!! Form::close() !!}
    <p class="copyright">FernandoVanPratt &copy; &bullet; 2016</p>
    <p class="developedBy">@lang( 'theme.general.developed_by' ) <a href="https://www.hydrastud.io/" target="_blank" title="HydraStud.io">HydraStud.io</a></p>
  </footer>
@endsection