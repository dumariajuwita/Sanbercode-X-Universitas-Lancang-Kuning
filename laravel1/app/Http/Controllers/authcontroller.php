<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authcontroller extends Controller
{
    public function register() {
        return view('pages.register');
    }

    public function send(Request $request) {
        $Firstname = $request->input('fname');
        $Lastname = $request->input('lname');

        return view('pages.welcome', ['fname' => $Firstname, 'lname' => $Lastname]);
    }
}
 

