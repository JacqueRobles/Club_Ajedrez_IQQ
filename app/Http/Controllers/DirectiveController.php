<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use app\Models\Directive;

class DirectiveController extends Controller
{
    public function __construct()
    {

    
        $this->middleware(['role:directive', 'role:admin'])->only(['create', 'store', 'update', 'edit', 'destroy']);  //admin o no admin?

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all directives from the database
        $directives = User::where('role:directive')->get();

        // Return the directives as a response
        return view('directives.index', compact('directives'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view for creating a new directive
        return view('directives.create')->render();
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'password' => 'required|string', // Assuming you want to set a password for the User
            // Add validation rules for the additional attributes here
        ]);
    
        // Use the UserService to create a new Directive and associated User
        $directive = $this->userService->createUser($validatedData, 'directive');
    
        // Return a success response
        return response()->json(['message' => 'Directive created successfully']);
    }

    /**
     * Display the specified resource.
     */
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the directive by ID
        $directive = Directive::find($id);

        // Check if the directive exists
        if (!$directive) {
            // Return a not found response
            return response()->json(['message' => 'Directive not found'], 404);
        }

        // Return the directive as a response
        return response()->json($directive);
    }
    /**
     * Show the form for editing the specified resource.
     */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the directive by ID
        $directive = Directive::find($id);

        // Check if the directive exists
        if (!$directive) {
            // Return a not found response
            return response()->json(['message' => 'Directive not found'], 404);
        }

        // Return the view for editing the directive
        return view('directives.edit', compact('directive'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the directive by ID
        $directive = Directive::find($id);

        // Check if the directive exists
        if (!$directive) {
            // Return a not found response
            return response()->json(['message' => 'Directive not found'], 404);
        }

        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            // Add validation rules for the additional attributes here
            'additional_attribute' => 'required',
        ]);

        // Extract the user attributes
        $userAttributes = [
            'email' => $validatedData['email'],
            // Add more user attributes here if needed
        ];

        // Remove the user attributes from the original attributes array
        unset($validatedData['email']);

        // Update the User associated with the Directive
        $directive->user->update($userAttributes);

        // Update the Directive with the validated data
        $directive->update($validatedData);

        // Return a success response
        return response()->json(['message' => 'Directive updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the directive by ID
        $directive = Directive::find($id);

        // Check if the directive exists
        if (!$directive) {
            // Return a not found response
            return response()->json(['message' => 'Directive not found'], 404);
        }

        // Delete the directive from the database
        $directive->delete();

        // Return a success response
        return response()->json(['message' => 'Directive deleted successfully']);
    }
}