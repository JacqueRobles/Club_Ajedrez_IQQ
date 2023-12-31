<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pupil;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

class PupilController extends Controller
{
    protected $userService; 
    public function __construct()
    {    
        $this->middleware('role:directive')->only(['create', 'store']);

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pupils = User::role('pupil')->get();
    
        return view('pupil.index', compact('pupils'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pupil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id_fide' => 'required|int',
            'city' => 'required|string',
            'street' => 'required|string',
            'street_num' => 'required|int',
            'elo' => 'required|integer',
            'name' => 'required|string',
            'email' => 'required|email',
            'surname' => 'required|string',
            'rut' => 'required|string',
            'v_digit' => 'required|string',
            'phone' => 'required|string',
            'state' => 'required|string',

        ]);
    
        $pupil = new User($data);
        $pupil->save();
    
        return redirect()->route('pupils.show', $pupil->id)->with('success', 'Pupil created successfully');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pupil = User::findOrFail($id);
        return view('pupil.show', compact('pupil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pupil = User::findOrFail($id);
        return view('pupil.edit', compact('pupil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'id_fide' => 'required|int',
            'city' => 'required|string',
            'street' => 'required|string',
            'street_num' => 'required|int',
            'elo' => 'required|integer',
            'name' => 'required|string',
            'email' => 'required|email',
            'surname' => 'required|string',
            'rut' => 'required|string',
            'v_digit' => 'required|string',
            'phone' => 'required|string',
            'state' => 'required|string',
        ]);

        $pupil = User::findOrFail($id);
        $pupil->update($data);

        return redirect()->route('pupil.show', $pupil->id)->with('success', 'Pupil updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pupil = User::findOrFail($id);
        $pupil->delete();

        return redirect()->route('pupil.index');
    }
}
