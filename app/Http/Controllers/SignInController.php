<?php

namespace App\Http\Controllers;

use Validator;
use Auth;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    function index()
    {
        return view('login');
    }

    function authenticate(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum'
        ]);

        $userData = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($userData)) {
            return redirect('login/success');
        } else {
            return back()->with('error', 'Invalid User Or Password');
        }
    }

    function success()
    {
        return view("successfulLogin");
    }
}
