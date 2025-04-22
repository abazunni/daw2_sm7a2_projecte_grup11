<?php

namespace App\Http\Controllers;

use App\Models\Departament;
use Illuminate\Http\Request;

class DepartamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departaments = Departament::all();
        return view('departaments.index', compact('departaments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departaments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'localitzacio' => 'required|string|max:255',
            'director_departament' => 'required|string|max:255',
        ]);

        Departament::create($validated);

        return redirect()->route('departaments.index')
            ->with('success', 'Departament created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departament $departament)
    {
        return view('departaments.show', compact('departament'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departament $departament)
    {
        return view('departaments.edit', compact('departament'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departament $departament)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'localitzacio' => 'required|string|max:255',
            'director_departament' => 'required|string|max:255',
        ]);

        $departament->update($validated);

        return redirect()->route('departaments.index')
            ->with('success', 'Departament updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departament $departament)
    {
        $departament->delete();

        return redirect()->route('departaments.index')
            ->with('success', 'Departament deleted successfully.');
    }
}
