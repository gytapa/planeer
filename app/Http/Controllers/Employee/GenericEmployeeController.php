<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class GenericEmployeeController extends Controller
{

    /**
     * Checks to see if user is logged in
     */
    public function checkGuard()
    {
        $user = Auth::guard('employee')->user();
        if (!isset($user))
        {
            die("unauthenticated");
        }
    }
}
