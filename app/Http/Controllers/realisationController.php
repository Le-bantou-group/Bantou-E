<?php

namespace App\Http\Controllers;
use App\Models\Réalisation;
use Illuminate\Http\Request;

class realisationController extends Controller
{
    public function public()
    {
        
         $real = Réalisation::first();
         return view('Front.realisation', compact('real'));
        
    }
}