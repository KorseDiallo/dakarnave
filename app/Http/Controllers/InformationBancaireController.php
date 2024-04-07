<?php

namespace App\Http\Controllers;

use App\Models\InformationBancaire;
use Illuminate\Http\Request;

class InformationBancaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informationsBancaires = InformationBancaire::all();
        return view('informations_bancaires.index', compact('informationsBancaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('informations_bancaires.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $informationBancaire = new InformationBancaire($request->all());
        $informationBancaire->save();
        return redirect()->route('informations_bancaires.index')->with('success', 'Informations bancaires ajoutées avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(InformationBancaire $informationBancaire)
    {
        return view('informations_bancaires.show', compact('informationBancaire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InformationBancaire $informationBancaire)
    {
        return view('informations_bancaires.edit', compact('informationBancaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InformationBancaire $informationBancaire)
    {
        $informationBancaire->update($request->all());
        return redirect()->route('informations_bancaires.index')->with('success', 'Informations bancaires mises à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InformationBancaire $informationBancaire)
    {
        $informationBancaire->delete();
        return redirect()->route('informations_bancaires.index')->with('success', 'Informations bancaires supprimées avec succès.');
    }
}
