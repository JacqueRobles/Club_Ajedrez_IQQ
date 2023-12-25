<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tournament;

class TournamentController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:directive')->only('store');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tournaments = Tournament::all();

        return view('tournaments.index', compact('tournaments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tournaments.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            // Add your validation rules here
            'city' => 'required|string',
            'format' => 'required|string',
            'date' => 'required|date',
            'game_rythm' => 'required|int',
            'description' => 'required|string',
            'inscriptions' => 'required|string',
            'category' => 'required|string',
            'prizes' => 'required|string',
            'contact' => 'required|string',
            'general_referee' => 'required|string',
            'organizer' => 'required|string',
            'quotas' => 'required|int',
        ]);

        // Create the Tournament
        $tournament = Tournament::create($data);

        return redirect()->route('tournaments.show', $tournament->id);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tournament = Tournament::findOrFail($id);

        return view('tournaments.show', compact('tournament'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tournament = Tournament::findOrFail($id);

        return view('tournaments.edit', compact('tournament'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            // Add your validation rules here
            'city' => 'required|string',
            'format' => 'required|string',
            'date' => 'required|date',
            'game_rythm' => 'required|int',
            'description' => 'required|string',
            'inscriptions' => 'required|string',
            'category' => 'required|string',
            'prizes' => 'required|string',
            'contact' => 'required|string',
            'general_referee' => 'required|string',
            'organizer' => 'required|string',
            'quotas' => 'required|int',
        ]);

        $tournament = Tournament::findOrFail($id);
        $tournament->update($data);

        return redirect()->route('tournaments.show', $tournament->id);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tournament = Tournament::findOrFail($id);
        $tournament->delete();

        return redirect()->route('tournaments.index');
    }
}
