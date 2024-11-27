<?php
use Laravel\Fortify\Fortify;
use App\Http\Controllers\UserController; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\CommentairesController;
use App\Http\Controllers\FormContactController;
use App\Http\Controllers\FormPartenaireController;
use App\Http\Controllers\ReseauController;
use App\Http\Controllers\realisationController;
use App\Http\Controllers\ProduitsController;

use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\PayPalController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return view('Front.master');
})->name('home');

Route::get('Nos_réalisation/', [realisationController::class, 'public'])->name('realisation');
Route::get('Prestation_de_services/', function(){
    return view('Front.services');
})->name('services');
Route::get('BE_store/', function(){
    return view('Front.BE-store', ['produits' => \App\Models\Produits::all()]);
})->name('store');

Route::get('Nous_Contacter/', [FormContactController::class, 'show'])->name('contact');

Route::get('Panier/',function(){
    return view('Front.panier');
})->name('panier');
Route::get('views/',function(){
    return view('Front.view');
})->name('view');

//Faire les routes des vue
Route::get('Services/Audits',function(){
    return view('Front.audits');
})->name('audits');

Route::get('Services/Modelisation',function(){
    return view('Front.modelisation');
})->name('modelisation');

Route::get('Services/Conception',function(){
    return view('Front.conception');
})->name('conception');

Route::get('Services/Solutions',function(){
    return view('Front.solution');
})->name('solution');

Route::get('Services/Vente_KEA',function(){
    return view('Front.vente');
})->name('vente');

//Route::post('Partenaires/traitement',[PartenairesController::class,  'store'])->name('partenaire');
Route::post('/Partenaires/add/', [FormPartenaireController::class, 'store'])->name('form');
Route::post('/cart/addition/{product}', [CartController::class, 'add_aff'])->name('cart.addition_aff');

//Contact
Route::post('/Contact/add/', [FormContactController::class, 'store'])->name('form_contact');

//Produits
Route::get('/cart/count', [CartController::class, 'count'])->name('count');

//Route::get('/cart/items', [CartController::class, 'getCartItems'])->name('cart.items');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
//Gestion de la cart
Route::get('/cart/items', [CartController::class, 'getCartItems'])->name('cart.items');
Route::post('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');



Route::post('/cart/ajout/{id}', [CartController::class, 'add'])->name('cart.addition');
Route::get('/cart/add/{id}', [CartController::class, 'add'])->name('cart.rel');
Route::get('/cart', [CartController::class, 'view'])->name('cart.view');
Route::delete('/cart/delete/{id}', [CartController::class, 'remove'])->name('cart.del');
//Affichage de la pqge d'achat
Route::get('/BE_store/achat/{id}', [ProduitsController::class, 'details'])->name('prod');
//Vider la corbeil
//Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');
//Gestion des commentaires
Route::post('/BE_store/achat/{id}/traitement',[CommentairesController::class, 'store'])->name('Commentaires');
//Requete $request->ajax()
Route::put('/update-quantity-ajax', [ProduitsController::class, 'updateAjax'])->name('updateQuantityAjax');
//Recherche de produits
Route::get('/search', [ProduitsController::class, 'search'])->name('articles.search');


//route de reset

Route::get('login/reset',function(){
    return view('auth.reset-password');
})->name('reset');

Fortify::resetPasswordView(fn() => view('auth.reset-password'));

//Gestion du dashbord

Route::middleware('auth')->group(function(){
    Route::get('Dashboard/',[FormPartenaireController::class, 'show'])->name('admin');
});
//Route::get('Dashboard/',[FormPartenaireController::class, 'show'])->name('admin');

//Commande
Route::post('/Panier/add/', [CommandeController::class,  'store'])->name('form_achat');

//Gestion des users
Route::post('/register/add/', [AvisController::class, 'store'])->name('form_user');

//Back du site

/*----------------Liste des produits------------------------*/


//Ajout
Route::post('/Dashboard/produits/add/', [ProduitsController::class, 'store'])->name('form_product');

//Affichage de la page d'achat

Route::get('/Dashboard/produits/', [ProduitsController::class, 'public'])->name('product_view');

//Suppression
Route::get('/Dashboard/remove/{id}', [ProduitsController::class, 'delete'])->name('product.remove');

//Mise a jour
Route::get('/Dashboard/produits/update/{id}', [ProduitsController::class, 'updateView'])->name('form_product_update');
Route::post('/Dashboard/produits/update/traitement', [ProduitsController::class, 'update'])->name('update_product');

/*--------------------Gestion des users-------------------------------*/
Route::post('/logout',[AuthenticatedSessionController::class, 'destroy'])->name('logout');
//Modifier le statut
Route::post('Dashboard/traitement/{id}',[UserController::class,'role'])->name('role');
//Afficer
//Mise a jour
Route::get('/Dashboard/update/{$id}', [UserController::class, 'roleView'])->name('form_user_update');
//Gestion Ajout
Route::post('/', [UserController::class, 'store'])->name('signup');
//Suppression
Route::delete('/User/remove/{id}', [UserController::class, 'delete'])->name('user.remove');
/*---------------Gestion des realisations----------------------*/
//Affichage
Route::get('/Dashboard/Realisations/', [ReseauController::class, 'real'])->name('real_view');

//Gestion du chat
Route::get('chatbox/',function(){

    view('Front.chatbot');
})->name('chat');

/*---------------Gestion des Realisations--------------------*/
//Ajout
Route::post('/Dashboard/Realisation/traitement', [ReseauController::class, 'store'])->name('realisation_add');
//Suppression
Route::delete('/Dashboard/remove/{id}', [ReseauController::class, 'destroy'])->name('real.remove');

//panier
//Gestion du chat
Route::get('test/',function(){

    view('Front.pointVente');
})->name('vent');
/*Paypal*/

Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
Route::get('capture-transaction', [PayPalController::class, 'captureTransaction'])->name('captureTransaction');