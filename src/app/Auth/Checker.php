<?php

namespace App\Auth;

use Illuminate\Http\Request;

class Checker
{
    public static function isLoggedIn(Request $request)
    {
        // if (!Session::has('authUser'))
        //     return route('signIn');
        return $request->session()->has('authUser');
    }
}
