<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $id_produit_boutique
 * @property integer $id_commande
 * @property double $pu
 * @property int $qnt
 * @property string $created_at
 * @property string $updated_at
 */
class Detaille_Commande extends Model
{
    use HasFactory;
    protected $fillable = ['id_produit_boutique','id_commande','pu','qnt','created_at', 'updated_at'];
    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }
    public function produit_boutique()
    {
        return $this->belongsTo(Produit_Boutique::class);
    }
}
