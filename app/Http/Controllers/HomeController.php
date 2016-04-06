<?php

namespace fernandovanpratt\Http\Controllers;

use Illuminate\Http\Request;

use fernandovanpratt\Http\Requests;

class HomeController extends Controller
{
  public function index ()
  {
    return view( 'home' );
  }
}
