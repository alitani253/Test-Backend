<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $libelle
 * @property string $code
 * @property string $created_at
 * @property string $updated_at
 */
class Categorie_Produit extends Model
{
    use HasFactory;
    protected $fillable = ['libelle', 'code','created_at', 'updated_at'];
}
