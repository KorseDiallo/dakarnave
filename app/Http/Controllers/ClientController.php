<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\InformationBancaire;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\updateClientRequest;


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
    public function store(ClientRequest $request)
    {
    // dd($request);
       // $clientValider = $request->validated();
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
            $informationBancaire->adresseBancaire=$request->adresseBancaire;
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
        $infoBancaireClient = InformationBancaire::whereId($client->id)->first();

        return view('clients.show', compact('client', 'infoBancaireClient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        $infoBancaireClient = InformationBancaire::whereId($client->id)->first();
        return view('clients.edit', compact('client', 'infoBancaireClient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateClientRequest $request, Client $client)
    {
       

    
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
            $informationBancaire->adresseBancaire=$request->adresseBancaire;
            $informationBancaire->pays=$request->pays;
            $informationBancaire->iban=$request->iban;
            $informationBancaire->swift=$request->swift;
            $informationBancaire->client_id=$client->id;
            if( $informationBancaire->save()){
                return redirect()->route('clients.index')->with('success', 'Client modifié avec succès.');
            }
        }

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
