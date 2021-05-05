<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
  public  function addProduit(Request $request){
       $data = $request->all();
       $produit = new Produit();
       $produit->libelle = $data['libelle'];
       $produit->code_barre = $data['code_barre'];
       $produit->qr_code = $data['qr_code'];
       $produit->image = $data['image'];
       $produit->id_categorie__produits = $data['id_categorie__produits'];
       $produit->save();
       return $produit;
  }
   public function updateProduit(Request $request, $id){

        $produit = Produit::findOrFail($id);
        $produit->update($request->all());
        return response([
            'message'=> 'mise a jour de Produit',
            'donnees'=> $produit
        ]);
    }
    public function supprimerProduit(Request $request, $id){

        $produit= Produit::findOrFail($id);
        $produit->delete();
        return response([
            'message'=> 'suppression de Produit'
        ], 204);
    }



}
