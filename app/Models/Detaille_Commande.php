<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property double $pu
 * @property int $qnt
 * @property string $created_at
 * @property string $updated_at
 */
class Detaille_Commande extends Model
{
    use HasFactory;
    protected $fillable = ['pu','qnt','created_at', 'updated_at'];
}
