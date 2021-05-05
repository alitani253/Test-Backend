<?php

namespace App\Http\Controllers;

use App\Models\Categorie_Produit;
use App\Models\Produit;
use Illuminate\Http\Request;

class Categorie_ProduitController extends Controller
{

    public  function addCategorieProduit(Request $request){
        $data = $request->all();
        $produit = new Categorie_Produit();
        $produit->libelle = $data['libelle'];
        $produit->code = $data['code'];$produit->save();
        return $produit;
    }
    public function updateCategorieProduit(Request $request, $id){

        $produit = Categorie_Produit::findOrFail($id);
        $produit->update($request->all());
        return response([
            'message'=> 'mise a jour de Produit',
            'donnees'=> $produit
        ]);
    }
    public function supprimerCategorieProduit(Request $request, $id){

        $produit= Categorie_Produit::findOrFail($id);
        $produit->delete();
        return response([
            'message'=> 'suppression de Produit'
        ], 204);
    }




}
