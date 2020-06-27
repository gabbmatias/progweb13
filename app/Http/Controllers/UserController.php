<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            if(Auth::user()->groupid == 2){
                $users = User::all();
                return view('upgrade_user')->with(['users' => $users]);
            }
        }
    }
}
