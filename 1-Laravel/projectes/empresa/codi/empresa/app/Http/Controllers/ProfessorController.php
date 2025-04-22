<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\Departament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Eager load the departament relationship
        $professors = Professor::with('departament')->get();
        return view('professors.index', compact('professors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Check if user is admin
        if (Auth::user()->role !== 'administrador') {
            return redirect()->route('consultor.dashboard')
                ->with('error', 'You do not have permission to access this page.');
        }

        $departaments = Departament::all();
        return view('professors.create', compact('departaments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Check if user is admin
        if (Auth::user()->role !== 'administrador') {
            return redirect()->route('consultor.dashboard')
                ->with('error', 'You do not have permission to access this page.');
        }

        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'correu' => 'required|email|max:255',
            'adreca' => 'required|string|max:255',
            'ciutat' => 'required|string|max:255',
            'mobil' => 'required|string|max:20',
            'telefon' => 'required|string|max:20',
            'departament' => 'required|exists:departaments,identificador',
        ]);

        Professor::create($validated);

        return redirect()->route('professors.index')
            ->with('success', 'Professor created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Professor $professor)
    {
        // Eager load the departament relationship
        $professor->load('departament');
        return view('professors.show', compact('professor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professor $professor)
    {
        // Check if user is admin
        if (Auth::user()->role !== 'administrador') {
            return redirect()->route('consultor.dashboard')
                ->with('error', 'You do not have permission to access this page.');
        }

        $departaments = Departament::all();
        return view('professors.edit', compact('professor', 'departaments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Professor $professor)
    {
        // Check if user is admin
        if (Auth::user()->role !== 'administrador') {
            return redirect()->route('consultor.dashboard')
                ->with('error', 'You do not have permission to access this page.');
        }

        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'correu' => 'required|email|max:255',
            'adreca' => 'required|string|max:255',
            'ciutat' => 'required|string|max:255',
            'mobil' => 'required|string|max:20',
            'telefon' => 'required|string|max:20',
            'departament' => 'required|exists:departaments,identificador',
        ]);

        $professor->update($validated);

        return redirect()->route('professors.index')
            ->with('success', 'Professor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professor $professor)
    {
        // Check if user is admin
        if (Auth::user()->role !== 'administrador') {
            return redirect()->route('consultor.dashboard')
                ->with('error', 'You do not have permission to access this page.');
        }

        $professor->delete();

        return redirect()->route('professors.index')
            ->with('success', 'Professor deleted successfully.');
    }
}
