<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *  @property int $id
 *  @property date $date_commande
 * @property string $num_commande
 * @property string $created_at
 * @property string $updated_at
 */

class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['date_commande', 'num_commande','created_at', 'updated_at'];
}
