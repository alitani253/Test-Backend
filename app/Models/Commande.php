<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *  @property integer $id
 *  @property integer $id_client
 *  @property string $date_commande
 * @property string $num_commande
 * @property string $created_at
 * @property string $updated_at
 */

class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['id_client', 'date_commande', 'num_commande','created_at', 'updated_at'];
    public function client()
    {
        return $this->belongsTo(User::class);
    }

    public function detaille_commandes()
    {
        return $this->hasMany(Detaille_Commande::class);
    }

    public function livraisons()
    {
        return $this->belongsTo(Livraison::class);
    }



}
