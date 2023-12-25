<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pupil;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

class PupilController extends Controller
{
    protected $userService; 
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    
        $this->middleware('role:directive')->only(['create', 'store']);

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pupils = Pupil::all();
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

            ]);
    
            // Create the User and Pupil
            $user = $this->userService->createUser($data, 'pupil');
    
            return redirect()->route('pupil.show', $user->userable->id);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pupil = Pupil::findOrFail($id);
        return view('pupil.show', compact('pupil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pupil = Pupil::findOrFail($id);
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
        ]);

        $pupil = Pupil::findOrFail($id);
        $pupil->update($data);

        return redirect()->route('pupil.show', $pupil->id);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pupil = Pupil::findOrFail($id);
        $pupil->delete();

        return redirect()->route('pupil.index');
    }
}
