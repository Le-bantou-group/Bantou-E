<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
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
            'total_prix'=>'required',
            'statut'=>'required',
            'nom'=>'required',
            'email'=>'required',
            'pays'=>'required',
            'numero'=>'required',
            'modeLivraison'=>'required',
            'adress'=>'required',
            'ville'=>'required',
            'code'=>'required',
            
            
        ]); 
        $command = new Commande();
        $command->total_prix = $request->total_dep;
        $command->nom = $request->nom;
        $command->email = $request->email;
        $command->pays = $request->pays;
        $command->numero = $request->numero;
        $command->modeLivraison = $request->modeLivraison;
        $command->adress = $request->adress;
        $command->ville = $request->ville;
        $command->code = $request->code;

        
        $command->save();
        return redirect()->back()->with('statut','Nous avons recu votre commandes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Commande $commande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commande $commande)
    {
        //
    }
}