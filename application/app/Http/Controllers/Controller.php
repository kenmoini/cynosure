<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    // authCheck - Performs general auth/redirect
    public function authCheck(Request $request) {
        //If the user is logged in, redirect to /admin/dashboard
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        //Otherwise, redirect to login
        else {
            return redirect()->route('login');
        }
    }
}
