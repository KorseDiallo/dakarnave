<?php

namespace App\Http\Controllers;

use App\Http\Requests\FactureRequest;
use App\Models\Client;
use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
  
    public function index()
    {
        
         $factureValiders = Facture::where('valider', true)->get();
         $facturesNonValiders = Facture::where('valider',false)->get();
         $facturesArchivers = Facture::where('is_deleted',true)->get();
        return view('factures.index', compact('facturesNonValiders','factureValiders','facturesArchivers'));
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


    public function create(Client $client)
    {
        return view('factures.create',compact('client'));
    }


    public function store(Request $request,Client $client)
    {
        
        $facture = new Facture();
        // $facture->numeroFacture=$request->numeroFacture;
        $facture->debutTravaux=$request->debutTravaux;
        $facture->finTravaux=$request->finTravaux;
        $facture->detailTravaux=$request->detailTravaux;
        $facture->montantBrut=$request->montantBrut;
        $facture->reductionDiscussion=$request->reductionDiscussion;
        $facture->reductionRabaisFlotte=$request->reductionRabaisFlotte;
        $facture->reductionRabaisNavire=$request->reductionRabaisNavire;
        $facture->langue=$request->langue;
        $facture->devise=$request->devise;
        $facture->valider=$request->has('valider') ? 1 : 0; 
        $facture->client_id=$client->id; 
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
