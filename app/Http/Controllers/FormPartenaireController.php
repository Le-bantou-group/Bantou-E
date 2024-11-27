<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Models\FormPartenaire;
use Illuminate\Http\Request;

class FormPartenaireController extends Controller
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
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'pays'=>'required',
            'numero'=>'required',
            'motif'=>'required',
        ]);
           $partenaire = new FormPartenaire();
           $partenaire->nom = $request->nom;
           $partenaire->nomcompany = $request->nomCompany;
           $partenaire->numero = $request->numero;
           $partenaire->numerocompany = $request->numeroCompany;
           $partenaire->pays = $request->pays;
           $partenaire->ville = $request->ville;
           $partenaire->motif = $request->motif;
           $partenaire->contenu = $request->contain;
           
          $partenaire->save();
          return redirect()->back()->with('statut','Nous avons recu votre formulaire');

    }
    
    /**
     * Display the specified resource.
     */
    
     public function show()
     {
        
         $customers = User::all();
         return view('Back.master',compact('customers'));
     }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormPartenaire $formPartenaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormPartenaire $formPartenaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormPartenaire $formPartenaire)
    {
        //
    }
}