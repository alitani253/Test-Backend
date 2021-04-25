<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *  @property integer $id
 *  @property string $libelle
 * @property string $code_barre
 * @property string $image
 * @property string $qr_code
 * @property string $created_at
 * @property string $updated_at
 */

class Produit extends Model
{
    use HasFactory;
    protected $fillable = ['libelle', 'code_barre','image','qr_code','created_at', 'updated_at'];

    public function Categorie_Produit()
    {
        return $this->belongsTo(Categorie_Produit::class);
    }
}
