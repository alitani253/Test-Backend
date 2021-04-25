<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @property integer $id
 * @property integer $id_livreur
 * @property integer $id_commande
 * @property string $date_livraison
 * @property double $frais_livraison
 * @property string $adress_livraison
 * @property string $created_at
 * @property string $updated_at
 */
class Livraison extends Model
{
    use HasFactory;
    protected $fillable = ['id_livreur','id_commande','frais_livraison','date_livraison','adress_livraison', 'created_at', 'updated_at'];

    public function livreur()
    {
        return $this->belongsTo(User::class);
    }
    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }
    public function aviss()
    {
        return $this->hasMany(Avis::class);
    }

}
