<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = User::where('role:director')->get();
        return view('partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('directors.create');
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
    
        $director = new User($request->all());
        $director->save();
        
            return redirect()->route('directors.show', $director->id)->with('success', 'Director created successfully');
    }    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $director = User::findOrFail($id);
        return view('directors.show', compact('director'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $director = User::findOrFail($id);
        return view('directors.edit', compact('director'));
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

        $director = User::findOrFail($id);
        $director->name = $request->input('name');
        $director->email = $request->input('email');
        $director->save();

        return redirect()->route('directors.index')->with('success', 'Director updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $director = User::findOrFail($id);
        $director->delete();

        return redirect()->route('directors.index')->with('success', 'Director deleted successfully');
    }
}
