<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // Fetch all children from the database
        $children = Child::get();
        $title = 'Children';
        
        // Pass the $children data to the view
        return view('admin.childrenTable', compact('children', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $child = Child::with(['parent', 'class', 'teachers'])->findOrFail($id);

    // Return the edit view with the client data
        return view('admin.showChild', compact('child'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $child = Child::findOrFail($id);
        return view('admin.editChildren', compact('child'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'grade' => 'required|string|max:255',
        ]);

        $child = Child::findOrFail($id);
        $child->update($request->all());

        return redirect()->route('admin.childrenTable')->with('success', 'Child updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
