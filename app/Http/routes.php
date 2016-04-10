<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get( '/', [
  'as'    => 'home',
  'uses'  => 'HomeController@index'
] );

Route::get( 'gallery', [
  'as'    => 'gallery',
  'uses'  => 'GalleryController@index'
] );

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group( [ 'middleware' => [ 'web' ] ], function ( )
{
  Route::get( 'hire-me', [
    'as' => 'hireMe',
    'uses' => 'HireMeController@index'
  ] );

  Route::post( 'store', [
    'as' => 'store',
    'uses' => 'HireMeController@store'
  ] );

  Route::auth();
} );

Route::get( 'enviar', [ 'as' => 'enviar', function ()
{
  $data = [ 'link' => 'http://www.fernandovanpratt.com/' ];


  $response = \Mail::send( 'emails.notifications', $data, function ( $message )
  {
    $message->from( 'email@styde.net', 'Styde.Net' );

    $message->to( 'jesus.garciav@me.com' )->subject( 'Notificación' );
  } );

  if ( $response )
  {
    return "Se envió el email.";
  }
} ] );