<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    
    public function show()
    {
        return view('login');
    }
    public function store(Request $request)
    {
        $email = $request->input('email');
        $pwd = $request->input('pwd');

        // You can save data to the session
        $request->session()->put(['email' => $email, 'pwd' => $pwd]);

        return redirect()->route('data');

    }

    public function data(Request $request)
    {
        $enteredemail = $request->session()->get('email');
        $enteredpwd = $request->session()->get('pwd');
        return 'Your email is: '. $enteredemail. ' and your password is: '. $enteredpwd;
    }
}
