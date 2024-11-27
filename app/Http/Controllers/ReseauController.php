<?php

namespace App\Http\Controllers;

use App\Models\Réalisation; 
use App\Models\Reseau;
use Illuminate\Http\Request;

class ReseauController extends Controller
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
    public function real(Request $request){
        $realisations = Réalisation::all();
        return view('Back.pages.realisation',compact('realisations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $real = new Réalisation();
        $real->sous_titre1 = $request->soustitre1;
        $real->description1 = $request->description1;
        $real->sous_titre2 = $request->soustitre2;
        $real->description2= $request->description2;
        //Principal
        if($request->hasFile('image_principal')){
            $image_path = $request->file('image_principal')->store('realisations_images', 'public');
            $real->image_principal .= $image_path ;
       }
       if($request->hasFile('image_sous1')){
        $image_path = $request->file('image_sous1')->store('realisations_sub1', 'public');
        $real->image_sous1 .= $image_path ;
       }

        
        if($request->hasFile('image_sous2')){
                $image_path = $request->file('image_sous2')->store('realisation_sub2', 'public');
                $real->image_sous2 .= $image_path ;
           }
        $real->save();
        return back()->with('statut','Le produit a bien été modifier.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reseau $reseau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reseau $reseau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){
        $real = Réalisation::find($request->id);
        $real->sous_titre1 = $request->soustitre1;
        $real->description1 = $request->description1;
        $real->sous_titre2 = $request->soustitre2;
        $real->description2= $request->description2;
        //Principal
        if($request->hasFile('image_principal')){
            $image_path = $request->file('image_principal')->store('realisations_images', 'public');
            $real->image_principal .= $image_path ;
       }
       if($request->hasFile('image_sous1')){
        $image_path = $request->file('image_sous1')->store('realisations_sub1', 'public');
        $real->image_sous1 .= $image_path ;
       }

        
        if($request->hasFile('image_sous2')){
                $image_path = $request->file('image_sous2')->store('realisation_sub2', 'public');
                $real->image_sous2 .= $image_path ;
           }
        $real->save();
        return back()->with('statut','Le produit a bien été modifier.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
    
         $produit = Réalisation::find($id);
         $produit->delete();
         return back();  
        
    }
}