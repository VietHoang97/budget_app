<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = with(new Account)->getTable();
        $data = Account::select([
            "{$accounts}.id",
            "{$accounts}.name",
            "{$accounts}.type",
            "{$accounts}.currency",
            "{$accounts}.balance",
            "{$accounts}.init_amount",
        ])->get();
        return  $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $balance = $request('init_amount');
        dd($balance);
        $validated = request()->validate([
            'name' => 'required',
            'type' => 'required',
            'currency' => 'required',
            'init_amount' => 'required',
        ]);

        Account::create([
            'name' => $validated['name'],
            'type' => $validated['type'],
            'currency' => $validated['currency'],
            'balance' => $validated['balance'],
            'init_amount' => $validated['init_amount'],
        ]);

        return response()->json(['message' => 'Create account successfully']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accounts =  Account::find($id);
        // dd($accounts, $id);
        return $accounts;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $accounts)
    {
        $validated = request()->validate([
            'name' => 'required',
            'type' => 'required',
            'currency' => 'required',
            'balance' => 'required',
            'init_amount' => 'required',
        ]);

        $accounts->update([
            $validated
        ]);

        return response()->json(['message' => 'Create account successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($accounts)
    {
        $accounts->delete();
        return response()->json(['success', true], 200);
    }

    public function getCurrency(Account $accounts)
    {
        $currencies = $accounts->currencies;
        $currency_arr = [];

        foreach ($currencies as $key => $value) {
            $parts = explode(' - ', $value);
            $currency_arr[] = [
                'id' => $key,
                'type' => $value,
                'icon' => $parts[1],
            ];
        }
        return $currency_arr;
    }
}
