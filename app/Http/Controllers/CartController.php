<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;





use App\Models\Produits;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function add(Request $request, $id)
    {
        $product = Produits::find($id);

        $cart = Session::get('cart', []);
        
        $product->stock = $product->stock - $request->number;
        
        if(isset($cart[$id])) {
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + $request->number;
        } else {
            $cart[$id] = [
                'nom' => $product->nom,
                'prix' => $product->prix,
                'code' => $product->code,
                'description' =>$product->description,
                'image' => $product->image,
                'quantity' => $request->number
            ];
        }

        Session::put('cart', $cart);
        $product->save(); 
        return redirect()->back()->with('success', 'Produit ajouté avec sucess au panier !');
    }
    
    public function add_aff(Request $request, $productId)
    {
        // Récupérer le produit par son ID (ou échouer si non trouvé)
        $product = Produits::findOrFail($productId);

        // Ajouter au panier (logique selon votre application)
        $quantity = $request->input('number', 1);
        $cart = session()->get('cart', []); // Exemple de panier stocké en session

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity; // Augmenter la quantité
        } else {
            $cart[$productId] = [
                'nom' => $product->nom,
                'prix' => $product->prix,
                'code' => $product->code,
                'description' =>$product->description,
                'image' => $product->image,
                'quantity' => $request->number
            ];
        }

        session()->put('cart', $cart); // Mettre à jour le panier en session

        // Compter le total d'articles dans le panier
        $cartCount = array_sum(array_column($cart, 'quantity'));

        // Retourner une réponse JSON
        return response()->json([
            'message' => 'Produit ajouté au panier avec succès.',
            'cartCount' => $cartCount, // Compteur mis à jour
        ]);
    }

    
    public function addToCart(Request $request)
{
    $cart = session()->get('cart', []);
    $produit = Produits::find($request->input('id'));
    // Les détails de l'élément envoyé par AJAX
    $id = $request->input('id');
    $nom = $produit->nom;
    $code = $produit->code;
    $prix = $produit->prix;
    $image = $produit->image;
    $quantity = $request->input('quantity', 1);

    // Si l'article est déjà dans le panier, on met à jour la quantité
    if (isset($cart[$id])) {
        $cart[$id]['quantity'] += $quantity;
    } else {
        // Sinon, on ajoute un nouvel élément
        $cart[$id] = [
            "nom" => $nom,
            "prix" => $prix,
            //"code" => $code,
            "quantity" => $quantity,
            "image" => $image,
        ];
    }

    // Sauvegarde le panier dans la session
    session()->put('cart', $cart);

    return response()->json(['success' => 'Produit ajouté au panier', 'cart' => $cart]);
}

/*    public function getCartItems()
{
    $cartItems = session()->get('cart', []);
    return response()->json($cartItems);
}*/

 // Récupérer les éléments du panier
 public function getCartItems()
 {
     $cart = Session::get('cart', []);
     $total = array_sum(array_map(fn($item) => $item['prix'] * $item['quantity'], $cart));
    
    
     return response()->json([
         'cart' => $cart,
         'total' => $total
         
     ]);
 }
 
 public function count()
    {
        // Récupérer le panier depuis la session
        $cart = session()->get('cart', []);

        // Compter le nombre d'éléments dans le panier
        $count = count($cart);

        // Retourner le nombre d'éléments dans une réponse JSON
        return response()->json(['count' => $count]);
    }
 // Supprimer un élément du panier
 public function removeFromCart($id)
 {
     $cart = Session::get('cart', []);
     if (isset($cart[$id])) {
         unset($cart[$id]);
         Session::put('cart', $cart);
     }
     return response()->json(['status' => 'success', 'message' => 'Item removed successfully']);
 }

 // Vider le panier
 public function clearCart()
 {
     Session::forget('cart');
     return response()->json(['status' => 'success', 'message' => 'Cart cleared successfully']);
 }
    public function view()
    {
        
        $cart = Session::get('cart', []);
        $products = Produits::all();
        $count = count($cart);
        return view('Front.panier', compact('cart','products','count'));
    }

    

    public function remove(Request $request ,$id)
    {
    $cart = Session::get('cart', []);
        $produit = Produits::find($id);
        $produit->stock += $request->number;
        $produit->save(); 
    if (isset($cart[$id])) {
        unset($cart[$id]);
        Session::put('cart', $cart);
        return redirect()->back()->with('success', 'Produit retiré du panier !');
    }

    return redirect()->back()->with('error', 'Produit non trouvé dans le panier.');
    }

    // Méthode pour vider le panier
   /* public function clearCart(Request $request)
    {
        // Vider la session du panier
        $request->session()->forget('cart');

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Le panier a été vidé avec succès.');
    }*/
}