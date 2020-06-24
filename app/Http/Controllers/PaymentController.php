<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index(Request $request){
        
        if (Auth::check()) {
            $data= $request->all();
            return view("payment")->with(["plan_id" => $data["plan_id"], "address_id" => $data["address_id"]]); 
        }
        return redirect()->route('login');
    }

    public function boleto(){
        return view("boleto");
    }

    public function finaliar(){
        return view('compra_finalizada');
    }
    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     if (Auth::check()) {
            
    //     }
    //     return redirect()->route('login');
    // }

}
