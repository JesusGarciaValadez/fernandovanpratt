
; ( function ( $ ) {
  $( document ).ready( function( ) {
    $( 'header' ).pushpin( {
      top: $('header').offset().top
    } );
  } );

  $('.parallax').parallax();
} )( jQuery );