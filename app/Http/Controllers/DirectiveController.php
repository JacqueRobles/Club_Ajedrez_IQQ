<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Directive;

class DirectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all directives from the database
        $directives = Directive::all();

        // Return the directives as a response
        return response()->json($directives);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view for creating a new directive
        return view('directives.create');
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
        ]);

        // Create a new directive instance
        $directive = new Directive();
        $directive->name = $validatedData['name'];
        $directive->email = $validatedData['email'];
        $directive->address = $validatedData['address'];

        // Save the directive to the database
        $directive->save();

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
        ]);

        // Update the directive with the validated data
        $directive->name = $validatedData['name'];
        $directive->email = $validatedData['email'];
        $directive->address = $validatedData['address'];

        // Save the updated directive to the database
        $directive->save();

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