<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @property integer $id
 * @property double $prix_vent
 * @property int $qntstock
 * @property integer $id_boutique
 * @property integer $id_detaille_commandes
 * @property integer $id_produit
 * @property string $created_at
 * @property string $updated_at
 */
class Produit_Boutique extends Model
{
    use HasFactory;
    protected $fillable = ['prix_vent','qntstock','id_boutique','id_detaille_commandes','id_produit','created_at', 'updated_at'];

    public function detaille_Commandes()
    {
        return $this->hasMany(Detaille_Commande::class);
    }

}
