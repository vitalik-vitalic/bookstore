<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
    //
    public function getIndex(){
        return view('login-register');
    }
}
