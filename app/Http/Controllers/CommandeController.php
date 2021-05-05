<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    //protected $fillable = ['', '', '','created_at', 'updated_at'];

    public  function addCommande(Request $request){
        $data = $request->all();
        $commande = new Commande();
        $commande->id_client = $data['id_client'];
        $commande->date_commande = $data['date_commande'];
        $commande->num_commande = $data['num_commande'];
        $commande->save();
        return $commande;

    }
    public function updateCommande(Request $request, $id){

        $commande = Commande::findOrFail($id);
        $commande->update($request->all());
        return response([
            'message'=> 'mise a jour Commande',
            'donnees'=> $commande
        ]);
    }
    public function supprimerCommande(Request $request, $id){

        $commande= Commande::findOrFail($id);
        $commande->delete();
        return response([
            'message'=> 'suppression de Commande'
        ], 204);
    }
}
