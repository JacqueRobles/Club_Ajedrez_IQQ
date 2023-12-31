<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = User::where('role:partner')->get();
        return view('partners.index', compact('partners'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'inscription_date' => 'required|date',
            'city' => 'required|max:255',
            'street' => 'required|max:255',
            'street_num' => 'required|max:255',
        ]);

        $partner = new User($request->all());
        $partner->save();
        
        return redirect()->route('parteners.show', $partner->id)->with('success', 'Partner created successfully');
    }

    /**
     * Display the specified resource.
     */
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $partner = User::findOrFail($id);
        return view('partners.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $partner = User::findOrFail($id);
        return view('partners.edit', compact('partner'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
        ]);

        $partner = User::findOrFail($id);
        $partner->name = $request->input('name');
        $partner->email = $request->input('email');
        $partner->save();

        return redirect()->route('partners.index')->with('success', 'Partner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partner = User::findOrFail($id);
        $partner->delete();

        return redirect()->route('partners.index')->with('success', 'Partner deleted successfully');
    }
}
