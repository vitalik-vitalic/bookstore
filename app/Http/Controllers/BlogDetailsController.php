<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function getIndex(){
        return view('blog-details');
    }
}
