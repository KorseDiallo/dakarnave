<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\InformationBancaire;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->raisonSocial=$request->raisonSocial;
        $client->nom=$request->nom;
        $client->adresse=$request->adresse;
        $client->telephone=$request->telephone;
        $client->email=$request->email;
        $client->montantPlafond=$request->montantPlafond;
        $client->email=$request->email;
        $client->client=$request->has('client') ? 1 : 0; 
        $client->fournisseur=$request->has('fournisseur') ? 1 : 0;
        if($client->save()){
            $informationBancaire= new InformationBancaire();
            $informationBancaire->nomBanque=$request->nomBanque;
            $informationBancaire->adresse=$request->adresse;
            $informationBancaire->pays=$request->pays;
            $informationBancaire->iban=$request->iban;
            $informationBancaire->swift=$request->swift;
            $informationBancaire->client_id=$client->id;
            if( $informationBancaire->save()){
                return redirect()->route('clients.index')->with('success', 'Client ajouté avec succès.');
            }
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $client->update($request->all());
        return redirect()->route('clients.index')->with('success', 'Client mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Client supprimé avec succès.');
    }
}
