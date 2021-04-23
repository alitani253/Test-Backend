<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @property int $id
 * @property string $libelle
 * @property string $created_at
 * @property string $updated_at
 */

class Categorie_Boutique extends Model
{
    use HasFactory;
    protected $fillable = ['libelle', 'created_at', 'updated_at'];


}
