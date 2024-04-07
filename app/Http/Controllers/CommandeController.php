<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Fiche_travail;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fichesTravails = Fiche_travail::all();
        return view('fiches_travails.index', compact('fichesTravails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fiches_travails.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ficheTravail = new Fiche_travail($request->all());
        $ficheTravail->save();
        return redirect()->route('fiches_travails.index')->with('success', 'Fiche de travail ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fiche_travail $ficheTravail)
    {
        return view('fiches_travails.show', compact('ficheTravail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fiche_travail $ficheTravail)
    {
        return view('fiches_travails.edit', compact('ficheTravail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fiche_travail $ficheTravail)
    {
        $ficheTravail->update($request->all());
        return redirect()->route('fiches_travails.index')->with('success', 'Fiche de travail mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fiche_travail $ficheTravail)
    {
        $ficheTravail->delete();
        return redirect()->route('fiches_travails.index')->with('success', 'Fiche de travail supprimée avec succès.');
    }
}
