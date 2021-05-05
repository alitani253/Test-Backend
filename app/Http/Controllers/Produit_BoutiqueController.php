<?php

namespace App\Http\Controllers;

use App\Models\Produit_Boutique;
use Illuminate\Http\Request;

class Produit_BoutiqueController extends Controller
{

    //    protected $fillable = ['prix_vent','qntstock','id_boutique','id_detaille_commandes','id_produit','created_at', 'updated_at'];
    public  function addProduitBoutique(Request $request){
        $data = $request->all();
        $produitboutique = new Produit_Boutique();
        $produitboutique->prix_vent = $data['prix_vent'];
        $produitboutique->qntstock = $data['qntstock'];
        $produitboutique->id_boutique = $data['id_boutique'];
        $produitboutique->id_detaille_commandes = $data['id_detaille_commandes'];
        $produitboutique->id_produit = $data['id_produit'];
        $produitboutique->save();
        return $produitboutique;
    }
    public function updateProduitBoutique(Request $request, $id){

        $produitboutique = Produit_Boutique::findOrFail($id);
        $produitboutique->update($request->all());
        return response([
            'message'=> 'mise a jour de Produit Boutique',
            'donnees'=> $produitboutique
        ]);
    }
    public function supprimerProduitBoutique(Request $request, $id){

        $produitboutique= Produit_Boutique::findOrFail($id);
        $produitboutique->delete();
        return response([
            'message'=> 'suppression de Produit Boutique'
        ], 204);
    }

}
