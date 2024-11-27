<?php

namespace App\Http\Controllers;


use App\Models\FormContact;
use Illuminate\Http\Request;

class FormContactController extends Controller
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
            
            
        ]); 
        $user = new FormContact();
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->pays = $request->pays;
        $user->numero = $request->numero;
        $user->city = $request->city;
        $user->message = $request->message; 
        $user->image =$request->image;
       
        $user->save();
        return redirect('Nous_Contacter/')->with('statut','Nous avons recu votre formulaire');
    }
    

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $commentaires = FormContact::latest()->take(8)->get();
        return view('Front.Contact',compact('commentaires'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormContact $formContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormContact $formContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormContact $formContact)
    {
        //
    }
}