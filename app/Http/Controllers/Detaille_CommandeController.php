<?php

namespace App\Http\Controllers;

use App\Models\Detaille_Commande;
use Illuminate\Http\Request;

class Detaille_CommandeController extends Controller
{

    public  function addDetailleCommande(Request $request){
        $data = $request->all();
        $detaillecommande = new Detaille_Commande();
        $detaillecommande->id_produit_boutique = $data['id_produit_boutique'];
        $detaillecommande->id_commande = $data['id_commande'];
        $detaillecommande->pu = $data['pu'];
        $detaillecommande->qnt = $data['qnt'];
        $detaillecommande->save();
        return $detaillecommande;

    }
    public function updateDetailleCommande(Request $request, $id){

        $detaillecommande = Detaille_Commande::findOrFail($id);
        $detaillecommande->update($request->all());
        return response([
            'message'=> 'mise a jour Detaille Commande',
            'donnees'=> $detaillecommande
        ]);
    }
    public function supprimerDetailleCommande(Request $request, $id){

        $detaillecommande= Detaille_Commande::findOrFail($id);
        $detaillecommande->delete();
        return response([
            'message'=> 'suppression de Detaille Commande'
        ], 204);
    }

}
