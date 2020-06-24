<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Plan;
use App\Models\Address;
use App\Models\Credit_card;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $data = DB::table('subscriptions')
                ->join('addresses', 'addresses.address_id', '=', 'subscriptions.address_id')
                ->join('plans', 'plans.plan_id', '=', 'subscriptions.plan_id')
                ->where('subscriptions.client_id', '=',  Auth::user()->id)
                ->get();

            return view('view_subscriptions')->with(['subscriptions' => $data]);
        }
        return redirect()->route('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            $addresses = Address::where('client_id', Auth::user()->id)->get();

            $plans = Plan::all();

            return view('auth/create_subscription')->with(['addresses' => $addresses, 'plans' => $plans]);
        }
        return redirect()->route('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $data = $request->all();

            $date = $data['expires_date'];
            $date = explode('/', $date);
            $date = '20' . $date['1'] .'-'. $date['0'] . '-01';


            Subscription::create([
                'plan_id' => $data['plan_id'],
                'address_id' => $data['address_id'],
                'client_id' => Auth::user()->id
            ]);

            Payment::create([
                'subscription_id' => DB::getPdo()->lastInsertId(),
                'type' => $data['type']
            ]);

            Credit_card::create([
                'payment_id' => DB::getPdo()->lastInsertId(),
                'card_number' => $data['card_number'],
                'card_name' => $data['card_name'],
                'expires_date' => $date,
                'security_number' => $data['security_number']
            ]);
                       


            // var_dump($data);
        }
        // return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if (Auth::check()) {
            $data = $request->all();

            Subscription::where('subscription_id', '=', $data['subscription_id'])->delete();
            return redirect()->route('subscription.index');
        }
        return redirect()->route('login');
    }
}
