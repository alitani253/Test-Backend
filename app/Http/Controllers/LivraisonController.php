<?php

namespace App\Http\Controllers;

use App\Models\Livraison;
use Illuminate\Http\Request;

class LivraisonController extends Controller
{
    //    protected $fillable = ['id_livreur','id_commande','frais_livraison','date_livraison','adress_livraison', 'created_at', 'updated_at'];
    public  function addlivraison(Request $request){
        $data = $request->all();
        $livraison = new Livraison();
        $livraison->id_livreur = $data['id_livreur'];
        $livraison->id_commande = $data['id_commande'];
        $livraison->frais_livraison = $data['frais_livraison'];
        $livraison->date_livraison = $data['date_livraison'];
        $livraison->adress_livraison = $data['adress_livraison'];
        $livraison->save();
        return $livraison;
    }
    public function updatelivraison(Request $request, $id){

        $livraison = Livraison::findOrFail($id);
        $livraison->update($request->all());
        return response([
            'message'=> 'mise a jour de Livraison',
            'donnees'=> $livraison
        ]);
    }
    public function supprimerlivraison(Request $request, $id){

        $livraison= Livraison::findOrFail($id);
        $livraison->delete();
        return response([
            'message'=> 'suppression de Livraison'
        ], 204);
    }
}
