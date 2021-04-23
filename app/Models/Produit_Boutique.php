<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @property double $prix_vent
 * @property int $qntstock
 * @property string $created_at
 * @property string $updated_at
 */
class Produit_Boutique extends Model
{
    use HasFactory;
    protected $fillable = ['prix_vent','qntstock','created_at', 'updated_at'];


}
