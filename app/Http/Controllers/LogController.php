<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LogController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            if(Auth::user()->groupid == 2)
            {
                $logs = DB::table('users')->join('logs', 'client_id', '=', 'id')->paginate(5);

                return view('logs_history')->with(['logs' => $logs]);
            }
            return redirect()->route('profile');
        }
        return redirect()->route('login');
    }
}
