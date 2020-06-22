<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            session()->forget('back_url');
            $addresses = Address::where('client_id', Auth::user()->id)->get();

            return view('view_address')->with(['addresses' => $addresses]);
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
            return view('add_address');
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

            Address::create($data);
            if (session('back_url')){
                $url= explode('/', session('back_url'));
                session()->forget('back_url');
                return redirect()->route('address.select', ['plan' => end($url)]);
            }
            return redirect()->route('address.index');
        }
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
    }

    public function selectAddress($id)
    {
        session()->put('back_url', "{$_SERVER['REQUEST_URI']}");
        if(Auth::check()){
            $addresses = Address::where('client_id', Auth::user()->id)->get();
            $plan = Plan::where('plan_id', $id)->get();
            return view('address')->with(['plans' => $plan, 'addresses' => $addresses]);
        }
        else
            return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        if (Auth::check()) {
            $data = $request->all();
            $addresses = Address::where('address_id', $data['address_id'])->get();

            return view('edit_address')->with(['addresses' => $addresses]);
    }
    return redirect()->route('login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (Auth::check()) {
            $data = $request->all();
            unset($data['_token']);
            $address = Address::where('address_id', $data['address_id'])->update($data);
            if (session('back_url')){
                $url= explode('/', session('back_url'));
                session()->forget('back_url');
                return redirect()->route('address.select', ['plan' => end($url)]);
            }
            return redirect()->route('address.index');
        }
        return redirect()->route('login');
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
            Address::where('address_id', $data['address_id'])->delete();
            return redirect()->route('address.index');
        }
        return redirect()->route('login');
    }
}
