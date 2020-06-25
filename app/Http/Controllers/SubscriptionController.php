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
use PhpParser\Node\Stmt\Break_;

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
                ->join('payments', 'payments.subscription_id', '=', 'subscriptions.subscription_id')
                ->leftjoin('charges', 'payments.payment_id', '=', 'charges.payment_id') 
                ->leftjoin('credit_cards', 'payments.payment_id', '=', 'credit_cards.payment_id')
                ->where('subscriptions.client_id', '=',  Auth::user()->id)->select('name', 'email as user_email')->get();


            foreach ($data as $subscription)
            {
                var_dump($subscription);
                echo '<br> <br>';
            }

            // return view('view_subscriptions')->with(['subscriptions' => $data]);
        }
        // return redirect()->route('login');
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
            if($this->checkPlan($data['plan_id'])){
                
                $date = $data['expires_date'];
                $date = explode('/', $date);
                $date = '20' . $date['1'] .'-'. $date['0'] . '-01';

                if($data['security_number-typed'] != $data['security_number'])
                {
                   echo 'CVV invalido';
                   return;
                }

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

                echo 'plano criado';   
                return; 
            }

            echo 'plano existente';
            return;
        }
        return redirect()->route('login');
    }

    public function checkPlan($plan_id)
    {
       $check =  DB::table('subscriptions')->join('plans', 'plans.plan_id', '=', 'subscriptions.plan_id')->where('client_id', '=', Auth::user()->id)->get();
       
       foreach ($check as $subs)
        if($subs->plan_id == $plan_id)
            return false;
        return true;
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
    public function edit()
    {
        return view('edit_subscription');
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
