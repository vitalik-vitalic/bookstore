<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Feedback;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function getIndex(){
        return view('contact');
    }

    //
    public function postIndex(){

        $feedback = Feedback::create([
            'con_name' => $_POST['con_name'],
            'con_email' => $_POST['con_email'],
            'con_phone' => $_POST['con_phone'],
            'con_message' => $_POST['con_message'],
        ]);

        $feedback->save();

        unset($_POST['X-CSRF-TOKEN']);

        return response()->json('OK');
    }

}
