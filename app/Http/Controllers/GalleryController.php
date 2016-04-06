<?php

namespace fernandovanpratt\Http\Controllers;

use Illuminate\Http\Request;

use fernandovanpratt\Http\Requests;

class GalleryController extends Controller
{
    public function index ()
    {
      return view( 'gallery' );
    }
}
