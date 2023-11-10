<?php

namespace App\Http\Controllers;

use App\Models\CreditCard;
use Illuminate\Http\Request;

class CreditCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creditCard = CreditCard::all();
        return $creditCard;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated  = request()->validate([
            'name' => 'required',
            'number' => 'required|decimal:2',
            'limit' => 'required',
            'due_date' => 'required',
            'interest_rate' => 'required|decimal:2',
            'account_id' => 'required'
        ],[
            'account_id.required' => 'The Account name field is required.',
        ]);

        $result = CreditCard::create([
            'name' => $validated['name'],
            'number' => $validated['number'],
            'limit' => $validated['limit'],
            'due_date' => $validated['due_date'],
            'interest_rate' => $validated['interest_rate'],
            'notes' => $request->notes ? $request->notes : ""
        ]);
        
        if($result) {
            return response()->json(['message' => 'Create account successfully']);
        } else {
            return response()->json(['error' => 'Create failed! Please try again later.'], 401);
        }
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
        $creditCard = CreditCard::find($id);
        return $creditCard;
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
        $validated  = request()->validate([
            'name' => 'required',
            'number' => 'required|decimal:2',
            'limit' => 'required',
            'due_date' => 'required',
            'interest_rate' => 'required|decimal:2',
            'account_id' => 'required'
        ],[
            'account_id.required' => 'The Account name field is required.',
        ]);

        $result = CreditCard::where('id', $id)->update([
            'name' => $validated['name'],
            'number' => $validated['number'],
            'limit' => $validated['limit'],
            'due_date' => $validated['due_date'],
            'interest_rate' => $validated['interest_rate'],
            'notes' => $request->notes ? $request->notes : ""
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
        $creditCard = CreditCard::find($id);
        $creditCard->delete();
        return response()->json(['success', true], 200);
    }
}
