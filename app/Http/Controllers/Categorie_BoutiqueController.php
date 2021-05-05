<?php

namespace App\Http\Controllers;

use App\Models\Boutique;
use App\Models\Categorie_Boutique;
use Illuminate\Http\Request;

class Categorie_BoutiqueController extends Controller
{

    public  function addCategorieBoutique(Request $request){
        $data = $request->all();
        $categorieboutique = new Categorie_Boutique();
        $categorieboutique->libelle = $data['libelle'];
        $categorieboutique->save();

        return $categorieboutique;
    }

    public function updateCategorieBoutique(Request $request, $id){

        $categorieboutique = Categorie_Boutique::findOrFail($id);
        $categorieboutique->update($request->all());
        return response([
            'message'=> 'mise a jour de Produit',
            'donnees'=> $categorieboutique
        ]);
    }
    public function supprimerCategorieBoutique(Request $request, $id){

        $categorieboutique= Categorie_Boutique::findOrFail($id);
        $categorieboutique->delete();
        return response([
            'message'=> 'suppression de Produit'
        ], 204);
    }


}
