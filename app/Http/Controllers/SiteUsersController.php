<?php

namespace App\Http\Controllers;

use App\Models\siteUsers;
use Illuminate\Http\Request;

class SiteUsersController extends Controller
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
            
            
            
        ]); 
        $user = new siteUsers();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->password_confirmation = $request->password_confirmation;
        $user->avatar = $request->avatar;
        
        $user->save();
        return redirect('/')->with('statut','Vous avez ete enregistrer.');
    }

    /**
     * Display the specified resource.
     */
    public function show(siteUsers $siteUsers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(siteUsers $siteUsers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, siteUsers $siteUsers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(siteUsers $siteUsers)
    {
        //
    }
}