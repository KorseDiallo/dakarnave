<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
  
    public function index()
    {
        $factures = Facture::all();
        return view('factures.index', compact('factures'));
    }

    public function validated_facture()
    {
        $factures = Facture::where('valider'==true)->get();
        return view('factures.validated_facture', compact('factures'));

    }

    public function invalidated_facture()
    {
        $factures = Facture::where('valider'==false)->get();
        return view('factures.invalidated_facture', compact('factures'));

    }


    public function create()
    {
        return view('factures.create');
    }


    public function store(Request $request)
    {
        $facture = new Facture($request->all());
        $facture->save();
        return redirect()->route('factures.index')->with('success', 'Facture ajoutée avec succès.');
    }


    public function show(Facture $facture)
    {
        return view('factures.show', compact('facture'));
    }


    public function edit(Facture $facture)
    {
        return view('factures.edit', compact('facture'));
    }


    public function update(Request $request, Facture $facture)
    {
        $facture->update($request->all());
        return redirect()->route('factures.index')->with('success', 'Facture mise à jour avec succès.');
    }


    public function destroy(Facture $facture)
    {
        $facture->delete();
        return redirect()->route('factures.index')->with('success', 'Facture supprimée avec succès.');
    }
}
