<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
  // Assurez-vous d'importer le modèle correspondant
use App\Models\Produits;

class ProduitsController extends Controller
{
    public function store(Request $request)
    {
         
        $product = new Produits();
        $product->nom = $request->nom;
        $product->prix = $request->prix;
        $product->stock = $request->stock;
        $product->code = $request->code;
        $product->description = $request->description;
        
        if($request->hasFile('image')){
                $image_path = $request->file('image')->store('products_images', 'public');
                $product->image .= $image_path ;
           }
           $product->etoile = $request->etoile;
        $product->save();
        return back();
    }
    public function updateView($id){
        $produit = Produits::find($id);
        return view('Back\pages\update_produit',compact('produit'));
    }
    public function update(Request $request){
        $product = Produits::find($request->id);
        $product->nom = $request->nom;
        $product->prix = $request->prix;
        $product->stock = $request->stock;
        $product->code = $request->code;
        $product->description = $request->description;
        
        if($request->hasFile('image')){
                $image_path = $request->file('image')->store('products_images', 'public');
                $product->image .= $image_path ;
           }
        $product->etoile = $request->etoile;
        $product->save();
        return back()->with('statut','Le produit a bien été modifier.');

    }
    //Details du Produits
    public function details($id){
     $produit = Produits::find($id);
     return view('Front.achat',compact('produit'));   
    }
    public function updateAjax(Request $request)
    {
        // Valider la nouvelle quantité
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        // Trouver l'élément à mettre à jour (par exemple, un produit)
        $product = Produits::findOrFail($request->id);

        // Mettre à jour la quantité
        $product->quantity = $request->quantity;
        $product->save();

        // Retourner une réponse JSON
        return response()->json(['success' => 'Quantité mise à jour avec succès.']);
    }

public function search(Request $request)
{
    $query = $request->input('query'); // Récupère la valeur de recherche

    // Rechercher les produits correspondant au query
    $products = Produits::where('nom', 'like', '%' . $query . '%')->get();

    // Retourner les résultats en JSON
    return response()->json($products);
}

    public function search2(Request $request)
    {
        
        $query = $request->input('query');
        $articles = [];

        if ($query) {
            $articles = Produits::where('nom', 'LIKE', "%{$query}%")
                                ->orWhere('description', 'LIKE', "%{$query}%")
                                ->get();
        }
        
        return response()->json([
         'articles' => $articles,
         'query' => $query
         
     ]);

    //    return view('Front.Recherche-store', compact('articles', 'query'));
    }
    public function public()
    {
         
         $produits = Produits::paginate(6);
         return view('Back.pages.widget-data', compact('produits'));
        
    }
    public function shop($id)
    {
         
         $produits = Produits::find($id);
         return view('Front.achat', compact('prod'));
        
    }
    public function delete($id)
    {
         $produit = Produits::find($id);
         $produit->delete();
         return back();  
    }
    
    
}