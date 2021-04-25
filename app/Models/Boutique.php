<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 *  @property integer $id
 * @property integer $id_boutiquier
 * @property integer $id_categorie_Boutique
 *  @property string $nom
 * @property string $email
 * @property string $adresse
 * @property float $tva
 * @property string $longitude
 * @property string $attributes
 * @property string $created_at
 * @property string $updated_at
 */

class Boutique extends Model
{
    use HasFactory;
    protected $fillable = ['id_categorie_Boutique','id_boutiquier','nom','email','adresse','tva','longitude','attributes','created_at', 'updated_at'];
    public function Categorie_Produit()
    {
        return $this->belongsTo(Categorie_Boutique::class);
    }
    public function Boutiquier()
    {
        return $this->belongsTo(User::class);
    }

}
