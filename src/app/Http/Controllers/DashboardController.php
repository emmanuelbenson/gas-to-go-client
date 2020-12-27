<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Auth\Checker;
use Illuminate\Support\Facades\Session;

class DashboardController extends ParentController
{
    public function index()
    {
        $data = request()->session()->has('authUser') ? request()->session()->get('authUser') : null;
        // dd($data);

        return view('app.dashboard');
    }
}
