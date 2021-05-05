<?php

use App\Http\Controllers\BoutiqueController;
use App\Http\Controllers\Categorie_BoutiqueController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\Detaille_CommandeController;
use App\Http\Controllers\LivraisonController;
use App\Http\Controllers\ProduitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
 * Api CRUD Produit
 */
Route::post('addProduit', [\App\Http\Controllers\ProduitController::class, 'addProduit']);
Route::put('update/{id}', [\App\Http\Controllers\ProduitController::class, 'update']);
Route::delete('supprimerProduit/{id}', [ProduitController::class, 'supprimerProduit']);
/*
 * Api CRUD CategorieProduit
 */

Route::post('addCategorieProduit', [\App\Http\Controllers\BoutiqueController::class, 'addCategorieProduit']);
Route::put('updateCategorieProduit/{id}', [\App\Http\Controllers\BoutiqueController::class, 'updateCategorieProduit']);
Route::delete('supprimerCategorieProduit/{id}', [BoutiqueController::class, 'supprimerCategorieProduit']);
/*
 * Api CRUD Boutique
 *
 */
Route::post('addBoutique', [\App\Http\Controllers\BoutiqueController::class, 'addBoutique']);
Route::put('updateBoutique/{id}', [\App\Http\Controllers\BoutiqueController::class, 'updateBoutique']);
Route::delete('supprimerBoutique/{id}', [BoutiqueController::class, 'supprimerBoutique']);
/*
 * Api CRUD CategorieBoutique
 *
 */
Route::post('addCategorieBoutique', [\App\Http\Controllers\Categorie_BoutiqueController::class, 'addCategorieBoutique']);
Route::put('updateCategorieBoutique/{id}', [\App\Http\Controllers\Categorie_BoutiqueController::class, 'updateCategorieBoutique']);
Route::delete('supprimerCategorieBoutique/{id}', [Categorie_BoutiqueController::class, 'supprimerCategorieBoutique']);
/*
 * Api CRUD Detaill commande
 *
 */
Route::post('addDetailleCommande', [\App\Http\Controllers\Detaille_CommandeController::class, 'addDetailleCommande']);
Route::put('updateDetailleCommande/{id}', [\App\Http\Controllers\Detaille_CommandeController::class, 'updateDetailleCommande']);
Route::delete('supprimerDetailleCommande/{id}', [Detaille_CommandeController::class, 'supprimerDetailleCommande']);
/*
 * Api CRUD commande
 *
 */
Route::post('addCommande', [\App\Http\Controllers\CommandeController::class, 'addCommande']);
Route::put('updateCommande/{id}', [\App\Http\Controllers\CommandeController::class, 'updateCommande']);
Route::delete('supprimerCommande/{id}', [CommandeController::class, 'supprimerCommande']);
/*
 * Api CRUD livraison
 *
 */
Route::post('addlivraison', [\App\Http\Controllers\LivraisonController::class, 'addlivraison']);
Route::put('updatelivraison/{id}', [\App\Http\Controllers\LivraisonController::class, 'updatelivraison']);
Route::delete('supprimerlivraison/{id}', [LivraisonController::class, 'supprimerlivraison']);
