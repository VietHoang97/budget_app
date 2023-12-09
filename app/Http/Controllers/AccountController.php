<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Helper\Utils;

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
            "{$accounts}.currency",
            "{$accounts}.balance",
            "{$accounts}.init_amount",
        ])
        ->get()->transform(function($item) {
            $item->balance = Utils::formatHumanMoney($item->balance);
            return $item;
        });
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $balance = $request->init_amount;
        $validated = request()->validate([
            'name' => 'required',
            'currency' => 'required',
            'init_amount' => 'required',
        ]);

        $result = Account::create([
            'name' => $validated['name'],
            'currency' => $validated['currency'],
            'balance' => $balance,
            'init_amount' => $validated['init_amount'],
        ]);
        if($result) {
            return response()->json(['message' => 'Create account successfully']);
        } else {
            return response()->json(['error' => 'Create failed! Please try again later.'], 401);
        }

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
        return $accounts;
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
        $validated = request()->validate([
            'currency' => 'required',
            'init_amount' => 'required|numeric',
        ]);

        $result = Account::where('id',$id)->update([
            'currency' => $validated['currency'],
            'init_amount' => $validated['init_amount'],
            'balance' => $validated['init_amount'],
            'notes' => $request->notes ? $request->notes : ''
        ]);
        if($result) {
            return response()->json(['message' => 'Update account successfully']);
        }else {
            return response()->json(['error' => 'Update failed! Please try again later.'], 401);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accounts = Account::find($id);
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
