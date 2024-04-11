<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;
use App\Models\Fiche_travail;
use App\Http\Requests\FicheTravailRequest;

class FicheTravailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ficheTravailValiders = Fiche_travail::where('valider', true)->get();
        $ficheTravailNonValiders = Fiche_travail::where('valider',false)
        ->where('is_deleted',false) ->get();
       
        $ficheTravailArchivers = Fiche_travail::where('is_deleted',true)->get();
       return view('fiches_travails.index', compact('ficheTravailNonValiders','ficheTravailValiders','ficheTravailArchivers'));
    }

    public function validerFicheTravail(Fiche_travail $fichestravails){
       
        $fichestravails->valider=true;
        $fichestravails->save();
        return back()->with('success', 'Fiche de travail Validée Avec Succès.');
    }

    public function archiver(Fiche_travail $fichestravails){
        $fichestravails->is_deleted=true;
        $fichestravails->save();
        return back()->with('success', 'Fiche de travail Archivée Avec Succès.');
    }

    public function desarchiver(Fiche_travail $fichestravails){
        $fichestravails->is_deleted=false;
        $fichestravails->save();
        return redirect()->route('fiches_travails.index')->with('success', 'Fiche de travail Archivée Avec Succès.');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Facture $facture  )
    {
        return view('fiches_travails.create', compact('facture'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FicheTravailRequest $request , Facture $facture)
    {
       
        $donneFicheTravail = $request->validated();
        $donneFicheTravail['facture_id'] = $facture->id;
        $donneFicheTravail['valider'] = $request->has('valider') ? 1 : 0;

        $ficheTravail = Fiche_travail::create($donneFicheTravail);
       
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
    public function update(FicheTravailRequest $request, Fiche_travail $ficheTravail)
    {
       $donneFicheTravail = $request->validated();
       $ficheTravail->update($donneFicheTravail);
       return redirect()->route('fiches_travails.index')->with('success', 'Fiche de travail mis à jour avec succès.');
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
