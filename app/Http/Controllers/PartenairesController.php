<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Partenaires;
use Illuminate\Http\Request;

class PartenairesController extends Controller
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
            'email'=>'required',
            'pays'=>'required',
            'numero'=>'required',
            'motif'=>'required',
        ]);
           $partenaire = new Partenaires();
           $partenaire->nom = $request->nom;
           $partenaire->email = $request->email;
           $partenaire->pays = $request->pays;
           $partenaire->numero = $request->numero;
           $partenaire->contenu = $request->contain;
           /*$partenaire->image = $request->file('image');
           if($request->hasFile('image')){
                $image_path = $partenaire->store('partenaires_image', 'public');
                $partenaire->image .= $image_path ;
            
           }*/
          $partenaire->save();
          return redirect('BE_store/')->with('status','Nous avons reçu votre formulaire');

    }

    /**
     * Display the specified resource.
     */
//
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partenaires $partenaires)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partenaires $partenaires)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partenaires $partenaires)
    {
        //
    }
}