<?php

namespace App\Http\Controllers;

use App\Models\Boutique;
use Illuminate\Http\Request;

class BoutiqueController extends Controller
{

    public  function addBoutique(Request $request){
        $data = $request->all();
        $boutique = new Boutique();
        $boutique->id_categorie_boutique = $data['id_categorie_boutique'];
        $boutique->id_boutiquier = $data['id_boutiquier'];
        $boutique->nom = $data['nom'];
        $boutique->email = $data['email'];
        $boutique->adresse = $data['adresse'];
        $boutique->tva = $data['tva'];
        $boutique->longitude = $data['longitude'];
        $boutique->attributes = $data['attributes'];
        $boutique->save();

        return $boutique;
    }

    public function updateBoutique(Request $request, $id){

        $boutique = Boutique::findOrFail($id);
        $boutique->update($request->all());
        return response([
            'message'=> 'mise a jour de Produit',
            'donnees'=> $boutique
        ]);
    }
    public function supprimerBoutique(Request $request, $id){

        $boutique= Boutique::findOrFail($id);
        $boutique->delete();
        return response([
            'message'=> 'suppression de Produit'
        ], 204);
    }


}
