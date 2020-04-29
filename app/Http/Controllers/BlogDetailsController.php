<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    public function getIndex(){
        return view('blog-details');
    }
}
