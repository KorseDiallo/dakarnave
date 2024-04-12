<?php

namespace App\Http\Controllers;

use App\Models\Fiche_travail;
use App\Models\Memo;
use Illuminate\Http\Request;
use PDF;
class MemoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $memoValiders = Memo::where('valider', true)->get();
        $memoNonValiders = Memo::where('valider',false)
        ->where('is_deleted',false) ->get();
       
        $memoArchivers = Memo::where('is_deleted',true)->get();
        return view('memos.index', compact('memoValiders','memoNonValiders','memoArchivers'));
    }

    public function validerMemo(Memo $memo){
       
        $memo->valider=true;
        $memo->save();
        return back()->with('success', 'Memo Validé Avec Succès.');
    }

    public function archiver(Memo $memo){
        $memo->is_deleted=true;
        $memo->save();
        return back()->with('success', 'Memo Archivé Avec Succès.');
    }

    public function desarchiver(Memo $memo){
        $memo->is_deleted=false;
        $memo->save();
        return redirect()->route('memos.index')->with('success', 'Memo Archivé Avec Succès.');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Fiche_travail $ficheTravail)
    {
        return view('memos.create',compact('ficheTravail'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Fiche_travail $ficheTravail)
    {
        $memo = new Memo();
        $memo->amarrageNavire=$request->amarrageNavire;
        $memo->owner=$request->owner;
        $memo->desamarrageNavire=$request->desamarrageNavire;
        $memo->valider=$request->has('valider') ? 1 : 0;
        $memo->fiche_travail_id=$ficheTravail->id; 
        $memo->save();
        return redirect()->route('memos.index')->with('success', 'Mémo ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Memo $memo)
    {
      // dd($memo->ficheDetravail->facture->client->informationBancaires[0]['nomBanque']);
        return view('memos.show', compact('memo'));
    }
    public function downloadMemo(Memo $memo)
    {
       
        
        $pdf = PDF::loadView('download.memo', compact('memo'));
      
        return $pdf->download('memo-'. $memo->ficheDetravail->facture->client->nom.'.pdf');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Memo $memo)
    {
        return view('memos.edit', compact('memo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Memo $memo)
    {
        $memo->amarrageNavire=$request->amarrageNavire;
        $memo->desamarrageNavire=$request->desamarrageNavire;
        $memo->owner=$request->owner;
        $memo->update();
        return redirect()->route('memos.index')->with('success', 'Mémo mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Memo $memo)
    {
        $memo->delete();
        return redirect()->route('memos.index')->with('success', 'Mémo supprimé avec succès.');
    }
}
