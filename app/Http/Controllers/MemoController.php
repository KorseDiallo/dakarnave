<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $memos = Memo::all();
        return view('memos.index', compact('memos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('memos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $memo = new Memo($request->all());
        $memo->save();
        return redirect()->route('memos.index')->with('success', 'Mémo ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Memo $memo)
    {
        return view('memos.show', compact('memo'));
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
        $memo->update($request->all());
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
