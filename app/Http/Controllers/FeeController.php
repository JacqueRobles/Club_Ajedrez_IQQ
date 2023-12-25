<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fee;

class FeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fees = Fee::all();
        return view('fees.index', compact('fees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fees.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'amount' => 'required|numeric',
        ]);

        $fee = new Fee();
        $fee->name = $request->input('name');
        $fee->amount = $request->input('amount');
        $fee->save();

        return redirect()->route('fees.index')->with('success', 'Fee created successfully');
    }
     /* Display the specified resource.
     */
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fee = Fee::findOrFail($id);
        return view('fees.show', compact('fee'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fee = Fee::findOrFail($id);
        return view('fees.edit', compact('fee'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',          //change
            'amount' => 'required|numeric',         //change
        ]);

        $fee = Fee::findOrFail($id);
        $fee->name = $request->input('name');
        $fee->amount = $request->input('amount');
        $fee->save();

        return redirect()->route('fees.index')->with('success', 'Fee updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fee = Fee::findOrFail($id);
        $fee->delete();

        return redirect()->route('fees.index')->with('success', 'Fee deleted successfully');
    }
}
