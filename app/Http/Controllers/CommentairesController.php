<?php

namespace App\Http\Controllers;
use App\Models\Produits;
use App\Models\Commentaires;
use Illuminate\Http\Request;

class CommentairesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id)
    {
        $commentaire = new Commentaires();
        $commentaire->users_id = $request->user;
        $commentaire->name = $request->name;
        $commentaire->email = $request->email;
        $commentaire->note = $request->note;
        $commentaire->commentaire = $request->commentaire;
        $produit = Produits::find($id);
        
    $commentaire->save();
    return view('Front.achat',compact('produit'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Commentaires $commentaires)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commentaires $commentaires)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commentaires $commentaires)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commentaires $commentaires)
    {
        //
    }
}