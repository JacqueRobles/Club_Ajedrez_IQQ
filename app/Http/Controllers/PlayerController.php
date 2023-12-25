<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Services\UserService;

class PlayerController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::all();

        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:users',
        'surname' => 'required|string',
        'rut' => 'required|string',
        'v_digit' => 'required|string',
        'phone' => 'required|string',
        'state' => 'required|string',
        'age' => 'required|integer',
    ]);

    // Create the User and Player
    $user = $this->userService->createUser($data, 'player');

    return redirect()->route('index', $user->userable->id);
}
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $player = Player::findOrFail($id);

        return view('players.show', compact('player'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $player = Player::findOrFail($id);

        return view('players.edit', compact('player'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
            'surname' => 'required|string',
            'rut' => 'required|string',
            'v_digit' => 'required|string',
            'phone' => 'required|string',
            'state' => 'required|string',
            'age' => 'required|integer',
        ]);

        $player = Player::findOrFail($id);
        $player->update($data);

        return redirect()->route('index', $player->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $player = Player::findOrFail($id);
        $player->delete();

        return redirect()->route('index');
    }
}
